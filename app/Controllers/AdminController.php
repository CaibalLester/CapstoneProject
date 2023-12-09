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
        $this->applicant = new AgentModel();
    }
    public function AdDash()
    {
        $data = $this->getData();
        return view('Admin/AdDash', $data);
    }
    public function ManageAgent()
    {

        $data = $this->getData();
        return view('Admin/ManageAgent', $data);
    }

    // Controller method

    public function ManageApplicant()
    {
        $appmodel = new ApplicantModel();
        $data = $this->getData();
        $data['applicant'] = $appmodel->paginate();
        $data['pager'] = $appmodel->pager;
        return view('Admin/ManageApplicant', $data);
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

        $data = [
            'agent_id' => $this->request->getVar('user_id'),
            'AgentCode' => $this->generateRandomCode(),
            'Agentfullname' => $this->request->getVar('Agentfullname'),
            'FA' => $this->request->getVar('referralBy'),
            'branch' => $this->request->getVar('preferredArea'),
        ];

        // Save agent data
        $agent->save($data);

        $userId = $this->request->getVar('user_id');
        //Update status to confirmed
        $appmodel->update($userId, ['status' => 'confirmed']);
        // Update user role to 'agent'
        $userModel->update($userId, ['role' => 'agent']);

        return redirect()->to('/ManageApplicant');
    }
    
}