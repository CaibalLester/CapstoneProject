<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RTCModel;

class RTCController extends BaseController
{
    private $chat;
    public function __construct()
    {
        $this->chat = new RTCModel();
    }

    public function homechat()
    {
        $session = session();
        $userId = $session->get('id');
        $chatModel = new RTCModel();
        $data['chat'] = $chatModel->where('recipient', $userId)->findAll();
        return view('chat', $data);
    }

    public function chat() //dito ka mag sesend ng message
    {
        $session = session();
        $userId = $session->get('id');
        
        $chatModel = new RTCModel();
        $data['chat'] = $chatModel->where('recipient', $userId)->orderBy('id', 'desc')->get();
        $data = [
            'sender' => $userId,
            'recipient' => $this->request->getVar('sendto'),
            'message' => $this->request->getVar('message'),
        ];
        $this->chat->insert($data);
        return redirect()->to('/homechat');
    }

//        public function send() //dito makikita yung sinend mo
//    {
//         $session = session();
//         $userId = $session->get('id');
//         $chatModel = new RTCModel();
//         $data['chat'] = $chatModel->where('recipient' , $userId)->findAll();
//         return view('rec',$data);
//    }

    public function send()
    {
        $session = session();
        $userId = $session->get('id');
        $chatModel = new RTCModel();

        // var_dump($userId);
        // Fetch chat messages for the recipient
        $data['chats'] = $chatModel->where('recipient', $userId)->findAll();

        // Calculate the time difference for each chat message
        foreach ($data['chats'] as &$chat) {
            // Convert created_at to DateTime object
            $createdAt = new \DateTime($chat['created_at']);

            // Calculate the time difference
            $now = new \DateTime();
            $diff = $now->diff($createdAt);

            // Add the time difference to the chat array
            $chat['time_diff'] = $this->formatTimeDifference($diff);
        }

        return view('rec', $data);
    }

    // Helper function to format time difference
    private function formatTimeDifference($diff)
    {
        $formattedDiff = '';

        if ($diff->y > 0) {
            $formattedDiff .= $diff->y . ' year(s) ';
        }
        if ($diff->m > 0) {
            $formattedDiff .= $diff->m . ' month(s) ';
        }
        if ($diff->d > 0) {
            $formattedDiff .= $diff->d . ' day(s) ';
        }
        if ($diff->h > 0) {
            $formattedDiff .= $diff->h . ' hour(s) ';
        }
        if ($diff->i > 0) {
            $formattedDiff .= $diff->i . ' minute(s) ';
        }
        if ($diff->s > 0) {
            $formattedDiff .= $diff->s . ' second(s) ';
        }

        return $formattedDiff;
    }



}
