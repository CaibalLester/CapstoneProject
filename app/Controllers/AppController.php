<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApplicantModel;
use App\Models\Form1Model;
use \App\Models\UserModel;
use \App\Models\AgentModel;

class AppController extends BaseController
{
    private $form1;
    private $user;
    private $applicant;
    public function __construct()
    {
        $this->form1 = new Form1Model();
        $this->user = new UserModel();
        $this->applicant = new ApplicantModel();
    }

    public function AppDash()
    {
        $data = array_merge($this->getData(), $this->getDataApp());
        return view('Applicant/AppDash', $data);
    }

    public function AppProfile()
    {
        $data = array_merge($this->getData(), $this->getDataApp());
        return view('Applicant/AppProfile', $data);
    }

    private function getData()
    {
        $session = session();

        // Check if the user is logged in
        if (!$session->get('id')) {
            // Redirect or handle the case where the user is not logged in
            return redirect()->to('login');
        }

        // Get the user ID from the session
        $userId = $session->get('id');

        // Load the User model
        $userModel = new UserModel();

        // Find the user by ID
        $data['user'] = $userModel->find($userId);

        return $data;
    }

    private function getDataApp()
    {
        $session = session();
        // Get the user ID from the session
        $userId = $session->get('id');
        // Load the User model
        $applicantModel = new ApplicantModel();

        // Find the user by ID
        $data['applicant'] = $applicantModel->where('applicant_id', $userId)
            ->orderBy('id', 'desc')
            ->first();

        return $data;
    }

    private function getform1Data()
    {
        $session = session();

        // Get the user ID from the session
        $userId = $session->get('id');

        // Load the Form1Model
        $form1Model = new Form1Model();

        // Find the latest form data based on the user ID
        $data['lifechangerform'] = $form1Model->where('user_id', $userId)
            ->first();
        return $data;
    }
    public function AppSetting()
    {
        $data = array_merge($this->getData(), $this->getDataApp());
        return view('Applicant/AppSetting', $data);
    }

    public function svap()
    {
        $session = session();
        $userId = $session->get('id');
        // Initialize $data array
        $data = [];
        // Check if a file is uploaded
        if ($imageFile = $this->request->getFile('profile')) {
            // Check if the file is valid
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                // Generate a unique name for the uploaded image
                $imageName = $imageFile->getRandomName();

                // Set the path to the upload directory
                $uploadPath = FCPATH . 'uploads/';

                // Move the uploaded image to the upload directory
                if ($imageFile->move($uploadPath, $imageName)) {
                    // Image upload successful, store the image filename in the database
                    $data['profile'] = $imageName;
                } else {
                    $error = $imageFile->getError();
                    // Handle the error as needed
                }
            }
        }

        // Add other form data to the data array
        $data += [
            'applicantfullname' => $this->request->getVar('applicantfullname'),
            'username' => $this->request->getVar('username'),
            'number' => $this->request->getVar('number'),
            'email' => $this->request->getVar('email'),
            'birthday' => $this->request->getVar('birthday'),
        ];

        // Check if $data array is not empty before updating the database
        if (!empty($data)) {
            // Update the applicant data
            $this->applicant->set($data)->where('applicant_id', $userId)->update();
        }

