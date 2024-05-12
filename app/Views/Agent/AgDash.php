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
                            <a class="nav-link" href="/clients">
                                <i class="bi-person me-2"></i>
                                Clients
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/agentsched">
                                <i class="bi bi-check-lg me-2"></i>
                                Schedule
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/cliSched">
                                <i class="bi bi-check-lg me-2"></i>
                                Transactions
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="/mycommi">
                                <i class="bi bi-wallet2 me-2"></i>
                                My Commission
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
                            <div id="barChart"></div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                fetch('/getMonthlyCommissions')
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.length === 0) {
                                            document.querySelector("#barChart").innerHTML = '<div style="text-align: center; padding: 20px;">No Commissions yet</div>';
                                        } else {
                                            const months = data.map(item => getMonthName(item.month));
                                            const commissions = data.map(item => item.total_commission);

                                            new ApexCharts(document.querySelector("#barChart"), {
                                                series: [{
                                                    data: commissions
                                                }],
                                                chart: {
                                                    type: 'bar',
                                                    height: 300
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
                                                    categories: months
                                                },
                                                title: {
                                                    text: 'Monthly Commissions',
                                                    // align: 'center',
                                                }
                                            }).render();
                                        }
                                    });
                            });

                            function getMonthName(monthNumber) {
                                const months = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
                                return months[monthNumber - 1];
                            }
                        </script>

                        <div class="custom-block bg-white">
                            <div id="yearlyComm"></div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                fetch('/getYearlyCommissions')
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.length === 0) {
                                            document.querySelector("#yearlyComm").innerHTML = '<div style="text-align: center; padding: 20px;">No Commissions yet</div>';
                                        } else {
                                            const years = data.map(item => item.year);
                                            const commissions = data.map(item => item.total_commission);

                                            new ApexCharts(document.querySelector("#yearlyComm"), {
                                                series: [{
                                                    data: commissions
                                                }],
                                                chart: {
                                                    type: 'bar',
                                                    height: 300
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        borderRadius: 4,
                                                        // horizontal: true,
                                                        horizontal: false,
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: true
                                                },
                                                xaxis: {
                                                    categories: years
                                                },
                                                title: {
                                                    text: 'Yearly Commissions',
                                                    // align: 'center',
                                                }
                                            }).render();
                                        }
                                    });
                            });
                        </script>
                        
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
                                <small class="d-block mt-2" style="font-size: 14px;">Total Commissions</small>
                                <h3 class="card-title mt-2" style="font-size: 19px;">
                                    ₱ <?= number_format($totalcommi, 2, '.', ',') ?>
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