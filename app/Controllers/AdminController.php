<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\RTCController;
use App\Models\AdminModel;
use \App\Models\UserModel;
use App\Models\ApplicantModel;
use App\Models\Form1Model;
use App\Models\Form3Model;
use App\Models\AgentModel;

use Dompdf\Dompdf;
use Dompdf\Options;

class AdminController extends BaseController
{
    private $rtc;
    private $agent;
    private $user;
    private $applicant;
    private $admin;
    private $form1;
    private $form3;
    public function __construct()
    {
        $this->rtc = new RTCController();
        $this->user = new UserModel();
        $this->applicant = new ApplicantModel();
        $this->agent = new AgentModel();
        $this->admin = new AdminModel();
        $this->form1 = new Form1Model();
        $this->form3 = new Form3Model();
    }

    public function AdDash()
    {
        $totalAgents = count($this->agent->findAll());
        $totalApplicants = count($this->applicant->findAll());
        $pendingApplicants = $this->applicant->where('status', 'pending')->countAllResults();
        $data = array_merge($this->getData(), $this->getDataAd(), $this->topagent(), $this->getagent());
        $data['totalAgents'] = $totalAgents;
        $data['totalApplicants'] = $totalApplicants;
        $data['pendingApplicants'] = $pendingApplicants;
        return view('Admin/AdDash', $data);
    }
    //Top 3 Agents
    private function topagent()
    {
        // Load the database service
        $builder = \Config\Database::connect()->table('agent a');
        $builder->select('a.username, a.FA, a.agentprofile, (SELECT COUNT(*) FROM agent b WHERE b.FA = a.agent_id) AS total_fA');
        $builder->orderBy('total_fa', 'DESC');
        $builder->limit(3);
        // Get the result as an array
        $result = $builder->get()->getResultArray();
        // Pass the data to your view or perform any other actions
        $data['top'] = $result;
        // Return the data
        return $data;
    }
    private function getagent()
    {
        $data['agent'] = $this->agent->findAll();
        return $data;
    }

    public function ManageAgent()
    {
        // $agentModel = new AgentModel();
        $data = $this->usermerge();
        $data['agent'] = $this->agent->paginate(10, 'group1'); // Change 10 to the number of items per page
        $data['pager'] = $this->agent->pager;
        return view('Admin/ManageAgent', $data);
    }

    public function ManageApplicant()
    {
        $appmodel = new ApplicantModel();
        $data = $this->usermerge();
        // Add a where condition to retrieve only records with status = 'confirmed'
        $applicants = $appmodel->where('status', 'pending')->paginate(10, 'group1');

        $data['applicant'] = $applicants;
        $data['pager'] = $appmodel->pager;

        return view('Admin/ManageApplicant', $data);
    }

    private function usermerge()
    {
        $session = session();
        $userId = $session->get('id');
        $data = $this->getDataAd();
        $userModel = new UserModel();
        $data['user'] = $userModel->find($userId);
        return $data;
    }

    public function userSearch()
    {
        $appmodel = new ApplicantModel();
        $data = $this->usermerge();
        $filterUser = $this->request->getPost('filterUser');
        $applicants = $this->applicant->like('username', $filterUser)->where('status', 'pending')->paginate(10, 'group1');
        $data['applicant'] = $applicants;
        $data['pager'] = $this->applicant->pager;

        return view('Admin/ManageApplicant', $data);
    }

    // Controller method for searching agents by full name
    public function agentSearch()
    {
        $agentModel = new AgentModel();
        $data = $this->usermerge();
        // Get the search input from the form
        $filterUser = $this->request->getPost('filterAgent');
        // Add a where condition to filter records based on the search input
        $agents = $agentModel->like('username', $filterUser)->paginate(10, 'group1');
        $data['pager'] = $agentModel->pager; // Use $agentModel->pager
        $data['agent'] = $agents;
        return view('Admin/ManageAgent', $data);
    }



    private function getDataAd()
    {
        $session = session();
        $userId = $session->get('id');
        $data['admin'] = $this->admin->where('admin_id', $userId)
            ->orderBy('id', 'desc')
            ->first();

        return $data;
    }

    public function AdProfile()
    {
        $data = array_merge($this->getData(), $this->getDataAd());
        return view('Admin/AdProfile', $data);
    }

    public function AdSetting()
    {
        $data = array_merge($this->getData(), $this->getDataAd());
        return view('Admin/AdSetting', $data);
    }

    public function AdHelp()
    {
        $data = array_merge($this->getData(), $this->getDataAd());
        return view('Admin/AdHelp', $data);
    }

    private function getData()
    {
        $session = session();
        $userId = $session->get('id');
        $data['user'] = $this->user->find($userId);
        return $data;
    }

    public function viewAppForm($token)
    {
        $data = $this->form1->where('app_life_token', $token)->first();
        return view('Admin/Forms/details', ['lifechangerform' => $data]);
    }
    public function viewAppForm2($token)
    {
        $data = $this->form1->where('app_life_token', $token)->first();
        return view('Admin/Forms/details', ['lifechangerform' => $data]);
    }
    public function viewAppForm3($token)
    {
        $data = $this->form3->where('app_gli_token', $token)->first();
        return view('Admin/Forms/details3', ['gli' => $data]);
    }
    public function viewAppForm4($token)
    {
        $data = $this->form1->where('app_life_token', $token)->first();
        return view('Admin/Forms/details', ['lifechangerform' => $data]);
    }
    public function viewAppForm5($token)
    {
        $data = $this->form1->where('app_life_token', $token)->first();
        return view('Admin/Forms/details', ['lifechangerform' => $data]);
    }

