<!doctype html>
<html lang="en">
<?= view('Admin/chop/head') ?>

<body>
    <?= view('Admin/chop/header') ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                <ul class="nav flex-column h-100">         
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/AdDash">
                                    <i class="bi-house-fill me-2"></i>
                                    Overview
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/ManageAgent">
                                    <i class="bi-person me-2"></i>
                                    Manage Agents
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/ManageApplicant">
                                    <i class="bi-person me-2"></i>
                                    Manage Applicants
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="/AdProfile">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/AdSetting">
                                    <i class="bi-gear me-2"></i>
                                    Settings
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="/AdHelp">
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

                <div class="row my-4">
                    <div class="col-lg-7 col-12">
                        <div class="custom-block custom-block-profile">
                            <div class="row">
                                <div class="col-lg-12 col-12 mb-3">
                                    <h6>General</h6>
                                </div>

                                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block-profile-image-wrap">
                                        <img src="<?= isset($admin['adminProfile']) ? base_url('/uploads/' . $admin['adminProfile']) : 'default_path_here' ?>"
                                        class="custom-block-profile-image img-fluid" alt="">
                                        <!-- <a href="setting.html" class="bi-pencil-square custom-block-edit-icon"></a> -->
                                    </div>
                                </div>

                                <div class="col-lg-9 col-12">
                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>User Name:</strong>

                                        <span>
                                            <?= $admin['username'] ?>
                                        </span>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Full Name:</strong>

                                        <span>
                                            <?= $admin['Adminfullname'] ?>
                                        </span>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Email:</strong>

                                        <a href="#">
                                            <?= $admin['email'] ?>
                                        </a>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Phone:</strong>

                                        <a href="#">
                                            <?= $admin['number'] ?>
                                        </a>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Birthday:</strong>

                                        <span>
                                            <?= date('M j, Y', strtotime($admin['birthday'])); ?>
                                        </span>
                                    </p>

                                    <p class="d-flex flex-wrap">
                                        <strong>Address:</strong>
                                        <span>
                                            <?= $admin['address'] ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="custom-block custom-block-profile bg-white">
                            <h6 class="mb-4">Card Information</h6>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Admin ID:</strong>

                                <span>
                                    <?= $admin['admin_id'] ?>
                                </span>
                            </p>
                            <p class="d-flex flex-wrap mb-2">
                                <strong>Admin Code:</strong>

                                <span>
                                    <?= $admin['adminCode'] ?>
                                </span>
                            </p>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Role:</strong>

                                <span>
                                    <?= $user['role'] ?>
                                </span>
                            </p>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Created:</strong>

                                <span>
                                    <?= date('M j, Y', strtotime($user['created_at'])); ?>
                                </span>
                            </p>

                            <!-- <p class="d-flex flex-wrap mb-2">
                                    <strong>Valid Date:</strong>

                                    <span>July 18, 2032</span>
                                </p> -->
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


    <?= view('Admin/chop/js') ?>
</body>

</html>