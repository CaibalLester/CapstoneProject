<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ChartsController extends BaseController
{
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
                  WHERE 
                    status = 'pending'
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
}
