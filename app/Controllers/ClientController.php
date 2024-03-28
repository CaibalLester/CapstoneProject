<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ClientModel;

class ClientController extends BaseController
{
    private $user;
    private $client;
    public function __construct()
    {
        $this->user = new UserModel();
        $this->client = new ClientModel();
    }
    public function index()
    {
        return view('Client/homepage');
    }

    public function register()
    {
        return view('Client/register');
    }

    public function login()
    {
        return view('Client/login');
    }
}
