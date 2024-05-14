<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\AgentModel;
use \App\Models\UserModel;
use App\Models\ApplicantModel;
use App\Controllers\AppController;
use App\Models\ScheduleModel;
use App\Models\Scheduler;
use App\Models\ClientModel;
use App\Models\PlanModel;
use App\Models\ClientPlanModel;
use App\Models\CommiModel;

class AgentController extends BaseController
{
    private $commission;
    private $client_plan;
    private $plan;
    private $client;
    private $sched;
    private $appcon;
    private $user;
    private $applicant;
    private $agent;
    protected $scheduleModel;
    public function __construct()
    {
        $this->appcon = new AppController();
        $this->agent = new AgentModel();
        $this->user = new UserModel();
        $this->applicant = new ApplicantModel();
        $this->scheduleModel = new ScheduleModel();
        $this->sched = new Scheduler();
        $this->client = new ClientModel();
        $this->plan = new PlanModel();
        $this->client_plan = new ClientPlanModel();
        $this->commission = new CommiModel();
    }
    public function AgDash()
    {
        $data = array_merge($this->getData(), $this->getDataAge());
        $agentid = $data['agent']['agent_id'];
        $agentcode = $data['agent']['AgentCode'];
        $data['FA'] = $this->agent->where('FA', $agentid)->findAll();
        $data['applicants'] = $this->applicant->where('refcode', $agentcode)->countAllResults();
        $data['ranking'] = $this->agent->where('FA', $agentid)->countAllResults();
        $data['clients'] = $this->client_plan->where('agent', $agentid)->countAllResults();
        $totalCommis = $this->client_plan->selectSum('commission')->where('agent', $agentid)->findAll();
        $data['totalcommi'] = !empty($totalCommis) ? $totalCommis[0]['commission'] : 0;
        return view('Agent/AgDash', $data);
    }
    public function AgProfile()
    {
        $agentModel = new AgentModel();

        $data = array_merge($this->getData(), $this->getDataAge());

        $agentid = $data['agent']['agent_id'];
        // Assuming 'FA' is a field and you want to retrieve agents where agent_id is equal to 'FA'
        $data['FA'] = $agentModel->where('FA', $agentid)->findAll();
        $data['ranking'] = $this->agent->where('FA', $agentid)->countAllResults();
        return view('Agent/AgProfile', $data);
    }

    public function AgSetting()
    {
        $data = array_merge($this->getData(), $this->getDataAge());
        return view('Agent/AgSetting', $data);
    }
    public function AgHelp()
    {
        return view('Agent/AgHelp');
    }
    public function getData()
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

    public function subagent()
    {

        $session = session();
        $userId = $session->get('id');
        // Fetch the agent data
        $agents = $this->agent->where('FA', $userId)->paginate(10, 'group1');
        $data = array_merge($this->getData(), $this->getDataAge());
        $data['pager'] = $this->agent->pager;
        $data['subagent'] = $agents;
        // Fetch the user data
        $data['user'] = $this->user->find($userId);
        return view('Agent/subagents', $data);
    }

    public function subagentSearch()
    {
        $session = session();
        $userId = $session->get('id');

        $agentModel = new AgentModel();
        $data = $this->getDataAge();

        $filterUser = $this->request->getPost('filterAgent');

        // Use the paginate method to enable pagination
        $agents = $agentModel->like('username', $filterUser)
            ->where('FA', $userId)
            ->paginate(10); // Adjust the limit as needed

        // Correctly assign the pager
        $data['pager'] = $agentModel->pager;
        $data['agent'] = $agents;

        $userModel = new UserModel();
        $data['user'] = $userModel->find($userId);

        return view('Agent/subagents', $data);
    }

