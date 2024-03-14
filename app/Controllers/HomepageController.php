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
        $updatetoken = bin2hex(random_bytes(24));
        $session = session();

        // Get the user ID from the session
        $userId = $session->get('id');

        // Update the user's token in the database
        $userModel = new UserModel(); // Assuming you have a UserModel
        $userModel->update($userId, ['token' => $updatetoken]);

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
    //applicant reg
    public function Authreg()
    {
        helper(['form']);
        // $rules = [
        //     'username' => 'required|min_length[3]|max_length[50]',
        //     'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
        //     'password' => 'required|min_length[6]|max_length[50]',
        //     'confirmpassword' => 'matches[password]',
        // ];
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username,id]',
            'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email,id]',
            'password' => 'required|min_length[6]|max_length[50]',
            'confirmpassword' => 'matches[password]',
        ];
        
        $verificationToken = bin2hex(random_bytes(16));
        $usertoken = bin2hex(random_bytes(24));
        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $applicantModel = new ApplicantModel();
            $form1 = new Form1Model();

            $userData = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'branch' => 'Calapan',
                'role' => 'applicant',
                'status' => 'unverified',
                'verification_token' => $verificationToken,
                'token' => $usertoken,
            ];

            // Insert user data into the users table
            $userModel->save($userData);

            // Retrieve the ID of the newly inserted user
            $userId = $userModel->insertID();

            $applicantData = [
                'applicant_id' => $userId, // Use the retrieved user ID as the applicant_id
                'username' => $this->request->getVar('username'),
                'number' => $this->request->getVar('number'),
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'middlename' => $this->request->getVar('middlename'),
                'email' => $this->request->getVar('email'),
                'branch' => 'Calapan',
                'app_token' => $usertoken,
            ];

            // Insert applicant data into the applicant table
            $applicantModel->save($applicantData);

            //insert id and token in forms
            $formdata = [
                'user_id' => $userId,
                'app_life_token' => $usertoken,
            ];
            $form1->save($formdata);

            // Send verification email
            $verificationLink = site_url("verify-email/{$verificationToken}");
            $emailSubject = 'Email Verification';
            $emailMessage = "Click the link to verify your email: $verificationLink";
            $this->sendVerificationEmail($this->request->getVar('email'), $emailSubject, $emailMessage);
            // var_dump($verificationLink);
            return redirect()->to('/login')->with('success', 'Account Registered! Check your email to Verified');

        } 
        else {
            return redirect()->to('/register')->with('error', 'Invalid Input');
        }
    }

    private function sendVerificationEmail($to, $subject, $message)
    {
        // Load Email Library
        $email = \Config\Services::email();

        // SMTP Configuration (replace with your actual SMTP settings)
        $config = [
            'protocol' => 'smtp',
            'SMTPHost' => 'smtp.gmail.com',
            'SMTPUser' => 'alejandrogino950@gmail.com', // Your Gmail address
            'SMTPPass' => 'glvwgdahdbexhvim',
            'SMTPPort' => 587,
            'SMTPCrypto' => 'tls',
            'mailType' => 'html',
            'charset' => 'utf-8'
        ];
        $email->initialize($config);

        // Set Email Parameters
        $email->setTo($to);
        $email->setFrom('alejandrogino950@gmail.com', 'ALLIANZ PNB CALAPAN'); // Set the "From" address and name
        $email->setSubject($subject);
        $email->setMessage($message);

        // Try sending the email
        if ($email->send()) {
            echo 'Email sent successfully.';
        } else {
            echo 'Error: ' . $email->printDebugger(['headers']);
        }
    }

    public function verifyEmail($token)
    {
        $userModel = new UserModel();

        // Find user by verification token
        $user = $userModel->where('verification_token', $token)
            ->where('status', 'pending')
            ->first();

        if ($user) {
            // Update user status to 'verified'
            $userModel->update($user['id'], [
                'status' => 'verified',
                'verification_token' => null
            ]);

            // Redirect to a success page or login page
            return redirect()->to('/login')->with('success', 'Email verified! You can now log in with your account.');
        } else {
            // Invalid or expired token
            return redirect()->to('/login')->with('error', 'Invalid or expired verification token.');
        }
    }

    public function authlog()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Check if the email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $session->setFlashdata('error', 'Invalid email address.');
            return redirect()->to('/login');
        }

        $user = $userModel->where('email', $email)->first();

        // Check if the user exists
        if ($user) {
            // Check if the user's status is 'verified'
            if ($user['status'] == 'verified') {
                // Check if the password matches
                if (password_verify($password, $user['password'])) {
                    $sessionData = [
                        'id' => $user['id'],
                        'role' => $user['role'],
                        'IsLoggin' => true,

                    ];
                    $session->set($sessionData);

                    // Debugging statements
                    // var_dump($sessionData);  // Check if session data is correct

                    if ($user['role'] == 'admin') {
                        return redirect()->to('/AdDash');
                    } elseif ($user['role'] == 'applicant') {
                        return redirect()->to('/AppDash')->with('success', 'Account Login: ' . $user['username']);
                    } elseif ($user['role'] == 'agent') {
                        return redirect()->to('/AgDash')->with('success', 'Account Login: ' . $user['role']);
                    }
                } else {
                    // Password mismatch
                    $session->setFlashdata('error', 'Invalid password.');
                    return redirect()->to('/login');
                }
            } else {
                // User status is not 'verified'
                $session->setFlashdata('error', 'Your account is not verified. Please check your email for verification.');
                return redirect()->to('/login');
            }
        } else {
            // User not found
            $session->setFlashdata('error', 'Email address not found.');
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
        $userEmail = $this->request->getVar('email');

        // Generate a random token
        $token = bin2hex(random_bytes(16));

        // Save the token to the database
        $userModel = new UserModel();
        $user = $userModel->where('email', $userEmail)->first();

        if ($user) {
            $userModel->update($user['id'], ['pass_token' => $token]);

            // Load Email Library and configure SMTP
            $email = \Config\Services::email();
            $config = array(
                'protocol' => 'smtp',
                'SMTPHost' => 'smtp.gmail.com',
                'SMTPUser' => 'alejandrogino950@gmail.com', // Your Gmail address
                'SMTPPass' => 'glvwgdahdbexhvim',
                'SMTPPort' => 587,
                'SMTPCrypto' => 'tls',
                'mailType' => 'html',
                'charset' => 'utf-8'
            );
            $email->initialize($config);

            // Set Email Parameters
            $email->setFrom('alejandrogino950@gmail.com', 'ALLIANZ PNB CALAPAN'); // Replace with your Gmail address and name
            $email->setTo($userEmail);
            $email->setSubject('Password Reset Link');
            $resetLink = site_url("reset-password/{$token}");
            $email->setMessage("Click the link to reset your password: $resetLink");

            // Send the email
            if ($email->send()) {
                return view('emailsend');
            } else {
                $data['error'] = $email->printDebugger(['headers']);
                echo 'Failed to send reset link. Error: ' . $data['error'];
            }
        } else {
            // Email not found in the database
            echo 'Invalid email address';
        }
    }

    public function resetPassword($token)
    {
        $userModel = new UserModel();
        $user = $userModel->where('pass_token', $token)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Invalid reset token.');
        }
        return view('Home/reset_password', ['pass_token' => $token]);
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
            $user = $userModel->where('pass_token', $token)->first();

            if (!$user) {
                return redirect()->to('/login')->with('error', 'Invalid reset token.');
            }

            // Update the password and remove the token from the database
            $newPassword = password_hash($this->request->getVar('new_password'), PASSWORD_DEFAULT);
            $userModel->update($user['id'], ['password' => $newPassword, 'pass_token' => null]);

            return redirect()->to('/login')->with('success', 'Password reset successful. You can now log in with your new password.');
        } else {
            $data['pass_token'] = $token; // Add this line to pass the token to the view
            $data['vali'] = $this->validator;
            echo view('Home/reset_password', $data);
        }
    }

}
