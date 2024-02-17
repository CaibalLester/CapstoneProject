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

                    <small class="text-muted">Hello <?= $admin['username'] ?>, welcome back!</small>
                </div>

                <div class="row my-4">
                    <!-- Agents monthlyAgentCount -->
                    <div class="col-lg-7 col-12">
                        <!-- First Chart for Agents -->
                        <div class="custom-block bg-white">
                            <div id="agentChart"></div>
                        </div>

                        <!-- Second Chart for Pending Applicants -->
                        <div class="custom-block bg-white">
                            <div id="pendingApplicantChart"></div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                            <div class="custom-block-profile-image-wrap mb-4">
                                <img src="<?= isset($admin['adminProfile']) ? base_url('/uploads/' . $admin['adminProfile']) : '' ?>"
                                    class="custom-block-profile-image img-fluid" alt="">
                                <a href="/AdSetting" class="bi-pencil-square custom-block-edit-icon"></a>
                            </div>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>User Name</strong>

                                <span>
                                    <?= $admin['username'] ?>
                                </span>
                            </p>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Email:</strong>

                                <a href="#">
                                    <?= $admin['email'] ?>
                                </a>
                            </p>

                            <p class="d-flex flex-wrap mb-0">
                                <strong>Phone:</strong>

                                <a href="#">
                                    <?= $admin['number'] ?>
                                </a>
                            </p>
                        </div>

                        <div class="custom-block custom-block-balance">
                            <small>Total Agents</small>
                            <h2 class="mt-2 mb-3">
                                <?= $totalAgents ?>
                            </h2>
                        </div>

                        <div class="custom-block custom-block-balance">
                            <small>Total Applicants</small>
                            <h2 class="mt-2 mb-3">
                                <?= $pendingApplicants ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                        </div>
                    </div>
                </footer>
                <!-- <?= view('Admin/chop/chat') ?> -->
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