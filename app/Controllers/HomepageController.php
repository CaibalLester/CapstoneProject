<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ApplicantModel;
use App\Models\Form1Model;

class HomepageController extends BaseController
{
    private $user;
    private $form1;
    public function __construct()
    {
        $this->form1 = new Form1Model();
        $this->user = new UserModel();
    }
    public function home()
    {
        return view('Home/home');
    }
    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy the user's session data
        return redirect()->to('/'); // Redirect to the login page or any other page you prefer
    }

    public function register()
    {
        helper(['form']);
        $data = [];
        return view("Home/register");
    }

    // public function Authreg()
    // {
    //     helper(['form']);
    //     $rules = [
    //         'email' => 'required|min_length[6]|max_length[100]',
    //         'password' => 'required|min_length[6]|max_length[50]',
    //         'confirmpassword' => 'matches[password]'
    //     ];

    //     if ($this->validate($rules)) {
    //         $userModel = new UserModel();
    //         $data = [
    //             'username' => $this->request->getVar('username'),
    //             'branch' => $this->request->getVar('branch'),
    //             'email' => $this->request->getVar('email'),
    //             'role' => 'applicant',
    //             'status' => 'active',
    //             'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
    //         ];
    //         $userModel->save($data);
    //         return redirect()->to('/login');
    //         // echo 'sucsses';
    //     } else {
    //         $data['validation'] = $this->validator;
    //         echo view('Home/register', $data);
    //     }
    // }

    public function login()
    {
        helper(['form']);
        $data = [];
        return view("Home/login");
    }
    public function Authreg()
    {
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]|max_length[50]',
            'confirmpassword' => 'matches[password]',
            'branch' => 'required|min_length[3]|max_length[50]',
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $applicantModel = new ApplicantModel();
            $form1 = new Form1Model();

            $userData = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'branch' => $this->request->getVar('branch'),
                'role' => 'applicant',
                'status' => 'active',
            ];

            // Insert user data into the users table
            $userModel->save($userData);

            // Retrieve the ID of the newly inserted user
            $userId = $userModel->insertID();

            $applicantData = [
                'applicant_id' => $userId, // Use the retrieved user ID as the applicant_id
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'branch' => $this->request->getVar('branch'),
                'status' => 'active',
            ];

            // Insert applicant data into the applicant table
            $applicantModel->save($applicantData);

            $formdata = [
                'user_id' => $userId,
            ];
            $form1->save($formdata);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('Home/register', $data);
        }
    }

    public function authlog()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $sessionData = [
                'id' => $user['id'],
                'role' => $user['role'],
                'IsAppLog' => true,
            ];
            $session->set($sessionData);

            // Redirect based on the fetched role
            if ($user['role'] == 'admin') {
                return redirect()->to('/AdDash');
            } elseif ($user['role'] == 'applicant') {
                return redirect()->to('/AppDash');
            } elseif ($user['role'] == 'agent') {
                return redirect()->to('/AgDash');
            }
        } else {
            $session->setFlashdata('error', 'Invalid email or password.');
            return redirect()->to('/login');
        }
    }




}
