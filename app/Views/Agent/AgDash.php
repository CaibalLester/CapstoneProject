<!doctype html>
<html lang="en">
<?= view('head') ?>

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
                            <a class="nav-link" href="/agentsched">
                                <i class="bi bi-check-lg me-2"></i>
                                Schedule
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
                    <div class="col-lg-9">
                        <div class="custom-block bg-white">
                            <div id="chart"></div>
                        </div>

                        <div class="custom-block bg-white">
                            <div id="barChart"></div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#barChart"), {
                                    series: [{
                                        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350
                                    },
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 4,
                                            horizontal: true,
                                        }
                                    },
                                    dataLabels: {
                                        enabled: true
                                    },
                                    xaxis: {
                                        categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
                                            'United States', 'China', 'Germany'
                                        ],
                                    }
                                }).render();
                            });
                        </script>


                        <div class="card">
                            <div class="card-body">
                            <div id="areaChart"></div>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                const series = {
                                    "monthDataSeries1": {
                                        "prices": [
                                            8107.85,
                                            8128.0,
                                            8122.9,
                                            8165.5,
                                            8340.7,
                                            8423.7,
                                            8423.5,
                                            8514.3,
                                            8481.85,
                                            8487.7,
                                            8506.9,
                                            8626.2,
                                            8668.95,
                                            8602.3,
                                            8607.55,
                                            8512.9,
                                            8496.25,
                                            8600.65,
                                            8881.1,
                                            9340.85
                                        ],
                                        "dates": [
                                            "13 Nov 2017",
                                            "14 Nov 2017",
                                            "15 Nov 2017",
                                            "16 Nov 2017",
                                            "17 Nov 2017",
                                            "20 Nov 2017",
                                            "21 Nov 2017",
                                            "22 Nov 2017",
                                            "23 Nov 2017",
                                            "24 Nov 2017",
                                            "27 Nov 2017",
                                            "28 Nov 2017",
                                            "29 Nov 2017",
                                            "30 Nov 2017",
                                            "01 Dec 2017",
                                            "04 Dec 2017",
                                            "05 Dec 2017",
                                            "06 Dec 2017",
                                            "07 Dec 2017",
                                            "08 Dec 2017"
                                        ]
                                    },
                                    "monthDataSeries2": {
                                        "prices": [
                                            8423.7,
                                            8423.5,
                                            8514.3,
                                            8481.85,
                                            8487.7,
                                            8506.9,
                                            8626.2,
                                            8668.95,
                                            8602.3,
                                            8607.55,
                                            8512.9,
                                            8496.25,
                                            8600.65,
                                            8881.1,
                                            9040.85,
                                            8340.7,
                                            8165.5,
                                            8122.9,
                                            8107.85,
                                            8128.0
                                        ],
                                        "dates": [
                                            "13 Nov 2017",
                                            "14 Nov 2017",
                                            "15 Nov 2017",
                                            "16 Nov 2017",
                                            "17 Nov 2017",
                                            "20 Nov 2017",
                                            "21 Nov 2017",
                                            "22 Nov 2017",
                                            "23 Nov 2017",
                                            "24 Nov 2017",
                                            "27 Nov 2017",
                                            "28 Nov 2017",
                                            "29 Nov 2017",
                                            "30 Nov 2017",
                                            "01 Dec 2017",
                                            "04 Dec 2017",
                                            "05 Dec 2017",
                                            "06 Dec 2017",
                                            "07 Dec 2017",
                                            "08 Dec 2017"
                                        ]
                                    },
                                    "monthDataSeries3": {
                                        "prices": [
                                            7114.25,
                                            7126.6,
                                            7116.95,
                                            7203.7,
                                            7233.75,
                                            7451.0,
                                            7381.15,
                                            7348.95,
                                            7347.75,
                                            7311.25,
                                            7266.4,
                                            7253.25,
                                            7215.45,
                                            7266.35,
                                            7315.25,
                                            7237.2,
                                            7191.4,
                                            7238.95,
                                            7222.6,
                                            7217.9,
                                            7359.3,
                                            7371.55,
                                            7371.15,
                                            7469.2,
                                            7429.25,
                                            7434.65,
                                            7451.1,
                                            7475.25,
                                            7566.25,
                                            7556.8,
                                            7525.55,
                                            7555.45,
                                            7560.9,
                                            7490.7,
                                            7527.6,
                                            7551.9,
                                            7514.85,
                                            7577.95,
                                            7592.3,
                                            7621.95,
                                            7707.95,
                                            7859.1,
                                            7815.7,
                                            7739.0,
                                            7778.7,
                                            7839.45,
                                            7756.45,
                                            7669.2,
                                            7580.45,
                                            7452.85,
                                            7617.25,
                                            7701.6,
                                            7606.8,
                                            7620.05,
                                            7513.85,
                                            7498.45,
                                            7575.45,
                                            7601.95,
                                            7589.1,
                                            7525.85,
                                            7569.5,
                                            7702.5,
                                            7812.7,
                                            7803.75,
                                            7816.3,
                                            7851.15,
                                            7912.2,
                                            7972.8,
                                            8145.0,
                                            8161.1,
                                            8121.05,
                                            8071.25,
                                            8088.2,
                                            8154.45,
                                            8148.3,
                                            8122.05,
                                            8132.65,
                                            8074.55,
                                            7952.8,
                                            7885.55,
                                            7733.9,
                                            7897.15,
                                            7973.15,
                                            7888.5,
                                            7842.8,
                                            7838.4,
                                            7909.85,
                                            7892.75,
                                            7897.75,
                                            7820.05,
                                            7904.4,
                                            7872.2,
                                            7847.5,
                                            7849.55,
                                            7789.6,
                                            7736.35,
                                            7819.4,
                                            7875.35,
                                            7871.8,
                                            8076.5,
                                            8114.8,
                                            8193.55,
                                            8217.1,
                                            8235.05,
                                            8215.3,
                                            8216.4,
                                            8301.55,
                                            8235.25,
                                            8229.75,
                                            8201.95,
                                            8164.95,
                                            8107.85,
                                            8128.0,
                                            8122.9,
                                            8165.5,
                                            8340.7,
                                            8423.7,
                                            8423.5,
                                            8514.3,
                                            8481.85,
                                            8487.7,
                                            8506.9,
                                            8626.2
                                        ],
                                        "dates": [
                                            "02 Jun 2017",
                                            "05 Jun 2017",
                                            "06 Jun 2017",
                                            "07 Jun 2017",
                                            "08 Jun 2017",
                                            "09 Jun 2017",
                                            "12 Jun 2017",
                                            "13 Jun 2017",
                                            "14 Jun 2017",
                                            "15 Jun 2017",
                                            "16 Jun 2017",
                                            "19 Jun 2017",
                                            "20 Jun 2017",
                                            "21 Jun 2017",
                                            "22 Jun 2017",
                                            "23 Jun 2017",
                                            "27 Jun 2017",
                                            "28 Jun 2017",
                                            "29 Jun 2017",
                                            "30 Jun 2017",
                                            "03 Jul 2017",
                                            "04 Jul 2017",
                                            "05 Jul 2017",
                                            "06 Jul 2017",
                                            "07 Jul 2017",
                                            "10 Jul 2017",
                                            "11 Jul 2017",
                                            "12 Jul 2017",
                                            "13 Jul 2017",
                                            "14 Jul 2017",
                                            "17 Jul 2017",
                                            "18 Jul 2017",
                                            "19 Jul 2017",
                                            "20 Jul 2017",
                                            "21 Jul 2017",
                                            "24 Jul 2017",
                                            "25 Jul 2017",
                                            "26 Jul 2017",
                                            "27 Jul 2017",
                                            "28 Jul 2017",
                                            "31 Jul 2017",
                                            "01 Aug 2017",
                                            "02 Aug 2017",
                                            "03 Aug 2017",
                                            "04 Aug 2017",
                                            "07 Aug 2017",
                                            "08 Aug 2017",
                                            "09 Aug 2017",
                                            "10 Aug 2017",
                                            "11 Aug 2017",
                                            "14 Aug 2017",
                                            "16 Aug 2017",
                                            "17 Aug 2017",
                                            "18 Aug 2017",
                                            "21 Aug 2017",
                                            "22 Aug 2017",
                                            "23 Aug 2017",
                                            "24 Aug 2017",
                                            "28 Aug 2017",
                                            "29 Aug 2017",
                                            "30 Aug 2017",
                                            "31 Aug 2017",
                                            "01 Sep 2017",
                                            "04 Sep 2017",
                                            "05 Sep 2017",
                                            "06 Sep 2017",
                                            "07 Sep 2017",
                                            "08 Sep 2017",
                                            "11 Sep 2017",
                                            "12 Sep 2017",
                                            "13 Sep 2017",
                                            "14 Sep 2017",
                                            "15 Sep 2017",
                                            "18 Sep 2017",
                                            "19 Sep 2017",
                                            "20 Sep 2017",
                                            "21 Sep 2017",
                                            "22 Sep 2017",
                                            "25 Sep 2017",
                                            "26 Sep 2017",
                                            "27 Sep 2017",
                                            "28 Sep 2017",
                                            "29 Sep 2017",
                                            "03 Oct 2017",
                                            "04 Oct 2017",
                                            "05 Oct 2017",
                                            "06 Oct 2017",
                                            "09 Oct 2017",
                                            "10 Oct 2017",
                                            "11 Oct 2017",
                                            "12 Oct 2017",
                                            "13 Oct 2017",
                                            "16 Oct 2017",
                                            "17 Oct 2017",
                                            "18 Oct 2017",
                                            "19 Oct 2017",
                                            "23 Oct 2017",
                                            "24 Oct 2017",
                                            "25 Oct 2017",
                                            "26 Oct 2017",
                                            "27 Oct 2017",
                                            "30 Oct 2017",
                                            "31 Oct 2017",
                                            "01 Nov 2017",
                                            "02 Nov 2017",
                                            "03 Nov 2017",
                                            "06 Nov 2017",
                                            "07 Nov 2017",
                                            "08 Nov 2017",
                                            "09 Nov 2017",
                                            "10 Nov 2017",
                                            "13 Nov 2017",
                                            "14 Nov 2017",
                                            "15 Nov 2017",
                                            "16 Nov 2017",
                                            "17 Nov 2017",
                                            "20 Nov 2017",
                                            "21 Nov 2017",
                                            "22 Nov 2017",
                                            "23 Nov 2017",
                                            "24 Nov 2017",
                                            "27 Nov 2017",
                                            "28 Nov 2017"
                                        ]
                                    }
                                }
                                new ApexCharts(document.querySelector("#areaChart"), {
                                    series: [{
                                        name: "STOCK ABC",
                                        data: series.monthDataSeries1.prices
                                    }],
                                    chart: {
                                        type: 'area',
                                        height: 350,
                                        zoom: {
                                            enabled: false
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        curve: 'straight'
                                    },
                                    subtitle: {
                                        text: 'Price Movements',
                                        align: 'left'
                                    },
                                    labels: series.monthDataSeries1.dates,
                                    xaxis: {
                                        type: 'datetime',
                                    },
                                    yaxis: {
                                        opposite: true
                                    },
                                    legend: {
                                        horizontalAlign: 'left'
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Area Chart -->

                    </div>

                    <!-- end of left side -->

                    <!-- right side columns -->
                    <div class="col-lg-3">
                        <div class="card mb-2">
                            <div class="card-body d-flex flex-column align-items-center">
                                <!-- Set max-width and max-height to constrain the image within the card body -->
                                <div class="image-container"
                                    style="position: relative; max-width: 100%; max-height: 100%; overflow: hidden;">
                                    <?php
                                    $imageSrc = '/req/rank/bronze.png'; // Default image source
                                    switch ($ranking) {
                                        case ($ranking >= 1 && $ranking <= 10):
                                            $imageSrc = '/req/rank/bronze.png';
                                            break;
                                        case ($ranking >= 11 && $ranking <= 20):
                                            $imageSrc = '/req/rank/silver.png';
                                            break;
                                        case ($ranking >= 21 && $ranking <= 30):
                                            $imageSrc = '/req/rank/gold.png';
                                            break;
                                        case ($ranking >= 31 && $ranking <= 40):
                                            $imageSrc = '/req/rank/diamond.png';
                                            break;
                                        default:
                                            $imageSrc = '/req/rank/platinum.png';
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
                            <div class="card">
                                <!-- The hidden input field -->
                                <input type="text" value="<?php echo base_url() ?>register/<?= $agent['AgentCode'] ?>"
                                    id="myInput" style="display: none;">

                                <!-- The clipboard icon button with tooltip -->
                                <button class="btn btn-secondary btn-sm" onclick="copyToClipboard()"
                                    data-toggle="tooltip" data-placement="top" title="Copy Verification Code">
                                    <i class="bi bi-clipboard"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card mb-2">
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
    <?= view('js') ?>

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
                height: 200
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

    <script>
        function copyToClipboard() {
            var input = document.getElementById('myInput');
            input.style.display = 'block'; // Make input visible temporarily
            input.select();
            document.execCommand('copy');
            input.style.display = 'none'; // Hide input again after copying
            alert('Text copied to clipboard: ' + input.value);
        }
    </script>

</body>

</html>