<!doctype html>
<html lang="en">
<?= view('head') ?>

<body>
    <?= view('Applicant/chop/header') ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/AppDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#" data-bs-toggle="collapse" data-bs-target="#manageDropdown"
                                aria-expanded="false">
                                <i class="bi-book me-2"></i>
                                Forms
                            </a>
                            <div class="collapse" id="manageDropdown">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <span><a class="nav-link " href="/AppForm1">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">LIFE CHANGER</span>
                                            </a></span><br>
                                        <a class="nav-link " href="/AppForm2">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">AIAL</span>
                                        </a><br>
                                        <a class="nav-link" href="/AppForm3">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">GROUP LIFE INSURANCE</span>
                                        </a><br>
                                        <a class="nav-link" href="/AppForm4">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">AFFIDAVIT OF NON-FILING</span>
                                        </a><br>
                                        <a class="nav-link" href="/AppForm5">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">STATEMENT OF UNDERTAKING</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/FA">
                                <i class="bi-person me-2"></i>
                                Agents
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/AppProfile">
                                <i class="bi-person me-2"></i>
                                Profile
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/AppSetting">
                                <i class="bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AppHelp">
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
                    <h1 class="h2 mb-0">Agent Information</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white">


                            <form class="custom-form search-form" action="/FA" method="post" role="form">
                                <div class="row">
                                    <div class="col-lg-4 col-8">
                                        <input class="form-control mb-lg-0 mb-md-0" name="filterAgent" type="text"
                                            placeholder="Search" aria-label="Search" required>
                                    </div>
                                    <div class="col-lg-1 col-4">
                                        <button type="submit" class="form-control">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <hr>

                            <div class="row row-cols-3">
                                <?php foreach ($agents as $ag): ?>
                                    <div class="col-lg-2 col-md-4 mb-3">
                                        <div class="custom-block-profile-front text-center">
                                            <div class="custom-block-profile-image-wrap mb-1">
                                                <a href="http://" data-bs-toggle="modal"
                                                    data-bs-target="#verticalycentered<?= $ag['agent_id']; ?>">
                                                    <img src="<?= isset($ag['agentprofile']) ? base_url('/uploads/' . $ag['agentprofile']) : '' ?>"
                                                        class="img-fluid" alt="" style="height: 100px; width: auto"></a>
                                            </div>
                                            <strong>
                                                <?= $ag['username']; ?>
                                            </strong>
                                        </div>
                                    </div>
                                    <!-- Modal for each agent -->
                                    <div class="modal fade" id="verticalycentered<?= $ag['agent_id']; ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">
                                                        <?= $ag['Agentfullname']; ?>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <img src="<?= isset($ag['agentprofile']) ? base_url('/uploads/' . $ag['agentprofile']) : 'default_path_here' ?>"
                                                            class="img-fluid" alt="Agent Image">
                                                    </div>
                                                    <br>
                                                    <p><strong>User Name:</strong>
                                                        <?= $ag['username']; ?>
                                                    </p>
                                                    <p><strong>Email:</strong>
                                                        <?= $ag['email']; ?>
                                                    </p>
                                                    <p><strong>Phone:</strong>
                                                        <?= $ag['number']; ?>
                                                    </p>
                                                    <p><strong>Rank:</strong>
                                                        <?= $ag['rank']; ?>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <a href="" class="btn btn-primary">
                                                            <i class="bi bi-envelope-fill"></i> Contact
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Modal -->
                                <?php endforeach; ?>
                            </div>
                            <?= $pager->links('group1', 'page') ?>
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

    <?= view('js') ?>
</body>

</html>