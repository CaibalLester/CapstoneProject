<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Form1Model;

class ApplicantController extends BaseController
{
    private $form1;
    public function __construct()
    {
        $this->form1 = new Form1Model();
    }
    public function index()
    {
        return view('Applicants/dashboard');
    }
    public function form1()
    {
        return view('Applicants/form1');
    }
    public function form1sv()
    {
        // $id = $this->request->getVar('id');
        $data = [
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

        $this->form1->insert($data);
        return redirect()->to('Form1');
    }
}
