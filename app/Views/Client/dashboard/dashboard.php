<!DOCTYPE html>
<html lang="en">
<?= view('/Home/chop/head'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

<body>
    <?= view('/client/dashboard/topside'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <!-- Left side columns -->
                                <div class="col-lg-8">
                                    <div class="row">
                                        <!-- Policy Information -->
                                        <div class="col-lg-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Policy Information</h5>
                                                    <p class="card-text">Policy Number:
                                                        <?= isset ($client['applicationNo']) ? $client['applicationNo'] : '' ?>
                                                    </p>
                                                    <p class="card-text">Coverage: Comprehensive</p>
                                                    <a href="#" class="btn btn-primary">View Policy Details</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Claims Management -->
                                        <div class="col-lg-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Claims Management</h5>
                                                    <p class="card-text">Total Claims: 5</p>
                                                    <p class="card-text">Last Claim Status: In Progress</p>
                                                    <a href="#" class="btn btn-primary">View Claims</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Billing and Payment History -->
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Billing and Payment History</h5>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Description</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>2024-04-15</td>
                                                                <td>Payment Received</td>
                                                                <td>$100.00</td>
                                                            </tr>
                                                            <!-- More payment history rows here -->
                                                        </tbody>
                                                    </table>
                                                    <a href="#" class="btn btn-primary">View Payment History</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Left side columns -->

                                <!-- Right side column -->
                                <div class="col-lg-4">
                                    <!-- Contact Information -->
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title">Contact Information</h5>
                                            <p class="card-text">Phone:
                                                <?php echo isset($client['number']) ? $client['number'] : '' ?></p>
                                            <p class="card-text">Email:
                                                <?php echo isset($client['email']) ? $client['email'] : '' ?></p>
                                            <p class="card-text">Address:
                                                <?= isset($client['province']) ? $client['province'] : '' ?>,
                                                <?= isset($client['city']) ? $client['city'] : '' ?>,
                                                <?= isset($client['barangay']) ? $client['barangay'] : '' ?>,
                                                <?= isset($client['street']) ? $client['street'] : '' ?></p>
                                            <a href="/clientprofile" class="btn btn-primary">Update Contact Info</a>
                                        </div>
                                    </div>

                                    <!-- FAQs and Help Center -->
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">FAQs and Help Center</h5>
                                            <p class="card-text">Find answers to common questions.</p>
                                            <a href="#" class="btn btn-primary">Go to Help Center</a>
                                        </div>
                                    </div>
                                </div><!-- End Right side column -->
                            </div><!-- End row -->
                        </div><!-- End container -->
                    </div>
                </div><!-- End Left side columns -->
                <!-- Right side columns -->
                <div class="col-lg-4">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Insurance Claims Chart</h5>
                                <canvas id="claimsChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Insurance Premiums Chart</h5>
                                <canvas id="premiumsChart"></canvas>
                            </div>
                        </div>
                    </div>

                </div><!-- End Right side columns -->
            </div>

        </section>

    </main><!-- End #main -->
    <script>
    var ctx = document.getElementById('premiumsChart').getContext('2d');
    var premiumsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Premiums',
                data: [1000, 1200, 1100, 1300, 1250, 1400],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <script>
    var ctx = document.getElementById('claimsChart').getContext('2d');
    var claimsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Number of Claims',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

</body>
<?= view('/Home/chop/jsh'); ?>