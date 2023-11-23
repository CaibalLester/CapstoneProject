<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class HomepageController extends BaseController
{
    public function index()
    {
        return view('Home/home');
    }
    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy the user's session data
        return redirect()->to('/'); // Redirect to the login page or any other page you prefer
    }
}
