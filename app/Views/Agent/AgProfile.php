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
                            <a class="nav-link " aria-current="page" href="/AgDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/AgProfile">
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
                    <h1 class="h2 mb-0">Profile</h1>
                </div>

                <div class="row">
                    <!-- left side columns -->
                    <div class="col-xl-3">
                        <div class="row">
                            <div class="card mb-2">
                                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                    <img src="<?= isset($agent['agentprofile']) ? base_url('/uploads/' . $agent['agentprofile']) : '' ?>"
                                        alt="Profile" class="rounded-circle"
                                        style="width: 150px; height: 150px; cursor: pointer;" data-bs-placement="bottom"
                                        title="Click to see QR code">
                                    <h5>
                                        <?= $agent['username'] ?>
                                    </h5>
                                </div>
                            </div>

                            <div class="modal fade" id="profileModal" tabindex="-1">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="text-center">
                                                <div class="qr-code-container mt-3 mb-3" id="qrCodeContainer">
                                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo base_url() ?>register/<?= $agent['AgentCode'] ?>"
                                                        alt="QR Code">
                                                </div>
                                                <button type="button" class="btn btn-dark" id="downloadButton"><i
                                                        class="bi bi-download"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- end of left side -->
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#profile-overview">Overview</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#sub-agents">Sub
                                                Agents</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#forms">My
                                                Forms</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                            <h1 class="h2 mb-0">About</h1>
                                            <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam
                                                maiores cumque temporibus. Tempora libero non est unde veniam est qui
                                                dolor.
                                                Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga
                                                sequi
                                                sed ea saepe at unde.</p>
                                            <h5 class="card-title">Profile Details</h5>
                                            <div class="row mb-2">
                                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                <div class="col-lg-8 col-md-8">
                                                    <?php if (isset($agent['lastname']) && isset($agent['firstname']) && isset($agent['middlename'])): ?>
                                                    <?= $agent['lastname'] ?>,
                                                    <?= $agent['firstname'] ?>
                                                    <?= $agent['middlename'] ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-3 col-md-4 label">Username</div>
                                                <div class="col-lg-8 col-md-8">
                                                    <?php echo isset($agent['username']) ? $agent['username'] : '' ?>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-3 col-md-4 label">Email</div>
                                                <div class="col-lg-8 col-md-8">
                                                    <?php echo isset($agent['email']) ? $agent['email'] : '' ?>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                                <div class="col-lg-8 col-md-8">
                                                    <?php echo isset($agent['number']) ? $agent['number'] : '' ?>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-3 col-md-4 label">Birthday</div>
                                                <div class="col-lg-8 col-md-8">
                                                    <?php echo isset($agent['birthday']) ? date('M j, Y', strtotime($agent['birthday'])) : ''; ?>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-3 col-md-4 label">Adress</div>
                                                <div class="col-lg-8 col-md-8">
                                                    <?= isset($agent['province']) ? $agent['province'] : '' ?>,
                                                    <?= isset($agent['city']) ? $agent['city'] : '' ?>,
                                                    <?= isset($agent['barangay']) ? $agent['barangay'] : '' ?>,
                                                    <?= isset($agent['street']) ? $agent['street'] : '' ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade sub-agents pt-3" id="sub-agents">
                                            <h1 class="h2 mb-2">Sub Agents</h1>
                                            <div class="table-responsive">
                                                <!-- Table with hoverable rows -->
                                                <div class="table-container mx-auto"
                                                    style="max-height: 281px; overflow-y: auto;">
                                                    <table class="table table-hover">
                                                        <thead class="thead-light bg-white">
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($FA as $sub): ?>
                                                            <tr>
                                                                <td>
                                                                    <?php if (isset($sub['lastname']) && isset($sub['firstname']) && isset($sub['middlename'])): ?>
                                                                    <?= $sub['lastname'] ?>,
                                                                    <?= $sub['firstname'] ?>
                                                                    <?= $sub['middlename'] ?>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <?= date('M j, Y', strtotime($sub['created_at'])); ?>
                                                                </td>
                                                                <td><a
                                                                        href="<?= base_url(); ?>subagentprofile/<?= $sub['agent_token']; ?>">profile</a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade pt-3" id="forms">
                                            <h1 class="h2 mb-0">Forms</h1>
                                            <div class="row text-center">
                                                <div class="col-xl-2 my-3">
                                                    <a href="/ViewAppForm/<?= $agent['agent_token'] ?>">
                                                        <img src="<?= base_url(); ?>uploads/folder.png"
                                                            class="card-img-top" alt="Life Changer Form Image">
                                                        LIFE
                                                    </a>
                                                </div>
                                                <div class="col-xl-2 my-3">
                                                    <a href="/ViewAppForm2/<?= $agent['agent_token'] ?>">
                                                        <img src="<?= base_url(); ?>uploads/folder.png"
                                                            class="card-img-top" alt="AIAL">
                                                        AIAL
                                                    </a>
                                                </div>
                                                <div class="col-xl-2 my-3">
                                                    <a href="/ViewAppForm3/<?= $agent['agent_token'] ?>">
                                                        <img src="<?= base_url(); ?>uploads/folder.png"
                                                            class="card-img-top" alt="Life Changer Form Image">
                                                        GLI
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Bordered Tabs -->
                                </div>
                            </div>
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
    <?= view('js') ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const downloadButton = document.getElementById('downloadButton');
        const qrCodeImage = document.querySelector('#qrCodeContainer img');

        downloadButton.addEventListener('click', function() {
            fetch(qrCodeImage.src)
                .then(response => response.blob())
                .then(blob => {
                    const downloadLink = document.createElement('a');
                    downloadLink.href = URL.createObjectURL(blob);
                    downloadLink.download = 'qr-code.png';
                    downloadLink.click();
                });
        });
    });

    // JavaScript code to show the modal when the profile image is clicked
    $(document).ready(function() {
        $('.profile-card img').on('click', function() {
            $('#profileModal').modal('show');
        });
    });

    
    </script>
</body>

</html>