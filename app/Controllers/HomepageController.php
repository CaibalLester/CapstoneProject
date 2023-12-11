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
            ];

            // Insert applicant data into the applicant table
            $applicantModel->save($applicantData);

            $formdata = [
                'user_id' => $userId,
            ];
            $form1->save($formdata);
            return redirect()->to('/login')->with('success', 'Account Registered! You can now log in with your Accounts.');
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
                return redirect()->to('/AppDash')->with('success', 'Account Login' . $user['username']);
            } elseif ($user['role'] == 'agent') {
                // return redirect()->to('/AgDash');
                return redirect()->to('/AgDash')->with('success', 'Account Login' . $user['role']);
            }
            
        } else {
            $session->setFlashdata('error', 'Invalid email or password.');
            return redirect()->to('/login');
        }
    }

    public function updatePassword()
    {
        helper(['form']);
        $rules = [
            'current_password' => 'required',
            'new_password' => 'required|min_length[6]|max_length[50]',
            'confirm_new_password' => 'matches[new_password]',
        ];

        if ($this->validate($rules)) {
            $session = session();
            $userId = $session->get('id');

            $userModel = new UserModel();

            // Get the current user data
            $userData = $userModel->find($userId);

            // Check if the entered current password matches the stored password
            if (password_verify($this->request->getVar('current_password'), $userData['password'])) {
                // Passwords match, update the password
                $newPassword = password_hash($this->request->getVar('new_password'), PASSWORD_DEFAULT);

                $userModel->update($userId, ['password' => $newPassword]);

                return redirect()->to('/AgSetting');
            } else {
                echo 'Current password is incorrect.';
            }
        } else {
            $data['validation'] = $this->validator;
            echo view('Home/register', $data);
        }
    }


    public function forgot()
    {
        return view("Home/forgot");
    }

    public function sendResetLink()
{
    $email = $this->request->getVar('email');

    // Generate a random token
    $token = bin2hex(random_bytes(16));

    // Save the token to the database
    $userModel = new UserModel();
    $user = $userModel->where('email', $email)->first();

    if ($user) {
        $userModel->update($user['id'], ['token' => $token]);
        
        // Send email with a link containing the token for password reset
        $resetLink = site_url("reset-password/{$token}");

        // Define email parameters
        $to = $email;
        $subject = 'Password Reset Link';
        $message = "Click the link to reset your password: $resetLink";
        $headers = 'From: Allianz PNB Life'; // Replace with your actual email address

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo 'Reset link sent successfully.';
        } else {
            echo 'Failed to send reset link.';
        }
    } else {
        // Email not found in the database
        echo 'Invalid email address';
    }
}


    public function resetPassword($token)
    {
        $userModel = new UserModel();
        $user = $userModel->where('token', $token)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Invalid reset token.');
        }

        return view('Home/reset_password', ['token' => $token]);
    }

    public function processResetPassword($token)
{
    helper(['form']);
    $rules = [
        'new_password' => 'required|min_length[6]|max_length[50]',
        'confirm_new_password' => 'matches[new_password]',
    ];

    if ($this->validate($rules)) {
        $userModel = new UserModel();

        // Get the user based on the reset token
        $user = $userModel->where('token', $token)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Invalid reset token.');
        }

        // Update the password and remove the token from the database
        $newPassword = password_hash($this->request->getVar('new_password'), PASSWORD_DEFAULT);
        $userModel->update($user['id'], ['password' => $newPassword, 'token' => null]);

        return redirect()->to('/login')->with('success', 'Password reset successful. You can now log in with your new password.');
    } else {
        $data['token'] = $token; // Add this line to pass the token to the view
        $data['vali'] = $this->validator;
        echo view('Home/reset_password', $data);
    }
}


    // public function emailtest()
    // {
    //     $to = 'jandeleido@gmail.com';
    //     $subject = 'Email Test';
    //     $message = 'Testing the email functionality using mail() function.';
    //     $headers = 'From: your_email@example.com'; // Replace with your actual email address
    //     if (mail($to, $subject, $message, $headers)) {
    //         echo 'Email sent successfully.';
    //     } else {
    //         echo 'Failed to send email.';
    //     }
    // return redirect()->to('/login');
    // }

}




