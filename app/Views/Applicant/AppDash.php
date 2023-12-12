<!doctype html>
<html lang="en">
    
<?= view('Applicant/chop/head'); ?>
    <body>
    <?= view('Applicant/chop/header'); ?>

        <div class="container-fluid">
            <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                    <div class="position-sticky py-4 px-3 sidebar-sticky">
                        <ul class="nav flex-column h-100">
                            
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/AppDash">
                                    <i class="bi-house-fill me-2"></i>
                                    Overview
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#manageDropdown" aria-expanded="false">
                                    <i class="bi-book me-2"></i>
                                    Forms
                                </a>
                                <div class="collapse" id="manageDropdown">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <span><a class="nav-link" href="/AppForm1">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">LIFE CHANGER</span>
                                            </a></span><br>
                                            <a class="nav-link" href="/AppForm2">
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
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="/AppForm1">
                                <i class="bi-book me-2"></i>
                                   Applicantion Form
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
                        <h1 class="h2 mb-0">Overview</h1>

                        <small class="text-muted">Hello  <a href="#"><?= $user['username'] ?></a>, welcome back!</small>
                    </div>

                    <div class="row my-4">
                        
                        <div class="col-lg-5 col-12">
                            <div class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                                <div class="custom-block-profile-image-wrap mb-4">
                                    <img src="<?= isset($applicant['profile']) ? base_url('/uploads/' . $applicant['profile']) : 'default_path_here' ?>" class="custom-block-profile-image img-fluid" alt="">

                                    <a href="/AppSetting" class="bi-pencil-square custom-block-edit-icon"></a>
                                </div>

                                <p class="d-flex flex-wrap mb-2">
                                    <strong>Name:</strong>

                                    <a href="#">
                                    <?= $user['username'] ?>
                                    </a>
                                </p>

                                <p class="d-flex flex-wrap mb-2">
                                    <strong>Email:</strong>
                                    
                                    <a href="#">
                                    <?= $user['email'] ?>
                                    </a>
                                </p>

                                <p class="d-flex flex-wrap mb-0">
                                    <strong>Phone:</strong>

                                    <a href="#">
                                    <?= $applicant['number'] ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                        <div class="custom-block primary-bg">
                                <h5 class="text-white mb-4">Your Status:</h5>
                                <h6 class="text-white mb-4"> <?= $user['role'] ?></h6>
                                <h6 class="text-white mb-4"> <?= $user['status'] ?></h6>
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
        <?= view('Applicant/chop/js'); ?>
    </body>
</html>