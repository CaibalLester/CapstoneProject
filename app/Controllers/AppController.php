<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApplicantModel;
use App\Models\Form1Model;
use App\Models\Form2Model;
use App\Models\Form3Model;
use \App\Models\UserModel;
use \App\Models\AgentModel;

class AppController extends BaseController
{
    private $agent;
    private $form1;
    private $form2;
    private $form3;
    private $user;
    private $applicant;
    public function __construct()
    {
        $this->agent = new AgentModel();
        $this->form1 = new Form1Model();
        $this->form2 = new Form2Model();
        $this->form3 = new Form3Model();
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
        // Find the user by ID
        $data['user'] = $this->user->find($userId);

        return $data;
    }

    private function getDataApp()
    {
        $session = session();
        $userId = $session->get('id');
        $data['applicant'] = $this->applicant->where('applicant_id', $userId)
            ->orderBy('id', 'desc')
            ->first();
        return $data;
    }

    private function getform1Data()
    {
        $session = session();
        $userId = $session->get('id');
        $data['lifechangerform'] = $this->form1->where('user_id', $userId)
            ->first();
        return $data;
    }
    private function getform2Data()
    {
        $session = session();
        $userId = $session->get('id');
        $data['aial'] = $this->form2->where('user_id', $userId)
            ->first();
        return $data;
    }
    private function getform3Data()
    {
        $session = session();
        $userId = $session->get('id');
        $data['gli'] = $this->form3->where('applicant_id', $userId)
            ->first();
        return $data;
    }

