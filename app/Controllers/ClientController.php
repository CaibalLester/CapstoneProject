<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ClientModel;

class ClientController extends BaseController
{
    private $user;
    private $client;
    public function __construct()
    {
        $this->user = new UserModel();
        $this->client = new ClientModel();
    }
    public function index()
    {
        return view('Client/homepage');
    }

    public function register()
    {
        return view('Client/register');
    }

    public function login()
    {
        return view('Client/login');
    }

    public function Clientregister()
    {
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username,id]',
            'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email,id]',
            'password' => 'required|min_length[6]|max_length[50]',
            'confirmpassword' => 'matches[password]',
        ];

        $verificationToken = bin2hex(random_bytes(16));
        $usertoken = bin2hex(random_bytes(24));
        if ($this->validate($rules)) {

            $userData = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'branch' => 'Calapan',
                'role' => 'Client',
                'status' => 'unverified',
                'verification_token' => $verificationToken,
                'accountStatus' => 'active',
                'token' => $usertoken,
            ];

            // var_dump($userData);

            $this->user->save($userData);

            $userId = $this->user->insertID();

            $clientData = [
                'client_id' => $userId, // Use the retrieved user ID as the applicant_id
                'username' => $this->request->getVar('username'),
                'number' => $this->request->getVar('number'),
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'middlename' => $this->request->getVar('middlename'),
                'email' => $this->request->getVar('email'),
                'client_token' => $usertoken,
            ];

            $this->client->save($clientData);

            // Send verification email
            $verificationLink = site_url("verify-email/{$verificationToken}");
            $emailSubject = 'Email Verification';
            $emailMessage = "Click the link to verify your email: $verificationLink";
            $this->sendVerificationEmail($this->request->getVar('email'), $emailSubject, $emailMessage);
            return redirect()->to('/login')->with('success', 'Account Registered! Check your email to Verified');
        } else {
            return redirect()->to('/ClientRegister')->with('error', 'Invalid Input');
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
            'SMTPPass' => 'ktngmlxxdppfemnx',
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
}
