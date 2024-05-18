<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApplicantModel;
class MapController extends BaseController
{
    private $applicant;
    public function __construct()
    {
        $this->applicant = new ApplicantModel();
    }
    public function map()
    {
        $data['clients'] = $this->applicant->findAll();
        return view('Admin/map', $data);
    }
}
