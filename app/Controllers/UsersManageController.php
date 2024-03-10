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
        $data['users'] = $this->user->where(['role !=' => 'admin'])->orderBy('username')->findAll();
        return $data;
    }
    public function usermanagement()
    {
        $data = array_merge($this->getDataAd(), $this->alluser());
        $filterroles = $this->request->getPost('filterDropdown');
        $search = $this->request->getPost('searchusers');
        // Check if filter roles are selected
        if (!empty($filterroles)) {
            if ($filterroles == 'all') {
                // If 'All' is selected, get all users
                $data['users'] = $this->user->findAll();
            } else {
                // If another role is selected, filter by role
                $data['users'] = $this->user->where('role', $filterroles)->findAll();
            }
        }
        else if (!empty($search)) {
            // If no filter roles, check if search query is provided
            $data['users'] = $this->user->like('username', $search)->findAll();
        } else {
            // If neither filter roles nor search query is provided, get all users
            $data['users'] = $this->user->findAll();
        }
        return view('Admin/usermanagement', $data);
    }


    private function getDataAd()
    {
        $session = session();
        $userId = $session->get('id');
        $data['admin'] = $this->admin->where('admin_id', $userId)
            ->orderBy('id', 'desc')
            ->first();
        return $data;
    }

}
