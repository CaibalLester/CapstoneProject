<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use \App\Models\UserModel;
use App\Models\ApplicantModel;
use App\Models\Form1Model;
use App\Models\AgentModel;
use App\Controllers\AgentController;
use App\Models\ClientModel;
use App\Models\ClientPlanModel;

class ProfileController extends BaseController
{
    private $client_plan;
    private $agcon;
    private $client;
    // protected $cache;

    public function __construct()
    {
        $this->client = new ClientModel();
        $this->agcon = new AgentController();
        $this->client_plan = new ClientPlanModel();
        // $this->cache = \Config\Services::cache();
    }
    public function agentprofile($token)
    {
        $agentModel = new AgentModel();
        $data = $this->getDataAd(); // Get admin data

        // Get agent data
        $data['agent'] = $agentModel->where('agent_token', $token)->first();
        if ($data['agent']) {
            $agentid = $data['agent']['agent_id'];
            $data['FA'] = $agentModel->where('FA', $agentid)->paginate(10); // Change 10 to the number of items per page
            $data['pager'] = $agentModel->pager;
        } else {
            // Handle the case where the agent is not found
            return redirect()->to('some_error_page')->with('error', 'Agent not found');
        }
        return view("Admin/agentprofile", $data);
    }


    public function subagentprofile($token)
    {
        $agentModel = new AgentModel();
        $data = array_merge($this->getDataAd(), $this->agcon->getData(), $this->agcon->getDataAge());

        $data['subagent'] = $agentModel->where('agent_token', $token)->first();
        if ($data['subagent']) {
            $agentid = $data['subagent']['agent_id'];
            $data['FA'] = $agentModel->where('FA', $agentid)->paginate(10); // Change 10 to the number of items per page
            $data['pager'] = $agentModel->pager;
        } else {
            // Handle the case where the subagent is not found
            return redirect()->to('some_error_page')->with('error', 'Subagent not found');
        }
        return view("Agent/subagentprofile", $data);
    }


    public function applicantprofile($token)
    {
        $appmodel = new ApplicantModel();
        $data = $this->getDataAd();
        $data['applicant'] = $appmodel->where('app_token', $token)->first();
        if ($data['applicant']) {
        } else {
            // Handle the case where the applicant is not found
            return redirect()->to('some_error_page')->with('error', 'Applicant not found');
        }
        return view("Admin/applicantprofile", $data);
    }


    public function ManageAgent()
    {
        $agentModel = new AgentModel();
        // Use the model to fetch all records
        $data['agent'] = $agentModel->findAll();
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

    // public function try()
    // {
    //     // Encrypt a string
    //     $encryption = \Config\Services::encrypter();
    //     $encryptedString = $encryption->encrypt('Hello, world!');

    //     echo "Encrypted String: $encryptedString<br>";

    //     // Decrypt the string
    //     $decryptedString = $encryption->decrypt($encryptedString);
    //     echo "Decrypted String: $decryptedString";
    // }

    public function myclientprofile($token)
    {
        // Fetch it from the database
        $data = array_merge($this->agcon->getData(), $this->agcon->getDataAge());
        $data['client'] = $this->client->where('client_token', $token)->first();
        if ($data['client']) {
            $data['myplan'] = $this->client_plan->select('agent.username as agent_name, plan.plan_name, client_plan.created_at, 
                client_plan.mode_payment, client_plan.term, client_plan.status, client_plan.id, client_plan.token ')
                ->join('agent', 'agent.agent_id = client_plan.agent')
                ->join('plan', 'plan.token = client_plan.plan')
                ->where('client_plan.client_id', $data['client']['client_id'])
                ->findAll();
        } else {
            // Handle the case where the client is not found
            return redirect()->to('some_error_page')->with('error', 'Client not found');
        }
        return view('Agent/clientprofile', $data);
    }

}
