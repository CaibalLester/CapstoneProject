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
                            <a class="nav-link " href="#" data-bs-toggle="collapse" data-bs-target="#manageDropdown"
                                aria-expanded="false">
                                <i class="bi-book me-2"></i>
                                My Forms
                            </a>
                            <div class="collapse" id="manageDropdown">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <span><a class="nav-link " href="/AgForm1">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">LIFE CHANGER</span>
                                            </a></span><br>
                                        <a class="nav-link " href="/AgForm2">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">AIAL</span>
                                        </a><br>
                                        <a class="nav-link" href="/AgForm3">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">GROUP LIFE INSURANCE</span>
                                        </a><br>
                                        <a class="nav-link" href="/AgForm4">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">AFFIDAVIT OF NON-FILING</span>
                                        </a><br>
                                        <a class="nav-link" href="/AgForm5">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">STATEMENT OF UNDERTAKING</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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

                    <small class="text-muted">Hello
                        <?= isset($agent['username']) ? $agent['username'] : '' ?>, welcome back!
                    </small>
                </div>

                <div class="row">
                    <!-- left side columns -->
                    <div class="col-lg-8">
                        <div class="custom-block bg-white">
                            <div id="chart"></div>
                        </div>
                    </div>
                    <!-- end of left side -->

                    <!-- right side columns -->
                    <div class="col-lg-4">
                        <div class="card mb-2">
                            <div class="card-body d-flex flex-column align-items-center">
                                <!-- Set max-width and max-height to constrain the image within the card body -->
                                <div class="image-container"
                                    style="position: relative; max-width: 100%; max-height: 100%; overflow: hidden;">
                                    <?php
                                    $imageSrc = '/AgentInfo/rank/bronze.png'; // Default image source
                                    switch ($ranking) {
                                        case ($ranking >= 1 && $ranking <= 10):
                                            $imageSrc = '/AgentInfo/rank/bronze.png';
                                            break;
                                        case ($ranking >= 11 && $ranking <= 20):
                                            $imageSrc = '/AgentInfo/rank/silver.png';
                                            break;
                                        case ($ranking >= 21 && $ranking <= 30):
                                            $imageSrc = '/AgentInfo/rank/gold.png';
                                            break;
                                        case ($ranking >= 31 && $ranking <= 40):
                                            $imageSrc = '/AgentInfo/rank/diamond.png';
                                            break;
                                        default:
                                            $imageSrc = '/AgentInfo/rank/platinum.png';
                                            break;
                                    }
                                    ?>
                                    <img src="<?= $imageSrc ?>" alt=""
                                        style="width: 50%; height: 50%; transform: scale(3); display: block; margin: 0 auto;">
                                </div>
                                <!-- Rank text -->
                                <h5 class="">
                                    <?php
                                    switch ($ranking) {
                                        case ($ranking >= 1 && $ranking <= 10):
                                            echo 'Bronze';
                                            break;
                                        case ($ranking >= 11 && $ranking <= 20):
                                            echo 'Silver';
                                            break;
                                        case ($ranking >= 21 && $ranking <= 30):
                                            echo 'Gold';
                                            break;
                                        case ($ranking >= 31 && $ranking <= 40):
                                            echo 'Diamond';
                                            break;
                                        default:
                                            echo 'Platinum';
                                            break;
                                    }
                                    ?>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fas fa-users fa-2x"></i>
                                <small class="d-block mt-2">Total Sub Agents</small>
                                <h3 class="card-title mt-2">
                                    <?= $ranking ?>
                                </h3>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="bi bi-cash-coin fa-2x"></i>
                                <small class="d-block mt-2">Total Commisions</small>
                                <h3 class="card-title mt-2">
                                    <?= $ranking ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
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