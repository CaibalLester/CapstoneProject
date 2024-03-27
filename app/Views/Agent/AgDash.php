<!doctype html>
<html lang="en">
<?= view('Agent/chop/head') ?>
    <body>
        
    <?= view('Agent/chop/header') ?>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                    <div class="position-sticky py-4 px-3 sidebar-sticky">
                        <ul class="nav flex-column h-100">
                            
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/AgDash">
                                    <i class="bi-house-fill me-2"></i>
                                    Overview
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/AgProfile">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/subagent">
                                    <i class="bi-person me-2"></i>
                                    Sub Agents
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/AgSetting">
                                    <i class="bi-gear me-2"></i>
                                    Settings
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/AgHelp">
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

                        <small class="text-muted">Hello <?= isset($agent['username']) ? $agent['username'] : '' ?>, welcome back!</small>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-7 col-12">
                            

                            <div class="custom-block bg-white">
                                <div id="chart"></div>
                            </div>

                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                                <div class="custom-block-profile-image-wrap mb-4">
                                    <img src="<?= isset($agent['agentprofile']) ? base_url('/uploads/' . $agent['agentprofile']) : 'default_path_here' ?>" class="custom-block-profile-image img-fluid" alt="">

                                    <a href="/AgSetting" class="bi-pencil-square custom-block-edit-icon"></a>
                                </div>
                                <p class="d-flex flex-wrap mb-2">
                                    <strong>Agent ID:</strong>

                                    <span><?=$agent['agent_id']?></span>
                                </p>
                                <p class="d-flex flex-wrap mb-2">
                                    <strong>Agent Code:</strong>

                                    <span><?=$agent['AgentCode']?></span>
                                </p>

                                <p class="d-flex flex-wrap mb-2">
                                    <strong>User Name:</strong>

                                    <span><?=$agent['username']?></span>
                                </p>

                                <p class="d-flex flex-wrap mb-2">
                                    <strong>Email:</strong>
                                    
                                    <a href="#">
                                    <?=$agent['email']?>
                                    </a>
                                </p>

                                <p class="d-flex flex-wrap mb-0">
                                    <strong>Phone:</strong>
                                    <a href="#">
                                    <?=$agent['number']?>
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>

                    <footer class="site-footer">
                        <div class="container">
                            <div class="row">
                                
                            </div>
                        </div>
                    </footer>
                      
                </main>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <?= view('Agent/chop/js') ?>

        <script type="text/javascript">
            var options = {
              series: [13, 43, 22],
              chart: {
              width: 380,
              type: 'pie',
            },
            labels: ['Balance', 'Expense', 'Credit Loan',],
            responsive: [{
              breakpoint: 480,
              options: {
                chart: {
                  width: 200
                },
                legend: {
                  position: 'bottom'
                }
              }
            }]
            };

            var chart = new ApexCharts(document.querySelector("#pie-chart"), options);
            chart.render();
        </script>

        <script type="text/javascript">
            var options = {
              series: [{
              name: 'Income',
              data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
              name: 'Expense',
              data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
              name: 'Transfer',
              data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
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
              categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
              title: {
                text: '$ (thousands)'
              }
            },
            fill: {
              opacity: 1
            },
            tooltip: {
              y: {
                formatter: function (val) {
                  return "$ " + val + " thousands"
                }
              }
            }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        </script>

    </body>
</html>