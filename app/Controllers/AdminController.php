<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function AdDash()
    {
        return view('Admin/AdDash');
    }

    public function ManageAgent()
    {
        return view('Admin/ManageAgent');
    }

    public function ManageApplicant()
    {
        return view('Admin/ManageApplicant');
    }

    public function AdProfile()
    {
        return view('Admin/AdProfile');
    }

    public function AdSetting()
    {
        return view('Admin/AdSetting');
    }

    public function AdHelp()
    {
        return view('Admin/AdHelp');
    }
}
