<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\UserModel;
use App\Models\ApplicantModel;
use App\Models\Form1Model;
use App\Models\AgentModel;

class AdminController extends BaseController
{
    private $agent;
    private $user;
    private $applicant;
    public function __construct()
    {
        $this->user = new UserModel();
        $this->applicant = new ApplicantModel();
        $this->agent = new AgentModel();
    }
    public function AdDash()
    {
        $data = $this->getData();
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

    public function AdProfile()
    {
        $data = $this->getData();
        return view('Admin/AdProfile', $data);
    }

    public function AdSetting()
    {
        $data = $this->getData();
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

}