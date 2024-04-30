<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\AgentModel;
use \App\Models\UserModel;
use App\Models\ApplicantModel;
use App\Controllers\AppController;
use App\Models\ScheduleModel;
use App\Models\Scheduler;
use App\Models\ClientModel;
use App\Models\PlanModel;

class AgentController extends BaseController
{
    private $plan;
    private $client;
    private $sched;
    private $appcon;
    private $user;
    private $applicant;
    private $agent;
    protected $scheduleModel;
    public function __construct()
    {
        $this->appcon = new AppController();
        $this->agent = new AgentModel();
        $this->user = new UserModel();
        $this->applicant = new ApplicantModel();
        $this->scheduleModel = new ScheduleModel();
        $this->sched = new Scheduler();
        $this->client = new ClientModel();
        $this->plan = new PlanModel();
    }
    public function AgDash()
    {
        $data = array_merge($this->getData(), $this->getDataAge());
        $agentid = $data['agent']['agent_id'];
        $data['FA'] = $this->agent->where('FA', $agentid)->findAll();
        $data['ranking'] = $this->agent->where('FA', $agentid)->countAllResults();
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
    public function AgForm2()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        return view('Agent/AgForm2', $data);
    }
    public function AgForm3()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->appcon->getform3Data(), $this->getDataAge());
        return view('Agent/AgForm3', $data);
    }
    public function AgForm4()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        return view('Agent/AgForm4', $data);
    }
    public function AgForm5()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        return view('Agent/AgForm5', $data);
    }

    public function AgForm1()
    {
        $data['agents'] = $this->agent->findAll();
        // Merge arrays while retaining the 'agents' key
        $data = array_merge(
            $this->getData(),
            $this->appcon->getDataApp(),
            $this->getDataAge(),
            $this->appcon->getform1Data(),
            $data
        );
        return view('Agent/AgForm1', $data);
    }

    public function sched()
    {
        // Load the model
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $scheduleModel = new ScheduleModel();

        // Get all schedules from the database
        $data['schedules'] = $scheduleModel->findAll();

        // Pass data to the view
        return view('Agent/Schedule', $data);
    }

    public function cliSched()
    {
        $session = session();
        $agent = $session->get('id');
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $data['schedule'] = $this->sched->where('agent', $agent)->where('status', 'pending')->orderBy('created_at', 'desc')->findAll();
        $data['plans'] = $this->plan->findAll();
        $data['client'] = $this->client->findAll();
        $data['status'] = 'Awaiting';
        return view('Agent/cliSched', $data);
        // var_dump($agent);
    }

    public function inprog()
    {
        $session = session();
        $agent = $session->get('id');
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $data['schedule'] = $this->sched->where('agent', $agent)->where('status', 'inprogress')->findAll();
        $data['plans'] = $this->plan->findAll();
        $data['client'] = $this->client->findAll();
        $data['status'] = 'In Progress';
        return view('Agent/cliSched', $data);
        // var_dump($agent);
    }

    public function comp()
    {
        $session = session();
        $agent = $session->get('id');
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $data['schedule'] = $this->sched->where('agent', $agent)->where('status', 'completed')->findAll();
        $data['plans'] = $this->plan->findAll();
        $data['client'] = $this->client->findAll();
        $data['status'] = 'Completed';
        return view('Agent/cliSched', $data);
        // var_dump($agent);
    }
    public function compost()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'id' => $this->request->getVar('id'),
            'plan' => $this->request->getVar('plan'),
            'agent' => $this->request->getVar('agent'),
            'client_id' => $this->request->getVar('client_id'),
        ];
        var_dump($data);
    }

    public function con($dec)
    {
        $id = base64_decode($dec);

        $status = $this->sched->where('id', $id)->get()->getRow()->status;

        if ($status !== 'inprogress') {
            $con = ['status' => 'inprogress'];
            $this->sched->set($con)->where('id', $id)->update();
        } 
        // elseif ($status === 'inprogress') {
        //     $con = ['status' => 'inprogress'];
        //     $this->sched->set($con)->where('id', $id)->update();
        // }
        return redirect()->to('cliSched');
    }
}
