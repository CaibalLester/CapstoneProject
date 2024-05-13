<?php

namespace App\Controllers;

use App\Models\AgentModel;
use App\Controllers\BaseController;
use App\Models\CommiModel;
use App\Models\ApplicantModel;

class ChartsController extends BaseController
{
  private $commission;
  private $agent;
  private $app;
  public function __construct()
  {
    $this->agent = new AgentModel();
    $this->commission = new CommiModel();
    $this->app = new ApplicantModel();
  }

  public function monthlyAgentCount()
  {
    $query = $this->agent->query("SELECT MONTH(created_at) AS month, YEAR(created_at) AS year, COUNT(agent_id) AS agent_count FROM agent GROUP BY YEAR(created_at), MONTH(created_at) ORDER BY year ASC, month ASC");
    $result = $query->getResultArray();
    return json_encode($result);
  }

  public function getApplicantsCount()
  {
    $query = $this->app->query("SELECT MONTH(created_at) AS month, YEAR(created_at) AS year, COUNT(applicant_id) AS applicant_count FROM applicant GROUP BY YEAR(created_at), MONTH(created_at) ORDER BY year ASC, month ASC");
    $result = $query->getResultArray();
    return json_encode($result);
  }

  // Controller method to fetch monthly commission data
  public function getMonthlyCommissions()
  {
    $session = session();
    $userId = $session->get('id');
    $query = $this->commission->query("SELECT MONTH(created_at) AS month, YEAR(created_at) AS year, SUM(commi) AS total_commission FROM commissions WHERE agent_id = $userId GROUP BY YEAR(created_at), MONTH(created_at) ORDER BY year ASC, month ASC");
    $result = $query->getResultArray();
    return json_encode($result);
  }
  public function getYearlyCommissions()
  {
    $session = session();
    $userId = $session->get('id');

    $query = $this->commission->query("SELECT YEAR(created_at) AS year, SUM(commi) AS total_commission FROM commissions WHERE agent_id = $userId GROUP BY YEAR(created_at) ORDER BY year ASC");
    $result = $query->getResultArray();
    return json_encode($result);
  }
}
