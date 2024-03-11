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
        // Check for validation errors in the session
        if (session()->has('validation')) {
            $data['validation'] = session('validation');
            session()->remove('validation'); // Clear the session variable
        }
        $data = array_merge($this->getDataAd(), $this->alluser());
        $filterroles = $this->request->getPost('filterDropdown');
        $search = $this->request->getPost('searchusers');
        // Check if filter roles are selected
        if (!empty($filterroles)) {
            if ($filterroles == 'all') {
                $data['users'] = $this->user->where(['role !=' => 'admin'])->orderBy('username')->findAll();
            } else {
                // If another role is selected, filter by role
                $data['users'] = $this->user->where('role', $filterroles)->where(['role !=' => 'admin'])->orderBy('username')->findAll();
            }
        } else if (!empty($search)) {
            // If no filter roles, check if search query is provided
            $data['users'] = $this->user->like('username', $search)->where(['role !=' => 'admin'])->orderBy('username')->findAll();
        } else {
            // If neither filter roles nor search query is provided, get all users
            $data['users'] = $this->user->where(['role !=' => 'admin'])->orderBy('username')->findAll();
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

    public function newuser()
    {
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]|max_length[50]',
            'confirmpassword' => 'matches[password]',
        ];
        $token = bin2hex(random_bytes(24));
        if ($this->validate($rules)) {
            $newuser = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'role' => $this->request->getPost('role'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'token' => $token
            ];
            $this->user->save($newuser);
            return redirect()->to('usermanagement')->with('success', 'New user added');
        } else {
            session()->setFlashdata('validation', $this->validator->getErrors());
            return redirect()->to('usermanagement')->with('error', 'Invalid Input Data');
        }
    }
    public function upuser($token)
    {
        // $toke = $this->request->getPost('token');
        $newuser = [
            'username' => $this->request->getVar('upusername'),
            'email' => $this->request->getVar('upemail'),
            'role' => $this->request->getVar('uprole'),
            'password' => password_hash($this->request->getVar('uppassword'), PASSWORD_DEFAULT),
        ];
        $this->user->set($newuser)->where('token', $token)->update();
        return redirect()->to('usermanagement')->with('success', 'Account updated');
        // var_dump($newuser);
        // return redirect()->to('usermanagement');
    }
}