    public function generateRandomCode($length = 6)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';

        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $code;
    }

    public function newAgent()
    {
        $agent = new AgentModel();
        $userModel = new UserModel();
        $appmodel = new ApplicantModel();
        $userId = $this->request->getVar('user_id');

        $applicantData = $appmodel->where('applicant_id', $userId)->first();
        $data = [
            'agent_id' => $this->request->getVar('user_id'),
            'getId' => $this->request->getVar('user_id'),
            'AgentCode' => $this->generateRandomCode(),
            'Agentfullname' => $this->request->getVar('Agentfullname'),
            'FA' => $this->request->getVar('referralBy'),
            'branch' => $this->request->getVar('preferredArea'),
            'email' => $applicantData['email'],
            'agentprofile' => $applicantData['profile'],
            'number' => $applicantData['number'],

            'birthday' => $this->request->getVar('birthdate'),
            'address' => $this->request->getVar('homeAddress'),
            'username' => $applicantData['username'],
            
        ];

        // Save agent data
        $agent->save($data);

        // Update status to confirmed using raw query
        $query = "UPDATE applicant SET status = 'confirmed' WHERE applicant_id = ?";
        $appmodel->query($query, [$userId]);

        // Update user role to 'agent' in the UserModel
        $userModel->update($userId, ['role' => 'agent']);

        return redirect()->to('/ManageApplicant');
    }

    public function svad()
    {
        $session = session();
        $userId = $session->get('id');

        // Initialize $data array
        $data = [];

        // Get the old image file name from the database
        $oldAdmin = $this->admin->select('adminProfile')->where('admin_id', $userId)->first();

        // Check if a file is uploaded
        if ($imageFile = $this->request->getFile('profile')) {
            // Check if the file is valid
            if ($imageFile->isValid()) {
                // Generate a unique name for the uploaded image
                $imageName = $imageFile->getRandomName();

                // Set the path to the upload directory
                $uploadPath = FCPATH . 'uploads/';

                // Move the uploaded image to the upload directory
                if ($imageFile->move($uploadPath, $imageName)) {
                    // Image upload successful, store the image filename in the database
                    $data['adminProfile'] = $imageName;

                    // Delete the old image file if it exists
                    if (!empty($oldAdmin['adminProfile'])) {
                        $oldFilePath = $uploadPath . $oldAdmin['adminProfile'];
                        if (file_exists($oldFilePath)) {
                            unlink($oldFilePath);
                        }
                    }
                } else {
                    $error = $imageFile->getError();
                }
            }
        }

        // Add other form data to the data array
        $data += [
            'lastname' => $this->request->getVar('lastname'),
            'firstname' => $this->request->getVar('firstname'),
            'middlename' => $this->request->getVar('middlename'),
            'username' => $this->request->getVar('username'),
            'number' => $this->request->getVar('number'),
            'email' => $this->request->getVar('email'),
            'birthday' => $this->request->getVar('birthday'),
            'region' => $this->request->getVar('region_text'),
            'province' => $this->request->getVar('province_text'),
            'city' => $this->request->getVar('city_text'),
            'barangay' => $this->request->getVar('barangay_text'),
            'street' => $this->request->getVar('street'),
        ];

        // Check if $data array is not empty before updating the database
        if (!empty($data)) {
            // Update the admin data
            $this->admin->set($data)->where('admin_id', $userId)->update();
        }

        return redirect()->to('/AdSetting');
    }

    public function generatePdf($id)
    {
        $app = $this->applicant->where('applicant_id', $id)->first();
        $lifechangerFormData = $this->form1->where('user_id', $id)->first();

        // Check if the data is found
        if (!$lifechangerFormData) {
            // Handle the case where data is not found, redirect, or show an error
            return redirect()->to('/'); // Change the URL or handle as needed
        }

        // Load your view content into a variable
        $data['lifechangerform'] = $lifechangerFormData;
        $html = view('Admin/Forms/details', $data);

        // Create an instance of Dompdf
        $options = new Options();
        $options->set('isHtml4ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);

        // Load HTML content to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (first step)
        $dompdf->render();

        // Save PDF to a file (optional)
        // $dompdf->output('path/to/store/file.pdf');

        // Output PDF to the browser
        $dompdf->stream('lifechanger.pdf', array('Attachment' => 0));
    }

    public function generatePdf3($id)
    {
        $app = $this->applicant->where('applicant_id', $id)->first();
        $gli = $this->form3->where('applicant_id', $id)->first();

        // Check if the data is found
        if (!$gli) {
            // Handle the case where data is not found, redirect, or show an error
            return redirect()->to('/'); // Change the URL or handle as needed
        }
        // Load your view content into a variable
        $data['gli'] = $gli;
        $html = view('Admin/Forms/details3', $data);

        // Create an instance of Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);

        // Load HTML content to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF (first step)
        $dompdf->render();

        // Output PDF to the browser
        $dompdf->stream($app['username'] . '-gli.pdf', array('Attachment' => 0));
    }

}
