<!doctype html>
<html lang="en">

<?= view('Admin/chop/head') ?>

<body>
    <?= view('Admin/chop/header') ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/AdDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/usermanagement">
                                <i class="fa fa-user me-2"></i>
                                User Management
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/Forms">
                                <i class="bi bi-file-earmark-slides me-2"></i>
                                Forms
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/promotion">
                                <i class="fa fa-user me-2"></i>
                                Promotion
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/confirmation">
                                <i class="bi bi-check-lg me-2"></i>
                                Confirmation
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/ManageAgent">
                                <i class="fas fa-user-tie me-2"></i>
                                Agents
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/ManageApplicant">
                                <i class="fa fa-users me-2"></i>
                                Applicants
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/AdHelp">
                                <i class="fas fa-hands-helping me-2"></i>
                                Help Center
                            </a>
                        </li>

                        <li class="nav-item border-top mt-auto pt-2">
                            <a class="nav-link" href="/logout">
                                <i class="bi-box-arrow-left me-2"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Overview</h1>

                    <small class="text-muted">Hello
                        <?= $user['role'] ?>, welcome back!
                        <?= $admin['username'] ?>
                    </small>
                </div>

                <div class="row">
                    <!-- left side columns -->
                    <div class="col-lg-8">
                        <div class="row">

                            <!-- Agents monthlyAgentCount -->
                            <div class="col-lg-12 col-12">
                                <!-- First Chart for Agents -->
                                <div class="custom-block bg-white">
                                    <div id="agentChart"></div>
                                </div>

                                <!-- Second Chart for Pending Applicants -->
                                <div class="custom-block bg-white">
                                    <div id="pendingApplicantChart"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Table with hoverable rows</h5>
                                        <!-- Table with hoverable rows -->
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Position</th>
                                                        <th scope="col">Age</th>
                                                        <th scope="col">Start Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Brandon Jacob</td>
                                                        <td>Designer</td>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Bridie Kessler</td>
                                                        <td>Developer</td>
                                                        <td>35</td>
                                                        <td>2014-12-05</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Ashleigh Langosh</td>
                                                        <td>Finance</td>
                                                        <td>45</td>
                                                        <td>2011-08-12</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Angus Grady</td>
                                                        <td>HR</td>
                                                        <td>34</td>
                                                        <td>2012-06-11</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Raheem Lehner</td>
                                                        <td>Dynamic Division Officer</td>
                                                        <td>47</td>
                                                        <td>2011-04-19</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Table with hoverable rows -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Table with hoverable rows -->
                                        <div class="table-responsive">
                                            <table class="account-table table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Date</th>

                                                        <th scope="col">Time</th>

                                                        <th scope="col">Description</th>

                                                        <th scope="col">Payment Type</th>

                                                        <th scope="col">Amount</th>

                                                        <th scope="col">Balance</th>

                                                        <th scope="col">Status</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td scope="row">July 5, 2023</td>

                                                        <td scope="row">10:00 PM</td>

                                                        <td scope="row">Shopping</td>

                                                        <td scope="row">C2C Transfer</td>

                                                        <td class="text-danger" scope="row">
                                                            <span class="me-1">-</span>
                                                            $100.00
                                                        </td>

                                                        <td scope="row">$5,500.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-danger">
                                                                Pending
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">July 2, 2023</td>

                                                        <td scope="row">10:42 AM</td>

                                                        <td scope="row">Food Delivery</td>

                                                        <td scope="row">Mobile Reload</td>

                                                        <td class="text-success" scope="row">
                                                            <span class="me-1">+</span>
                                                            $250
                                                        </td>

                                                        <td scope="row">$5,600.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-success">
                                                                Success
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">June 28, 2023</td>

                                                        <td scope="row">8:20 PM</td>

                                                        <td scope="row">Billing</td>

                                                        <td scope="row">Goverment</td>

                                                        <td class="text-success" scope="row">
                                                            <span class="me-2">+</span>$50
                                                        </td>

                                                        <td scope="row">$5,350.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-success">
                                                                Success
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">June 24, 2023</td>

                                                        <td scope="row">10:48 PM</td>

                                                        <td scope="row">Shopee</td>

                                                        <td scope="row">QR Code</td>

                                                        <td class="text-danger" scope="row">
                                                            <span class="me-2">-</span>$380
                                                        </td>

                                                        <td scope="row">$5,300.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-dark">
                                                                Cancelled
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">June 12, 2023</td>

                                                        <td scope="row">12:30 AM</td>

                                                        <td scope="row">Food Delivery</td>

                                                        <td scope="row">Mobile Reload</td>

                                                        <td class="text-success" scope="row">
                                                            <span class="me-2">+</span>$250
                                                        </td>

                                                        <td scope="row">$4,920.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-success">
                                                                Success
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">May 31, 2023</td>

                                                        <td scope="row">2:40 PM</td>

                                                        <td scope="row">Food Delivery</td>

                                                        <td scope="row">Mobile Reload</td>

                                                        <td class="text-success" scope="row">
                                                            <span class="me-2">+</span>$50
                                                        </td>

                                                        <td scope="row">$4,920.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-success">
                                                                Success
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">May 22, 2023</td>

                                                        <td scope="row">8:50 AM</td>

                                                        <td scope="row">Food Delivery</td>

                                                        <td scope="row">Mobile Reload</td>

                                                        <td class="text-success" scope="row">
                                                            <span class="me-2">+</span>$50
                                                        </td>

                                                        <td scope="row">$4,920.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-success">
                                                                Success
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">May 20, 2023</td>

                                                        <td scope="row">6:45 PM</td>

                                                        <td scope="row">Food Delivery</td>

                                                        <td scope="row">Mobile Reload</td>

                                                        <td class="text-danger" scope="row">
                                                            <span class="me-2">-</span>$500
                                                        </td>

                                                        <td scope="row">$4,920.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-danger">
                                                                Pending
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">April 28, 2023</td>

                                                        <td scope="row">11:20 AM</td>

                                                        <td scope="row">Food Delivery</td>

                                                        <td scope="row">Mobile Reload</td>

                                                        <td class="text-success" scope="row">
                                                            <span class="me-2">+</span>$856
                                                        </td>

                                                        <td scope="row">$4,920.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-success">
                                                                Success
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">April 16, 2023</td>

                                                        <td scope="row">11:00 PM</td>

                                                        <td scope="row">Food Delivery</td>

                                                        <td scope="row">Mobile Reload</td>

                                                        <td class="text-success" scope="row">
                                                            <span class="me-2">+</span>$50
                                                        </td>

                                                        <td scope="row">$4,920.00</td>

                                                        <td scope="row">
                                                            <span class="badge text-bg-danger">
                                                                Pending
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Table with hoverable rows -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of left side -->

                    <!-- right side columns -->
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-body text-center">
                                        <i class="fas fa-users fa-2x"></i>
                                        <small class="d-block mt-2">Total Agents</small>
                                        <h3 class="card-title mt-2">
                                            <?= $totalAgents ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body text-center">
                                        <i class="fas fa-user-tie fa-2x"></i>
                                        <small class="d-block mt-2">Total Applicants</small>
                                        <h3 class="card-title mt-2">
                                            <?= $pendingApplicants ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card mb-3 text-center">
                                    <h5 class="card-title mt-3">Top 3 Recruiters</h5>
                                    <?php foreach ($top as $topagent): ?>
                                    <div class="card-body">
                                        <img src="<?= isset ($topagent['agentprofile']) ? base_url('/uploads/' . $topagent['agentprofile']) : '' ?>"
                                            class="card-img-top img-fluid rounded-circle mx-auto" alt="Agent Image"
                                            style="width: 80px; height: 80px;">
                                        <h5 class="card-title mt-2 small">
                                            <?= $topagent['username'] ?>
                                            <?= $topagent['total_fA'] ?>
                                        </h5>
                                        <!-- Add other relevant information as needed -->
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card" style="height: 300px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Your Heading</h5>
                                        <p class="card-text">Your text goes here. You can add more content or
                                            components.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= view('rtc/chat'); ?>
            </main>
        </div>
    </div>
    <?= view('Admin/chop/js'); ?>
    <script type="text/javascript">
    // Function to create a chart
    function createChart(chartId, data, title) {
        var options = {
            series: [{
                name: title,
                data: data.map(entry => entry.agent_count || entry.applicant_count)
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: data.map(entry => entry.month),
            },
            yaxis: {
                title: {
                    text: title
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " " + title.toLowerCase();
                    }
                }
            }
        };

        // Create and render the chart
        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }

    // Fetch dynamic data from the server for agents
    fetch('/monthlyAgentCount')
        .then(response => response.json())
        .then(data => {
            createChart('agentChart', data, 'Agents');
        })
        .catch(error => console.error('Error fetching data for agents:', error));

    // Fetch dynamic data from the server for pending applicants
    fetch('/monthlyPendingApplicantCount')
        .then(response => response.json())
        .then(data => {
            createChart('pendingApplicantChart', data, 'Applicants');
        })
        .catch(error => console.error('Error fetching data for pending applicants:', error));
    </script>

</body>

</html>