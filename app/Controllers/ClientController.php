<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ClientModel;
use App\Models\AgentModel;
use App\Models\PlanModel;

class ClientController extends BaseController
{
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

    public function ag()
    {
        $data['agents'] = $this->agent->paginate(6, 'agent');
        $data['pager'] = $this->agent->pager;
        return $data;
    }

    public function registers()
    {
        return view('Client/registers');
    }

}
