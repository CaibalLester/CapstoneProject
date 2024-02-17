<!doctype html>
<html lang="en">
<?= view('Agent/chop/head') ?>
    
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
                                <a class="nav-link active" href="/AgProfile">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/subagent">
                                    <i class="bi-person me-2"></i>
                                    Sub Agents
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

                    <div class="row my-4">
                    <div class="col-lg-7 col-12">
                        <div class="custom-block custom-block-profile">
                            <div class="row">
                                <div class="col-lg-12 col-12 mb-3">
                                    <h6>General</h6>
                                </div>

                                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block-profile-image-wrap">
                                        <img src="<?= isset($agent['agentprofile']) ? base_url('/uploads/' . $agent['agentprofile']) : 'default_path_here' ?>"
                                            class="profile-image img-fluid" alt="">
                                        <!-- <a href="setting.html" class="bi-pencil-square custom-block-edit-icon"></a> -->
                                    </div>
                                </div>

                                <div class="col-lg-9 col-12">
                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>User Name:</strong>

                                        <span>
                                            <?= $agent['username'] ?>
                                        </span>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Full Name:</strong>

                                        <span>
                                            <?= $agent['Agentfullname'] ?>
                                        </span>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Email:</strong>

                                        <a href="#">
                                            <?= $agent['email'] ?>
                                        </a>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Phone:</strong>

                                        <a href="#">
                                        <?= $agent['number'] ?>
                                        </a>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Birthday:</strong>

                                        <span><?= date('M j, Y', strtotime($agent['birthday'])); ?></span>
                                    </p>

                                    <p class="d-flex flex-wrap">
                                        <strong>Address:</strong>

                                        <span><?= $agent['address'] ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="custom-block custom-block-profile bg-white">
                            <h6 class="mb-4">Card Information</h6>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Agent ID:</strong>

                                <span>
                                    <?= $agent['agent_id'] ?>
                                </span>
                            </p>
                            <p class="d-flex flex-wrap mb-2">
                                <strong>Agent Code:</strong>

                                <span>
                                    <?= $agent['AgentCode'] ?>
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
        </div></div>

        <!-- JAVASCRIPT FILES -->
        <?= view('Agent/chop/js') ?>

    </body>
</html>