    private function getform4Data()
    {
        $session = session();
        $userId = $session->get('id');
        $data['aonff'] = $this->form1->where('user_id', $userId)
            ->first();
        return $data;
    }
    private function getform5Data()
    {
        $session = session();
        $userId = $session->get('id');
        $data['sou'] = $this->form1->where('user_id', $userId)
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
        // Get the old image file name from the database
        $oldApp = $this->applicant->select('profile')->where('applicant_id', $userId)->first();
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

                    // Delete the old image file if it exists
                    if (!empty($oldApp['profile'])) {
                        $oldFilePath = $uploadPath . $oldApp['profile'];
                        if (file_exists($oldFilePath)) {
                            unlink($oldFilePath);
                        }
                    }
                } else {
                    $error = $imageFile->getError();
                    echo $error;
                }
            }
        }

        // Add other form data to the data array
        $data += [
            // 'applicantfullname' => $this->request->getVar('applicantfullname'),
            'lastname' => $this->request->getVar('lastname'),
            'firstname' => $this->request->getVar('firstname'),
            'middlename' => $this->request->getVar('middlename'),
            'username' => $this->request->getVar('username'),
            'number' => $this->request->getVar('number'),
            'email' => $this->request->getVar('email'),
            'birthday' => $this->request->getVar('birthday'),
            'region' => $this->request->getVar('region_text'),
            'province' => $this->request->getVar('province_text'),
            'city' => $this->request->getVar('city_text'),
            'barangay' => $this->request->getVar('barangay_text'),
            'street' => $this->request->getVar('street'),
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
        $data['agents'] = $this->agent->findAll();
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

    public function form3sv()
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
            'applicant_id' => $this->request->getVar('applicant_id'),
            'app_gli_token' => $this->request->getVar('app_gli_token'),
            'lastName' => $this->request->getVar('lastName'),
            'firstName' => $this->request->getVar('firstName'),
            'middleName ' => $this->request->getVar('middleName '),
            'dateOfBirth' => $this->request->getVar('dateOfBirth'),
            'occupation' => $this->request->getVar('occupation'),
            'companyName' => $this->request->getVar('companyName'),
            'businessNature' => $this->request->getVar('businessNature'),
            'sex' => $this->request->getVar('sex'),
            'civilStatus ' => $this->request->getVar('civilStatus '),
            'nationality' => $this->request->getVar('nationality'),
            'residenceAddress' => $this->request->getVar('residenceAddress'),
            'residenceTelephone' => $this->request->getVar('residenceTelephone'),
            'businessAddress' => $this->request->getVar('businessAddress'),
            'businessTelephone' => $this->request->getVar('businessTelephone'),
            'firstName1' => $this->request->getVar('firstName1'),
            'mi1' => $this->request->getVar('mi1'),
            'lastName1 ' => $this->request->getVar('lastName1 '),
            'month1' => $this->request->getVar('month1'),
            'day1' => $this->request->getVar('day1'),
            'year1' => $this->request->getVar('year1'),
            'relationship1' => $this->request->getVar('relationship1'),
            'remarks1 ' => $this->request->getVar('remarks1 '),
            'firstName2 ' => $this->request->getVar('firstName2 '),
            'mi2 ' => $this->request->getVar('mi2 '),
            'lastName2 ' => $this->request->getVar('lastName2 '),
            'month2' => $this->request->getVar('month2'),
            'day2' => $this->request->getVar('day2'),
            'year2' => $this->request->getVar('year2'),
            'relationship2' => $this->request->getVar('relationship2'),
            'remarks2' => $this->request->getVar('remarks2'),
            'firstName3 ' => $this->request->getVar('firstName3 '),
            'mi3 ' => $this->request->getVar('mi3 '),
            'astName3' => $this->request->getVar('astName3'),
            'month3' => $this->request->getVar('month3'),
            'day3' => $this->request->getVar('day3'),
            'year3' => $this->request->getVar('year3'),
            'relationship3 ' => $this->request->getVar('relationship3 '),
            'remarks3 ' => $this->request->getVar('remarks3 '),
            'firstName4' => $this->request->getVar('firstName4'),
            'mi4 ' => $this->request->getVar('mi4 '),
            'lastName4' => $this->request->getVar('lastName4'),
            'month4' => $this->request->getVar('month4'),
            'day4' => $this->request->getVar('day4'),
            'year4' => $this->request->getVar('year4'),
            'relationship4' => $this->request->getVar('relationship4'),
            'remakrs4 ' => $this->request->getVar('remakrs4 '),
            'trusteeMinorBenefic' => $this->request->getVar('trusteeMinorBenefic'),
            'place ' => $this->request->getVar('place '),
            'day' => $this->request->getVar('day'),
            'month' => $this->request->getVar('month'),
            'year' => $this->request->getVar('year'),
            'applicantSignature' => $this->request->getVar('applicantSignature'),
        ];
        $this->form3->set($data)->where('applicant_id', $userId)->update();
        return redirect()->to('/AppForm3');
        // var_dump($data);
    }
    public function AppForm2()
    {
        $data = array_merge($this->getData(), $this->getDataApp());
        return view('Applicant/AppForm2', $data);
    }
    public function AppForm3()
    {
        $data = array_merge($this->getData(), $this->getDataApp(), $this->getform3Data());
        return view('Applicant/AppForm3', $data);
    }
    public function AppForm4()
    {
        $data = array_merge($this->getData(), $this->getDataApp());
        return view('Applicant/AppForm4', $data);
    }
    public function AppForm5()
    {
        $data = array_merge($this->getData(), $this->getDataApp());
        return view('Applicant/AppForm5', $data);
    }

    public function FA()
    {
        $agentModel = new AgentModel();
        $data = array_merge($this->getData(), $this->getDataApp());

        // Get the search input from the form
        $filterUser = $this->request->getPost('searchfa');

        // If $filterUser is not empty, add a where condition to filter records
        if (!empty($filterUser)) {
            $agents = $this->agent->like('username', $filterUser)->paginate(10, 'group1'); // Adjust the limit as needed
        } else {
            // If no filter, retrieve all agents with pagination
            $agents = $this->agent->paginate(10, 'group1'); // Adjust the limit as needed
        }

        // Correctly assign the pager
        $data['pager'] = $this->agent->pager;
        $data['agents'] = $agents;

        return view('Applicant/FA', $data);
    }
}
