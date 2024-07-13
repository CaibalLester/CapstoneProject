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

    public function newnotif($userId, $link, $message, $r)
    {
        $id = $userId;
        $red = $link;
        $mess = $message;
        $role = $r;
        $data = [
            'user_id' => $id,
            'link' => $red,
            'notif' => $mess,
            'role' => $role,
        ];
        $this->notif->save($data);
    }
}
