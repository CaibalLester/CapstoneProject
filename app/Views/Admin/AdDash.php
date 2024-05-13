<!doctype html>
<html lang="en">

<?= view('head') ?>

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
                            <a class="nav-link " aria-current="page" href="/sched">
                                <i class="bi bi-check-lg me-2"></i>
                                Schedule
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
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="/plans">
                                <i class="bi bi-hospital me-2"></i>
                                Plans
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

                            <div class="col-lg-12 col-12">
                                <div class="custom-block bg-white">
                                    <div id="agentChart"></div>
                                </div>
                                <div class="custom-block bg-white">
                                    <div id="ApplicantChart"></div>
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
                                            <img src="<?= isset($topagent['agentprofile']) ? base_url('/uploads/' . $topagent['agentprofile']) : '' ?>"
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
                                <div class="card mb-3 text-center">
                                    <h6 class="card-title mt-3">Top 3 Commissionies</>
                                    <?php foreach ($top as $topagent): ?>
                                        <div class="card-body">
                                            <img src="<?= isset($topagent['agentprofile']) ? base_url('/uploads/' . $topagent['agentprofile']) : '' ?>"
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
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?= view('js'); ?>
    <?= view('Charts/visuals') ?>
</body>

</html>