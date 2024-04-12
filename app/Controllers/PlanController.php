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
        if ($imageFile = $this->request->getFile('image')) {
            if ($imageFile->isValid()) {
                $imageName = $imageFile->getRandomName();
                $uploadPath = FCPATH . 'uploads/plans';
                if ($imageFile->move($uploadPath, $imageName)) {
                    $plan['image'] = $imageName;
                }
            }
        }
        $data = [
            'plan_name' => $this->request->getVar('plan_name'),
            'brief_description' => $this->request->getVar('brief_description'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'token' => $token,
            'image' => $plan,
            'com_percentage' => $this->request->getVar('com_percentage'),
        ];
            $this->plan->save($data);

        return redirect()->to('plans')->with('success', 'new plan added');
    }

    public function newplanUpdate($token)
    {
        $token2 = bin2hex(random_bytes(50));
        $id = $this->request->getVar('id');
        $oldproduct = $this->plan->select('image')->where('id', $id)->first();
        if ($imageFile = $this->request->getFile('image')) {
            if ($imageFile->isValid()) {
                $imageName = $imageFile->getRandomName();
                $uploadPath = FCPATH . 'uploads/plans';
                if ($imageFile->move($uploadPath, $imageName)) {
                    $plan['image'] = $imageName;
                    if (!empty($oldproduct['image'])) {
                        $oldFilePath = $uploadPath . $oldproduct['image'];
                        if (file_exists($oldFilePath)) {
                            unlink($oldFilePath);
                        }
                    }
                }
            }
        }
        $plan += [
            'plan_name' => $this->request->getVar('plan_name'),
            'brief_description' => $this->request->getVar('brief_description'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'token' => $token2,
            'created_at' => $this->request->getVar('created_at'),
            'com_percentage' => $this->request->getVar('com_percentage'),
        ];

        // var_dump($plan);
        $this->plan->set($plan)->where('token', $token)->update();
        return redirect()->to('plans')->with('success', 'Plan Updated');
    }

}
