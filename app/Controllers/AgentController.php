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
        return view('Agent/AgProfile',$data);
    }
    public function AgSetting()
    {
        $session = session();
        if ($session->get('role') !== 'agent') {
            return redirect()->to('/');
        }
        $data = array_merge($this->getData(), $this->getDataAge());
        return view('Agent/AgSetting',$data);
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

    // $session = session();
    $userId = $session->get('id');
    
    // Assuming that AgentModel is the correct model for managing agents
    $agentModel = new AgentModel();
    $data = $this->getData();

    // Use the model to fetch sub-agents where FA is equal to userId
    $data['agent'] = $agentModel->where('FA', $userId)->findAll();

    return view('Agent/subagents', $data);
}

public function agentSearch()
{
    $session = session();
        if ($session->get('role') !== 'agent') {
            return redirect()->to('/');
        }

    $agentModel = new AgentModel();
    $data = $this->getData();

    // Get the search input from the form
    $filterUser = $this->request->getPost('filterAgent');

    // Get the current user's ID
    $userId = session()->get('id');

    // Add a where condition to filter records based on the search input and FA = userId
    $agents = $agentModel->like('Agentfullname', $filterUser)
                         ->where('FA', $userId)
                         ->findAll();

    $data['agent'] = $agents;

    return view('Agent/subagents', $data);
}


    private function getDataAge()
    {
        $session = session();

        // Get the user ID from the session
        $userId = $session->get('id');

        // Load the User model
        $agentmode = new AgentModel();

        // Find the user by ID
        $data['agent'] = $agentmode->where('agent_id', $userId)
            ->orderBy('id', 'desc')
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
