<!doctype html>
<html lang="en">
<?= view('head') ?>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<body>
    <?= view('Agent/chop/header') ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/AgDash">
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
                            <a class="nav-link active" href="/mycommi">
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
                    <h1 class="h2 mb-0">My Commission</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <?php if (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger mt-3 text-center" role="alert">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (session()->getFlashdata('success')): ?>
                                    <div class="alert alert-success mt-3 text-center" role="alert">
                                        <?= session()->getFlashdata('success') ?>
                                    </div>
                                <?php endif; ?>
                                <div class="card">

                                    <div class="table-responsive mx-3">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Client</th>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">Due Dates</th>
                                                    <!-- <th scope="col">Amount</th> -->
                                                    <th scope="col">Commission</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($mycommission as $commi): ?>
                                                    <tr>
                                                        <td><a class="btn btn-info"
                                                                href="/myclientprofile/<?= $commi['client_token']; ?>"><?= $commi['client_name'] ?></a>
                                                        </td>
                                                        <!-- Assuming agent name is retrieved from the join -->
                                                        <td><?= $commi['plan_name'] ?></td>
                                                        <!-- Assuming plan name is retrieved from the join -->
                                                        <td><?= date('M j, Y', strtotime($commi['created_at'])); ?>
                                                        </td>
                                                        <td><?= $commi['mode_payment'] ?></td>
                                                        <!-- <td>₱ <?= number_format($commi['price'], 2, '.', ',') ?></td> -->
                                                        <td>₱ <?= number_format($commi['commission'], 2, '.', ',') ?>
                                                        </td>
                                                        <td style="color: 
                                                                <?php
                                                                switch ($commi['status']) {
                                                                    case 'paid':
                                                                        echo 'green';
                                                                        break;
                                                                    case 'unpaid':
                                                                        echo 'red';
                                                                        break;
                                                                    default:
                                                                        echo 'black'; // Default color if status is not recognized
                                                                }
                                                                ?>
                                                            ">
                                                            <?= $commi['status'] ?>
                                                        </td>
                                                        <?php if ($commi['status'] != 'paid'): ?>
                                                            <td><a href="<?= base_url() ?>upstatusplan/<?= $commi['tokin'] ?>"
                                                                    class="btn btn-info"
                                                                    onclick="return confirm('Are you sure you want to Update?');"><i class="fas fa-check"></i></a></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?= view('js') ?>

</body>

</html>