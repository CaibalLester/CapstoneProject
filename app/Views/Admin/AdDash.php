<!doctype html>
<html lang="en">

<?= view('Admin/chop/head') ?>

<body>
    <?= view('Admin/chop/header') ?>
    <div class="container-fluid">
        <div class="row">
            <?= view('Admin/chop/side') ?>
            <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Overview</h1>

                    <small class="text-muted">Hello Thomas, welcome back!</small>
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

                <div class="fixed-button">
                    <button class="btn btn-primary" id="openMessageModal">
                        <i class="fas fa-envelope"></i> <!-- Font Awesome message icon -->
                        <span class="badge bg-danger"></span> <!-- Add the span element with the number 4 -->
                    </button>
                </div>

                <div id="messageModal" class="message-modal col-md-3">
                    <div class="box box-succsses direct-chat direct-chat-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Chat Messages</h3>

                            <div class="box-tools pull-right">
                                <span data-toggle="tooltip" title="" class="badge bg-yellow"
                                    data-original-title="3 New Messages">20</span>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"
                                    onclick="closeMessageModal()">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="direct-chat-messages">
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-left">Timona Siera</span>
                                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                        alt="message user image">
                                    <div class="direct-chat-text">
                                        For what reason would it be advisable for me to think about business
                                        content?
                                    </div>
                                </div>
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://img.icons8.com/office/36/000000/person-female.png"
                                        alt="message user image">
                                    <div class="direct-chat-text">
                                        Thank you for your believe in our supports
                                    </div>
                                </div>

                                <div class="direct-chat-msg">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-left">Timona Siera</span>
                                        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                        alt="message user image">
                                    <div class="direct-chat-text">
                                        For what reason would it be advisable for me to think about business
                                        content?
                                    </div>
                                </div>
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://img.icons8.com/office/36/000000/person-female.png"
                                        alt="message user image">
                                    <div class="direct-chat-text">
                                        I would love to.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" name="message" placeholder="Type Message ..."
                                        class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-warning btn-flat">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>

                    </div>
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