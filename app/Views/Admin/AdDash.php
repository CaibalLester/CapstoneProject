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
                            <a class="nav-link " aria-current="page" href="/ManageAgent">
                                <i class="bi-person me-2"></i>
                                Manage Agents
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/ManageApplicant">
                                <i class="bi-person me-2"></i>
                                Manage Applicants
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AdProfile">
                                <i class="bi-person me-2"></i>
                                Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AdSetting">
                                <i class="bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AdHelp">
                                <i class="bi-question-circle me-2"></i>
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
                                    <h5 class="card-title mt-3">Top 3 agents</h5>
                                    <div class="card-body">
                                        <img src="<?= isset($admin['adminProfile']) ? base_url('/uploads/' . $admin['adminProfile']) : '' ?>"
                                            class="card-img-top img-fluid rounded-circle mx-auto" alt="Agent Image"
                                            style="width: 80px; height: 80px;">
                                        <h5 class="card-title mt-2 small">Agent Name</h5>
                                        <!-- Add other relevant information as needed -->
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= isset($admin['adminProfile']) ? base_url('/uploads/' . $admin['adminProfile']) : '' ?>"
                                            class="card-img-top img-fluid rounded-circle mx-auto" alt="Agent Image"
                                            style="width: 80px; height: 80px;">
                                        <h5 class="card-title mt-2 small">Agent Name</h5>
                                        <!-- Add other relevant information as needed -->
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= isset($admin['adminProfile']) ? base_url('/uploads/' . $admin['adminProfile']) : '' ?>"
                                            class="card-img-top img-fluid rounded-circle mx-auto" alt="Agent Image"
                                            style="width: 80px; height: 80px;">
                                        <h5 class="card-title mt-2 small">Agent Name</h5>
                                        <!-- Add other relevant information as needed -->
                                    </div>
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
                    </div><!-- end of right side columns -->
                    <footer class="site-footer">
                        <div class="container">
                            <div class="row">
                            </div>
                        </div>
                    </footer>
                </div>

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
                        formatter: function (val) {
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