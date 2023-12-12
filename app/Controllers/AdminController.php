<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use \App\Models\UserModel;
use App\Models\ApplicantModel;
use App\Models\Form1Model;
use App\Models\AgentModel;

class AdminController extends BaseController
{

    private $agent;
    private $user;
    private $applicant;
    private $admin;
    public function __construct()
    {
        $this->user = new UserModel();
        $this->applicant = new ApplicantModel();
        $this->agent = new AgentModel();
        $this->admin = new AdminModel();
    }
    public function AdDash()
    {
        $session = session();
        if ($session->get('role') !== 'admin') {
            return redirect()->to('/');
        }

        $agentModel = new AgentModel();
        $applicantModel = new ApplicantModel();

        // Calculate the total number of agents
        $totalAgents = count($agentModel->findAll());

        // Calculate the total number of applicants
        $totalApplicants = count($applicantModel->findAll());

        // Count the number of applicants with status 'pending'
        $pendingApplicants = $applicantModel->where('status', 'pending')->countAllResults();

        $data = $this->getData();
        $data['totalAgents'] = $totalAgents;
        $data['totalApplicants'] = $totalApplicants;
        $data['pendingApplicants'] = $pendingApplicants;
        
        return view('Admin/AdDash', $data);
    }
    public function ManageAgent()
    {
        // Assuming that AgentModel is the correct model for managing agents
        $agentModel = new AgentModel();
        $data = $this->getData();

        // Use the model to fetch all records
        $data['agent'] = $agentModel->findAll();

        return view('Admin/ManageAgent', $data);
    }

    public function ManageApplicant()
    {
        $appmodel = new ApplicantModel();
        $data = $this->getData();

        // Add a where condition to retrieve only records with status = 'confirmed'
        $applicants = $appmodel->where('status', 'pending')->paginate();

        $data['applicant'] = $applicants;
        $data['pager'] = $appmodel->pager;

        return view('Admin/ManageApplicant', $data);
    }

    public function userSearch()
    {
        $appmodel = new ApplicantModel();
        $data = $this->getData();

        // Get the search input from the form
        $filterUser = $this->request->getPost('filterUser');

        // Add a where condition to filter records based on the search input and status
        $applicants = $appmodel->like('username', $filterUser)->where('status', 'pending')->paginate();

        $data['applicant'] = $applicants;
        $data['pager'] = $appmodel->pager;

        return view('Admin/ManageApplicant', $data);
    }

    // Controller method for searching agents by full name
    public function agentSearch()
    {
        $agentModel = new AgentModel();
        $data = $this->getData();

        // Get the search input from the form
        $filterUser = $this->request->getPost('filterAgent');

        // Add a where condition to filter records based on the search input
        $agents = $agentModel->like('Agentfullname', $filterUser)->findAll();

        $data['agent'] = $agents;

        return view('Admin/ManageAgent', $data);
    }
    private function getDataAd()
    {
        $session = session();

        // Get the user ID from the session
        $userId = $session->get('id');

        // Load the User model
        $adminModel = new AdminModel();

        // Find the user by ID
        $data['admin'] = $adminModel->where('admin_id', $userId)
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
        $data = $this->getData();
        return view('Admin/AdHelp', $data);
    }
    private function getData()
    {
        $session = session();
        //Check if the user is logged in
        if (!$session->get('id')) {
            // Redirect or handle the case where the user is not logged in
            return redirect()->to('login');
        }
        // Get the user ID from the session
        $userId = $session->get('id');
        // Load the User model
        $userModel = new UserModel();
        // Find the user by ID
        $data['user'] = $userModel->find($userId);
        return $data;
    }
    public function ViewAppForm($id)
    {
        // Load the Form1Model
        $form1Model = new Form1Model();
        // Find the form data based on the user ID
        $lifechangerFormData = $form1Model->where('user_id', $id)->first();
        // Pass the fetched data to the view
        return view('Admin/details', ['lifechangerform' => $lifechangerFormData]);
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

        // Check if a file is uploaded
        if ($imageFile = $this->request->getFile('adminProfile')) {
            // Check if the file is valid
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                // Generate a unique name for the uploaded image
                $imageName = $imageFile->getRandomName();

                // Set the path to the upload directory
                $uploadPath = FCPATH . 'uploads/';

                // Move the uploaded image to the upload directory
                if ($imageFile->move($uploadPath, $imageName)) {
                    // Image upload successful, store the image filename in the database
                    $data['adminProfile'] = $imageName;
                } else {
                    $error = $imageFile->getError();
                    // Handle the error as needed
                }
            }
        }
        // Add other form data to the data array
        $data += [
            'Adminfullname' => $this->request->getVar('Adminfullname'),
            'email' => $this->request->getVar('email'),
            'birthday' => $this->request->getVar('birthday'),
            'username' => $this->request->getVar('username'),
            'division' => $this->request->getVar('division'),
            'address' => $this->request->getVar('address'),
            'number' => $this->request->getVar('number'),
        ];

        // Check if $data array is not empty before updating the database
        if (!empty($data)) {
            // Update the applicant data
            $this->admin->set($data)->where('admin_id', $userId)->update();
        }

        return redirect()->to('/AdSetting');
    }


}