    public function getDataAge()
    {
        $session = session();
        $userId = $session->get('id');
        $agentModel = new AgentModel();
        $data['agent'] = $agentModel->where('agent_id', $userId)
            // ->orderBy('id', 'desc')
            ->first();
        return $data;
    }
    public function svag()
    {
        $session = session();
        $userId = $session->get('id');

        // Initialize $data array
        $data = [];

        // Get the old image file name from the database
        $oldAgent = $this->agent->select('agentprofile')->where('agent_id', $userId)->first();
        // Check if a file is uploaded
        if ($imageFile = $this->request->getFile('profile')) {
            // Check if the file is valid
            if ($imageFile->isValid()) {
                // Generate a unique name for the uploaded image
                $imageName = $imageFile->getRandomName();

                // Set the path to the upload directory
                $uploadPath = FCPATH . 'uploads/';

                // Move the uploaded image to the upload directory
                if ($imageFile->move($uploadPath, $imageName)) {
                    // Image upload successful, store the image filename in the database
                    $data['agentprofile'] = $imageName;

                    // Delete the old image file if it exists
                    if (!empty($oldAgent['agentprofile'])) {
                        $oldFilePath = $uploadPath . $oldAgent['agentprofile'];
                        if (file_exists($oldFilePath)) {
                            unlink($oldFilePath);
                        }
                    }
                } else {
                    $error = $imageFile->getError();
                    // Handle the error as needed
                }
            }
        }

        // Add other form data to the data array
        $data += [
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
            $this->agent->set($data)->where('agent_id', $userId)->update();
        }

        return redirect()->to('/AgSetting');
    }
    public function AgForm2()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        return view('Agent/AgForm2', $data);
    }
    public function AgForm3()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->appcon->getform3Data(), $this->getDataAge());
        return view('Agent/AgForm3', $data);
    }
    public function AgForm4()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        return view('Agent/AgForm4', $data);
    }
    public function AgForm5()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        return view('Agent/AgForm5', $data);
    }

    public function AgForm1()
    {
        $data['agents'] = $this->agent->findAll();
        // Merge arrays while retaining the 'agents' key
        $data = array_merge(
            $this->getData(),
            $this->appcon->getDataApp(),
            $this->getDataAge(),
            $this->appcon->getform1Data(),
            $data
        );
        return view('Agent/AgForm1', $data);
    }

    public function sched()
    {
        // Load the model
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $scheduleModel = new ScheduleModel();

        // Get all schedules from the database
        $data['schedules'] = $scheduleModel->findAll();

        // Pass data to the view
        return view('Agent/Schedule', $data);
    }

    public function cliSched()
    {
        $session = session();
        $agent = $session->get('id');
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $data['schedule'] = $this->sched->where('agent', $agent)->where('status', 'pending')->orderBy('created_at', 'desc')->findAll();
        $data['plans'] = $this->plan->findAll();
        $data['client'] = $this->client->findAll();
        $data['status'] = 'Awaiting';
        $data['class'] = 'Awaiting';
        return view('Agent/cliSched', $data);
        // var_dump($agent);
    }

    public function inprog()
    {
        $session = session();
        $agent = $session->get('id');
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $data['schedule'] = $this->sched->where('agent', $agent)->where('status', 'inprogress')->findAll();
        $data['plans'] = $this->plan->findAll();
        $data['client'] = $this->client->findAll();
        $data['status'] = 'In Progress';
        $data['class'] = 'In Progress';
        return view('Agent/cliSched', $data);
        // var_dump($agent);
    }

    public function comp()
    {
        $session = session();
        $agent = $session->get('id');
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $data['schedule'] = $this->sched->where('agent', $agent)->where('status', 'completed')->findAll();
        $data['plans'] = $this->plan->findAll();
        $data['client'] = $this->client->findAll();
        $data['status'] = 'Completed';
        $data['class'] = 'Completed';
        return view('Agent/cliSched', $data);
        // var_dump($agent);
    }


    public function compost()
    {
        $data = [];
        if ($imageFile = $this->request->getFile('receipt')) {
            if ($imageFile->isValid()) {
                $imageName = $imageFile->getRandomName();
                $uploadPath = FCPATH . 'uploads/clients/receipts/';
                if ($imageFile->move($uploadPath, $imageName)) {
                    $data['receipt'] = $imageName;
                } else {
                    $error = $imageFile->getError();
                }
            }
        }
        $token = bin2hex(random_bytes(25));
        $tokens = bin2hex(random_bytes(50));
        $schedId = $this->request->getVar('schedId');
        $plan = $this->request->getVar('plan');
        $email = $this->request->getVar('email');
        $plantoken = $this->request->getVar('plan');
        $modepayment = $this->request->getVar('typeofpayment');
        $cal['plan'] = $this->plan->where('token', $plantoken)->first();

        if ($cal['plan']) {
            switch ($modepayment) {
                case 'Annual':
                    $commissionAmount = $cal['plan']['price'] / 1 * ($cal['plan']['com_percentage'] / 100);
                    break;
                case 'Semi-Annual':
                    $commissionAmount = $cal['plan']['price'] / 2 * ($cal['plan']['com_percentage'] / 100);
                    break;
                case 'Quarterly':
                    $commissionAmount = $cal['plan']['price'] / 4 * ($cal['plan']['com_percentage'] / 100);
                    break;
                case 'Monthly':
                    $commissionAmount = $cal['plan']['price'] / 12 * ($cal['plan']['com_percentage'] / 100);
                    break;
                default:
                    $commissionAmount = 0;
            }
        }

        $data += [
            'plan' => $this->request->getVar('plan'),
            'agent' => $this->request->getVar('agent'),
            'client_id' => $this->request->getVar('client_id'),
            'mode_payment' => $this->request->getVar('typeofpayment'),
            'term' => $this->request->getVar('term'),
            'applicationNo' => $this->request->getVar('applicationNo'),
            'status' => 'paid',
            'token' => $token,
            'commission' => $commissionAmount,
        ];
        $this->client_plan->save($data);
        $s = ['status' => 'completed'];
        $this->sched->set($s)->where('id', $schedId)->update();

        $commi = [
            'token' => $tokens,
            'commi' => $commissionAmount,
            'agent_id' => $this->request->getVar('agent'),
            'client_id' => $this->request->getVar('client_id'),

        ];
        $this->commission->save($commi);
        return redirect()->to('cliSched')->with('success', 'Transaction Completed');
    }

    public function upstatusplan($token)
    {
        $stats = [];
        // Get the old image file name from the database

        $oldreceipt = $this->client_plan->select('receipt')->where('token', $token)->first();
        // Check if a file is uploaded
        if ($imageFile = $this->request->getFile('receipt')) {
            // Check if the file is valid
            if ($imageFile->isValid()) {
                // Generate a unique name for the uploaded image
                $imageName = $imageFile->getRandomName();

                // Set the path to the upload directory
                $uploadPath = FCPATH . 'uploads/clients/receipts/';

                // Move the uploaded image to the upload directory
                if ($imageFile->move($uploadPath, $imageName)) {
                    // Image upload successful, store the image filename in the database
                    $data['receipt'] = $imageName;

                    // Delete the old image file if it exists
                    if (!empty($oldreceipt['receipt'])) {
                        $oldFilePath = $uploadPath . $oldreceipt['receipt'];
                        if (file_exists($oldFilePath)) {
                            unlink($oldFilePath);
                        }
                    }
                } else {
                    $error = $imageFile->getError();
                    // Handle the error as needed
                }
            }
        }

        $tokens = bin2hex(random_bytes(50));
        $data['commi'] = $this->client_plan->where('token', $token)->first();
        $data['percentage'] = $this->plan->where('token', $data['commi']['plan'])->first();

        $annualpay = $data['percentage']['price'];
        $per = $data['percentage']['com_percentage'];
        $paymentmode = $data['commi']['mode_payment'];
        $oldcommi = $data['commi']['commission'];
        $agentid = $data['commi']['agent'];
        $clientid = $data['commi']['client_id'];

        // Calculate new commission based on payment mode
        $newcommi = $oldcommi;
        if ($paymentmode == 'Annual') {
            $newcommi += $annualpay * ($per / 100);
        } elseif ($paymentmode == 'Semi-Annual') {
            $newcommi += $annualpay * ($per / 100) / 2;
        } elseif ($paymentmode == 'Quarterly') {
            $newcommi += $annualpay * ($per / 100) / 4;
        } elseif ($paymentmode == 'Monthly') {
            $newcommi += $annualpay * ($per / 100) / 12;
        }

        if ($paymentmode == 'Annual') {
            $commi = $annualpay * ($per / 100);
        } elseif ($paymentmode == 'Semi-Annual') {
            $commi = $annualpay * ($per / 100) / 2;
        } elseif ($paymentmode == 'Quarterly') {
            $commi = $annualpay * ($per / 100) / 4;
        } elseif ($paymentmode == 'Monthly') {
            $commi = $annualpay * ($per / 100) / 12;
        }

        // Update the commission and status in the database
        $stats += [
            'status' => 'paid',
            'commission' => $newcommi,
        ];
        $this->client_plan->set($stats)->where('token', $token)->update();

        $commi = [
            'token' => $tokens,
            'commi' => $commi,
            'agent_id' => $agentid,
            'client_id' => $clientid
        ];
        $this->commission->save($commi);
        // var_dump($commi);
        return redirect()->back()->with('success', 'Plan updated successfully');
    }

    public function con($dec)
    {
        $id = base64_decode($dec);

        $status = $this->sched->where('id', $id)->get()->getRow()->status;

        if ($status === 'pending') {
            $con = ['status' => 'inprogress'];
            $this->sched->set($con)->where('id', $id)->update();
        }
        return redirect()->to('cliSched')->with('success', 'Transaction In Progress');
    }

    public function client()
    {
        $session = session();
        $agId = $session->get('id');

        $data['client'] = $this->client_plan->where('agent', $agId)->findAll();
        // var_dump($data);
        $clientIds = array_column($data['client'], 'client_id');
        $clientId = array_unique($clientIds);

        $filter = $this->request->getVar('filterclient');
        if (!empty($clientId)) { // Check if $clientId array is not empty
            if (!empty($filter)) {
                $clients = $this->client->like('username', $filter)->whereIn('client_id', $clientId)->paginate(10, 'group1');
            } else {
                $clients = $this->client->whereIn('client_id', $clientId)->paginate(10, 'group1');
            }
        } else {
            $clients = [];
        }
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $data['pager'] = $this->client->pager;
        $data['client'] = $clients;
        // var_dump($client);
        return view('Agent/clients', $data);
    }

    public function mycommi()
    {
        $data = array_merge($this->getData(), $this->appcon->getDataApp(), $this->getDataAge());
        $data['mycommission'] = $this->client_plan->select('client.username as client_name, client.client_token, client_plan.token as tokin, client_plan.*, plan.*')
            ->join('client', 'client.client_id = client_plan.client_id')
            ->join('plan', 'plan.token = client_plan.plan')
            ->where('client_plan.agent', $data['agent']['agent_id'])
            ->findAll();
        return view('Agent/mycommi', $data);
    }
}
