<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use \App\Models\UserModel;
use App\Models\ApplicantModel;
use App\Models\Form1Model;
use App\Models\AgentModel;


class UsersManageController extends BaseController
{
    private $agent;
    private $user;
    private $applicant;
    private $admin;
    private $form;
    public function __construct()
    {
        $this->user = new UserModel();
        $this->applicant = new ApplicantModel();
        $this->agent = new AgentModel();
        $this->admin = new AdminModel();
        $this->form = new Form1Model();
    }
     private function alluser()
    {
        $data['users'] = $this->user->where(['role !=' => 'admin'])->findAll();
        return $data;
    }
   public function usermanagement()
   {
        $data = array_merge($this->getDataAd(), $this->alluser());
        // $data = $this->getDataAd();
        return view('Admin/usermanagement' ,$data);
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

   
}
