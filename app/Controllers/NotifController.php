<?php

namespace App\Controllers;
use \App\Models\NotifModel;

use App\Controllers\BaseController;

class NotifController extends BaseController
{
    private $notif;

    public function __construct()
    {
        $this->notif = new NotifModel();
    }
    public function clearnotif()
    {
        $this->notif->where('role', 'admin')->delete();
        return redirect()->to('AdDash');
    }
}
