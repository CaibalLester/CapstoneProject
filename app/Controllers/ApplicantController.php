<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Form1Model;

class ApplicantController extends BaseController
{
    private $form1;
   
    public function __construct()
    {
        $this->form1 = new Form1Model();
    }
    public function index()
    {
        return view('Applicant/AppDash');
    }
    public function form1()
    {
        return view('Applicants/form1');
    }
    

    
    
}
