<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class HomepageController extends BaseController
{
    private $user;
    public function __construct()
    {
        $this->user = new UserModel();
    }
    public function home()
    {
        return view('Home/home');
    }
    // public function logout()
    // {
    //     $session = session();
    //     $session->destroy(); // Destroy the user's session data
    //     return redirect()->to('/'); // Redirect to the login page or any other page you prefer
    // }
    public function logout()
    {
        $session = session();

        // Store the role before destroying the session
        $role = $session->get('role');

        // Destroy the session
        $session->destroy();

        // Redirect based on the user's role after logout
        switch ($role) {
            case 'admin':
                return redirect()->to('/login');
            case 'applicant':
                return redirect()->to('/login');
            case 'agent':
                return redirect()->to('/login');
            default:
                return redirect()->to('/login');
        }
    }

    public function register()
    {
        helper(['form']);
        $data = [];
        return view("Home/register");
    }

    public function Authreg()
    {
        helper(['form']);
        $rules = [
            'email' => 'required|min_length[6]|max_length[100]',
            'password' => 'required|min_length[6]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'email' => $this->request->getVar('email'),
                'role' => 'applicant',
                'status' => 'active',
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/login');
            // echo 'sucsses';
        } else {
            $data['validation'] = $this->validator;
            echo view('Home/register', $data);
            // echo 'may mali';
        }
    }

    public function login()
    {
        helper(['form']);
        $data = [];
        return view("Home/login");
    }
    // public function authlog()
    // {
    //     $session = session();
    //     $userModel = new UserModel();
    //     $email = $this->request->getVar('email');
    //     $password = $this->request->getVar('password');
    //     $data = $userModel->where('email', $email)->first();
    //     if ($data) {
    //         $pass = $data['password'];
    //         $authenticatePassword = password_verify($password, $pass);
    //         if ($authenticatePassword) {
    //             $ses_data = [
    //                 'id' => $data['id'],
    //                 'email' => $data['email'],
    //                 'role'=> 'applicant',
    //                 'IsAppLog' => TRUE
    //             ];
    //             $session->set($ses_data);
    //             return redirect()->to('/AppDash');
    //             // return view('Applicants/dashboard');
    //         } else {
    //             $session->setFlashdata('error', 'Password is incorrect.');
    //             return redirect()->to('/login');
    //         }
    //     } else {
    //         $session->setFlashdata('error', 'Email does not exist.');
    //         return redirect()->to('/login');
    //     }
    // }
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
