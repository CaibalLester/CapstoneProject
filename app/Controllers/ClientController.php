<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ClientModel;
use App\Models\AgentModel;
use App\Models\PlanModel;
use App\Models\ConfirmModel;

class ClientController extends BaseController
{
    private $confirm;
    private $plan;
    private $user;
    private $client;
    protected $agent;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->client = new ClientModel();
        $this->agent = new AgentModel();
        $this->plan = new PlanModel();
        $this->confirm = new ConfirmModel();
    }

    public function ClientService()
    {
        $data['plan'] = $this->plan->paginate(6, 'plan');
        $data['pager'] = $this->plan->pager;
        return view('Client/ClientService', $data);
    }

    public function ServiceDescription($token)
    {
        $data['plan'] = $this->plan->findAll();
        $data['plandesc'] = $this->plan->where('token', $token)->first();
        return view('Client/ServiceDescription', $data);
    }

    public function ClientAgent()
    {
        $data = $this->ag();
        $data['plan'] = $this->plan->findAll();
        return view('Client/ClientAgent', $data);
    }

    public function applynow()
    {
        helper(['form']);
        return view('Client/applynow');
    }

    public function avail()
    {
        $userToken = bin2hex(random_bytes(50));
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email,id]',
            'password' => 'required|min_length[8]|max_length[50]',
            'confirmpassword' => 'matches[password]',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
        ];
        if ($this->validate($rules)) {
            $data = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role' => 'client',
                'status' => 'unverified',
                'accountStatus' => 'active',    
                'token' => $userToken,
                'confirm' => 'false'
            ];
            // var_dump($data);
            $this->user->save($data);
            $userId = $this->user->insertID();
            $clientData = [
                'applicant_id' => $userId,
                'username' => $this->request->getVar('username'),
                'number' => $this->request->getVar('phone'),
                'firstName' => $this->request->getVar('firstname'),
                'lastName' => $this->request->getVar('lastname'),
                'middleName' => $this->request->getVar('middlename'),
                'email' => $this->request->getVar('email'),
                'refcode' => NULL,
                'token' => $userToken,
                'role' => 'client',
            ];
            $this->confirm->save($clientData);
            // var_dump($clientData);
            // $emailSubject = "Account Registration Confirmation";
            // $emailMessage = "Thank you for registering! Your account is currently registered. Please wait for confirmation from the admin before you can log in. An email has been sent to your registered email address.";
            // $this->sendVerificationEmail($this->request->getVar('email'), $emailSubject, $emailMessage);
            return redirect()->to('/login')->with('success', 'Account Registered please be patient. An email has been sent to your registered email address.');
        } else {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->to('/applynow')->withInput();
        }
    }

    public function ag()
    {
        $data['agents'] = $this->agent->paginate(8, 'agent');
        $data['pager'] = $this->agent->pager;
        return $data;
    }

    public function registers()
    {
        return view('Client/registers');
    }

    private function sendVerificationEmail($to, $subject, $message)
    {
        $email = \Config\Services::email();
        $config = [
            'protocol' => 'smtp',
            'SMTPHost' => 'smtp.gmail.com',
            'SMTPUser' => 'alejandrogino950@gmail.com',
            'SMTPPass' => 'ktngmlxxdppfemnx',
            'SMTPPort' => 587,
            'SMTPCrypto' => 'tls',
            'mailType' => 'html',
            'charset' => 'utf-8'
        ];
        $email->initialize($config);
        $email->setTo($to);
        $email->setFrom('alejandrogino950@gmail.com', 'ALLIANZ PNB CALAPAN');
        $email->setMessage($message);
        if ($email->send()) {
            echo 'Email sent successfully.';
        } else {
            echo 'Error: ' . $email->printDebugger(['headers']);
        }
    }

    public function ClientPage()
    {
        $data = array_merge($this->getData(), $this->ClientData());
        return view('Client/dashboard/dashboard', $data);
    }

    public function paymenthistory()
    {
        $data = array_merge($this->getData(), $this->ClientData());
        return view('Client/dashboard/history',$data);
    }

    public function viewplans()
    {
        $data = array_merge($this->getData(), $this->ClientData());
        $data['plan'] = $this->plan->findAll();
        return view('Client/dashboard/plans' , $data);
    }

    public function clientprofile()
    {
        $data = array_merge($this->getData(), $this->ClientData());
        return view('Client/dashboard/myprofile',$data);
    }

    public function getData()
    {
        $session = session();
        $userId = $session->get('id');
        $data['user'] = $this->user->find($userId);
        return $data;
    }
    public function ClientData()
    {
        $session = session();
        $userId = $session->get('id');
        $data['client'] = $this->client->where('client_id', $userId)
            ->orderBy('id', 'desc')
            ->first();
        return $data;
    }
    public function svclient()
    {
        $session = session();
        $userId = $session->get('id');

        // Initialize $data array
        $data = [];
        $img = '';

        // Get the old image file name from the database
        $oldpic = $this->client->select('profile')->where('client_id', $userId)->first();

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
                    $img['profile'] = $imageName;

                    // Delete the old image file if it exists
                    if (!empty($oldpic['profile'])) {
                        $oldFilePath = $uploadPath . $oldpic['profile'];
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
        $data = [
            'lastName' => $this->request->getVar('lastname'),
            'firstName' => $this->request->getVar('firstname'),
            'middleName' => $this->request->getVar('middlename'),
            'username' => $this->request->getVar('username'),
            'number' => $this->request->getVar('number'),
            'email' => $this->request->getVar('email'),
            'birthday' => $this->request->getVar('birthday'),
            'region' => $this->request->getVar('region_text'),
            'province' => $this->request->getVar('province_text'),
            'city' => $this->request->getVar('city_text'),
            'image' => $img,
            'barangay' => $this->request->getVar('barangay_text'),
            'street' => $this->request->getVar('street'),
        ];

        // Check if $data array is not empty before updating the database
        if (!empty($data)) {
            // Update the admin data
            $this->client->set($data)->where('client_id', $userId)->update();
        }

        return redirect()->to('/clientprofile');
    }
}
