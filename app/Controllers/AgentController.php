<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\AgentModel;
use \App\Models\UserModel;
use App\Models\ApplicantModel;

class AgentController extends BaseController
{
    private $user;
    private $applicant;
    private $agent;
    public function __construct()
    {
        $this->agent = new AgentModel();
        $this->user = new UserModel();
        $this->applicant = new ApplicantModel();
    }
    public function AgDash()
    {
        $session = session();
        if ($session->get('role') !== 'agent') {
            return redirect()->to('/');
        }
        $data = array_merge($this->getData(), $this->getDataAge());

        return view('Agent/AgDash', $data);
    }

    public function AgProfile()
    {
        $session = session();
        if ($session->get('role') !== 'agent') {
            return redirect()->to('/');
        }
        $data = array_merge($this->getData(), $this->getDataAge());
        return view('Agent/AgProfile', $data);
    }
    public function AgSetting()
    {
        $session = session();
        if ($session->get('role') !== 'agent') {
            return redirect()->to('/');
        }
        $data = array_merge($this->getData(), $this->getDataAge());
        return view('Agent/AgSetting', $data);
    }
    public function AgHelp()
    {
        $session = session();
        if ($session->get('role') !== 'agent') {
            return redirect()->to('/');
        }
        return view('Agent/AgHelp');
    }
    private function getData()
    {
        $session = session();

        // Check if the user is logged in
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

    public function subagent()
    {
        $session = session();
        if ($session->get('role') !== 'agent') {
            return redirect()->to('/');
        }

        $userId = $session->get('id');

        // Assuming that AgentModel is the correct model for managing agents
        $agentModel = new AgentModel();
        $data = $this->getDataAge();

        // Fetch the agent data
        $data['agents'] = $agentModel->where('FA', $userId)->findAll();

        // Fetch the user data
       
        $userModel = new UserModel();
        $data['user'] = $userModel->find($userId);
        return view('Agent/subagents', $data);
    }

    public function subagentSearch()
    {
        $session = session();
        if ($session->get('role') !== 'agent') {
            return redirect()->to('/');
        }
        $userId = $session->get('id');

        $agentModel = new AgentModel();
        $data = $this->getDataAge();

        $filterUser = $this->request->getPost('filterAgent');
        
        $agents = $agentModel->like('Agentfullname', $filterUser)
            ->where('FA', $userId)
            ->findAll();

        $data['agents'] = $agents;

        $userModel = new UserModel();
        $data['user'] = $userModel->find($userId);

        return view('Agent/subagents', $data);
    }

    private function getDataAge()
    {
        $session = session();

        $userId = $session->get('id');

        $agentModel = new AgentModel();

        $data['agent'] = $agentModel->where('agent_id', $userId)
            // ->orderBy('id', 'desc')
            ->first();

        return $data;
    }

    public function svag()
    {
        $session = session();
        $userId = $session->get('id');

        // Initialize $data array
        $data = [];

        // Check if a file is uploaded
        if ($imageFile = $this->request->getFile('agentprofile')) {
            // Check if the file is valid
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                // Generate a unique name for the uploaded image
                $imageName = $imageFile->getRandomName();

                // Set the path to the upload directory
                $uploadPath = FCPATH . 'uploads/';

                // Move the uploaded image to the upload directory
                if ($imageFile->move($uploadPath, $imageName)) {
                    // Image upload successful, store the image filename in the database
                    $data['agentprofile'] = $imageName;
                } else {
                    $error = $imageFile->getError();
                    // Handle the error as needed
                }
            }
        }

        // Add other form data to the data array
        $data += [
            'Agentfullname' => $this->request->getVar('Agentfullname'),
            'number' => $this->request->getVar('number'),
            'email' => $this->request->getVar('email'),
            'birthday' => $this->request->getVar('birthday'),
            'address' => $this->request->getVar('address'),
            'username' => $this->request->getVar('username'),
        ];

        // Check if $data array is not empty before updating the database
        if (!empty($data)) {
            // Update the applicant data
            $this->agent->set($data)->where('agent_id', $userId)->update();
        }

        return redirect()->to('/AgSetting');
    }
}
