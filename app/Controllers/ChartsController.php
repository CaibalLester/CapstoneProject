<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommiModel;

class ChartsController extends BaseController
{
  private $commission;

  public function __construct()
  {
    $this->commission = new CommiModel();
  }

  public function monthlyAgentCount()
  {
    header('Content-Type: application/json');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "erecruit";

    $conn = new \mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT 
                    DATE_FORMAT(created_at, '%Y-%m') AS month,
                    COUNT(id) AS agent_count
                  FROM 
                    agent
                  GROUP BY 
                    month 
                  ORDER BY 
                    month ASC";

    $result = $conn->query($query);

    if ($result) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }

      $result->free_result();

      $conn->close();

      echo json_encode($data);
    } else {
      echo "Error: " . $conn->error;
    }
  }

  public function monthlyPendingApplicantCount()
  {
    header('Content-Type: application/json');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "erecruit";

    $conn = new \mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT 
                    DATE_FORMAT(created_at, '%Y-%m') AS month,
                    COUNT(id) AS applicant_count
                  FROM 
                    applicant
                  -- WHERE 
                  --   status = 'pending'
                  GROUP BY 
                    month 
                  ORDER BY 
                    month ASC";

    $result = $conn->query($query);

    if ($result) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }

      $result->free_result();

      $conn->close();

      echo json_encode($data);
    } else {
      echo "Error: " . $conn->error;
    }
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
