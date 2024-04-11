<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\AdminController;
use App\Models\PlanModel;

class PlanController extends BaseController
{
    private $plan;
    private $adcon;
    public function __construct()
    {
        $this->plan = new PlanModel();
        $this->adcon = new AdminController();
    }
    public function plans()
    {
        $data = array_merge($this->adcon->getData(), $this->adcon->getDataAd());
        $data['plan'] = $this->plan->findAll();
        return view("Admin/plan", $data);
    }

    public function newplan()
    {
        $token = bin2hex(random_bytes(50));
        $plan = [
            'plan_name' => $this->request->getVar('plan_name'),
            'brief_description' => $this->request->getVar('brief_description'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'token' => $token,
            'created_at' => $this->request->getVar('created_at'),
            'image' => $this->request->getVar('image'),
            'com_percentage' => $this->request->getVar('com_percentage'),
        ];
        // var_dump($plan);
        $this->plan->save($plan);
        return redirect()->to('plans')->with('success', 'new plan added');
    }

}
