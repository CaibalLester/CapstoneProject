<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AgentController extends BaseController
{
    public function AgDash()
    {
        return view('Agent/AgDash');
    }
    public function AgProfile()
    {
        return view('Agent/AgProfile');
    }
    public function AgSetting()
    {
        return view('Agent/AgSetting');
    }
    public function AgHelp()
    {
        return view('Agent/AgHelp');
    }
}
