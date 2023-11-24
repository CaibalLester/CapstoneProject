<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AppController extends BaseController
{
    public function AppDash()
    {
        return view('Applicant/AppDash');
    }
    public function AppProfile()
    {
        return view('Applicant/AppProfile');
    }
    public function AppSetting()
    {
        return view('Applicant/AppSetting');
    }
    public function AppHelp()
    {
        return view('Applicant/AppHelp');
    }

    public function AppForm1()
    {
        return view('Applicant/AppForm1');
    }
    public function AppForm2()
    {
        return view('Applicant/AppForm2');
    }
    public function AppForm3()
    {
        return view('Applicant/AppForm3');
    }
    public function AppForm4()
    {
        return view('Applicant/AppForm4');
    }
    public function AppForm5()
    {
        return view('Applicant/AppForm5');
    }
    
}
