<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ClientModel;
use App\Models\AgentModel;

class ClientController extends BaseController
{
    private $user;
    private $client;
    protected $agent;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->client = new ClientModel();
        $this->agent = new AgentModel();
    }

    public function ClientService()
    {
        return view('Client/ClientService');
    }

    public function ServiceDescription()
    {
        return view('Client/ServiceDescription');
    }

    public function ClientAgent()
    {
        $agent = new AgentModel();
        $data['agents'] = $agent->findAll();
        return view('Client/ClientAgent', $data);
    }

    public function registers()
    {
        return view('Client/registers');
    }




}