        return redirect()->to('/AppSetting');
    }

    public function AppHelp()
    {
        $data = array_merge($this->getData(), $this->getDataApp());
        return view('Applicant/AppHelp', $data);
    }

    public function AppForm1()
    {
        $agent = new AgentModel();
        $data['agents'] = $agent->findAll();

        // Merge arrays while retaining the 'agents' key
        $data = array_merge($this->getData(), $this->getDataApp(), $this->getform1Data(), $data);

        return view('Applicant/AppForm1', $data);
    }

    public function form1sv()
    {
        $session = session();
        // Retrieve user_id from the session
        $userId = $session->get('id');

        // Check if user_id is available
        if (!$userId) {
            // Redirect or handle the case when user_id is not available
            return redirect()->to('/login');
        }
        $data = [
            // 'user_id' => $userId,
            'position' => $this->request->getVar('positionApplying'),
            'preferredArea' => $this->request->getVar('preferredArea'),
            'referral' => $this->request->getVar('referral') ?? 'No',
            'referralBy' => $this->request->getVar('referralBy'),
            'onlineAd' => $this->request->getVar('onlineAd') ?? 'No',
            'walkIn' => $this->request->getVar('walkIn') ?? 'No',
            'othersRef' => $this->request->getVar('othersRef') ?? 'No',
            'fname' => $this->request->getVar('fullname'),
            'nickname' => $this->request->getVar('nickname'),
            'birthdate' => $this->request->getVar('birthdate'),
            'placeOfBirth' => $this->request->getVar('placeOfBirth'),
            'gender' => $this->request->getVar('gender'),
            'bloodType' => $this->request->getVar('bloodType'),
            'homeAddress' => $this->request->getVar('homeAddress'),
            'mobileNo' => $this->request->getVar('mobileNo'),
            'landline' => $this->request->getVar('landline') ?? 'N/A',
            'email' => $this->request->getVar('email'),
            'citizenship' => $this->request->getVar('citizenship'),
            'othersCitizenship' => $this->request->getVar('othersCitizenship') ?? 'N/A',
            'naturalizationInfo' => $this->request->getVar('naturalizationInfo') ?? 'N/A',
            'maritalStatus' => $this->request->getVar('maritalStatus'),
            'maidenName' => $this->request->getVar('maidenName') ?? 'N/A',
            'spouseName' => $this->request->getVar('spouseName') ?? 'N/A',
            'sssNo' => $this->request->getVar('sssNo'),
            'tin' => $this->request->getVar('tin'),

            'lifeInsuranceExperience' => $this->request->getVar('lifeInsuranceExperience') ?? 'No',
            'traditional' => $this->request->getVar('traditional') ?? 'No',
            'variable' => $this->request->getVar('variable') ?? 'No',
            'recentInsuranceCompany' => $this->request->getVar('recentInsuranceCompany') ?? 'N/A',

            'highSchool' => $this->request->getVar('highSchool') ?? 'N/A',
            'highSchoolCourse' => $this->request->getVar('highSchoolCourse') ?? 'N/A',
            'highSchoolYear' => $this->request->getVar('highSchoolYear') ?? 'N/A',

            'college' => $this->request->getVar('college') ?? 'N/A',
            'collegeCourse' => $this->request->getVar('collegeCourse') ?? 'N/A',
            'collegeYear' => $this->request->getVar('collegeYear') ?? 'N/A',
            'graduateSchool' => $this->request->getVar('graduateSchool') ?? 'N/A',
            'graduateCourse' => $this->request->getVar('graduateCourse') ?? 'N/A',
            'graduateYear' => $this->request->getVar('graduateYear') ?? 'N/A',

            'companyName1' => $this->request->getVar('companyName1') ?? 'N/A',
            'position1' => $this->request->getVar('position1') ?? 'N/A',
            'employmentFrom1' => $this->request->getVar('employmentFrom1') ?? 'N/A',
            'employmentTo1' => $this->request->getVar('employmentTo1') ?? 'N/A',
            'reason1' => $this->request->getVar('reason1') ?? 'N/A',
            'companyName2' => $this->request->getVar('companyName2') ?? 'N/A',
            'position2' => $this->request->getVar('position2') ?? 'N/A',
            'employmentFrom2' => $this->request->getVar('employmentFrom2') ?? 'N/A',
            'employmentTo2' => $this->request->getVar('employmentTo2') ?? 'N/A',
            'reason2' => $this->request->getVar('reason2') ?? 'N/A',
            'companyName3' => $this->request->getVar('companyName3') ?? 'N/A',
            'position3' => $this->request->getVar('position3') ?? 'N/A',
            'employmentFrom3' => $this->request->getVar('employmentFrom3') ?? 'N/A',
            'employmentTo3' => $this->request->getVar('employmentTo3') ?? 'N/A',
            'reason3' => $this->request->getVar('reason3') ?? 'N/A',

            'companyName' => $this->request->getVar('companyName') ?? 'N/A',
            'resposition' => $this->request->getVar('position') ?? 'N/A',
            'contactName' => $this->request->getVar('contactName') ?? 'N/A',
            'contactPosition' => $this->request->getVar('contactPosition') ?? 'N/A',
            'emailAddress' => $this->request->getVar('emailAddress') ?? 'N/A',
            'contactNumber' => $this->request->getVar('contactNumber') ?? 'N/A',
            'yescuremployed' => $this->request->getVar('yescuremployed') ?? 'N/A',
            'nocuremployed' => $this->request->getVar('nocuremployed') ?? 'N/A',
            'allowed' => $this->request->getVar('allowed') ?? 'N/A',
            'notallowed' => $this->request->getVar('notallowed') ?? 'N/A',
            'ifnoProvdtls' => $this->request->getVar('ifnoProvdtls') ?? 'N/A',
        ];

        // $this->form1->insert($data);
        $this->form1->set($data)->where('user_id', $userId)->update();
        return redirect()->to('/AppForm1');
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
