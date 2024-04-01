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
        $data = array_merge($this->getData(), $this->getDataAge());
        return view('Agent/AgDash', $data);
    }
    public function AgProfile()
    {
        $agentModel = new AgentModel();

        $data = array_merge($this->getData(), $this->getDataAge());

        $agentid = $data['agent']['agent_id'];
        // Assuming 'FA' is a field and you want to retrieve agents where agent_id is equal to 'FA'
        $data['FA'] = $agentModel->where('FA', $agentid)->findAll();
        $data['ranking'] = $this->agent->where('FA', $agentid)->countAllResults();
        return view('Agent/AgProfile', $data);
    }

    public function AgSetting()
    {
        $data = array_merge($this->getData(), $this->getDataAge());
        return view('Agent/AgSetting', $data);
    }
    public function AgHelp()
    {
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

        $userId = $session->get('id');

        // Assuming that AgentModel is the correct model for managing agents
        $agentModel = new AgentModel();
        $data = $this->getDataAge();

        // Fetch the agent data
        $agents = $agentModel->where('FA', $userId)->paginate(10, 'group1');
        $data['pager'] = $agentModel->pager;
        $data['agent'] = $agents;
        // Fetch the user data
        $userModel = new UserModel();
        $data['user'] = $userModel->find($userId);
        return view('Agent/subagents', $data);
    }

    public function subagentSearch()
    {
        $session = session();
        $userId = $session->get('id');

        $agentModel = new AgentModel();
        $data = $this->getDataAge();

        $filterUser = $this->request->getPost('filterAgent');

        // Use the paginate method to enable pagination
        $agents = $agentModel->like('username', $filterUser)
            ->where('FA', $userId)
            ->paginate(10); // Adjust the limit as needed

        // Correctly assign the pager
        $data['pager'] = $agentModel->pager;
        $data['agent'] = $agents;

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

        // Get the old image file name from the database
        $oldAgent = $this->agent->select('agentprofile')->where('agent_id', $userId)->first();
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
                    $data['agentprofile'] = $imageName;

                    // Delete the old image file if it exists
                    if (!empty($oldAgent['agentprofile'])) {
                        $oldFilePath = $uploadPath . $oldAgent['agentprofile'];
                        if (file_exists($oldFilePath)) {
                            unlink($oldFilePath);
                        }
                    }
                } else {
                    $error = $imageFile->getError();
                    // Handle the error as needed
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
            // Update the applicant data
            $this->agent->set($data)->where('agent_id', $userId)->update();
        }

        return redirect()->to('/AgSetting');
    }

}
