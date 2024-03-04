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
                                <a class="nav-link active" aria-current="page" href="/ManageApplicant">
                                    <i class="bi-person me-2"></i>
                                    Manage Applicants
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/AdProfile">
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
                    <h1 class="h2 mb-0">ALLIANZ PNB APPLICANTS</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white">
                            
                            <div class="custom-block bg-white">
                                <form class="custom-form search-form" action="/userSearch" method="post" role="form">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-8 col-12">
                                            <input class="form-control mb-lg-0 mb-md-0" name="filterUser" type="text"
                                                placeholder="Search" aria-label="Search" required>
                                        </div>
                                        <div class="col-lg-1 col-md-3 col-12">
                                            <button type="submit" class="form-control">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="row">
                                    <?php foreach ($applicant as $app): ?>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <div
                                                class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                                                <div class="custom-block-profile-image-wrap mb-4">
                                                <!-- //Change this to token -->
                                                    <a href="/ViewAppForm/<?= $app['applicant_id']; ?>">
                                                        <img src="<?= isset($app['profile']) ? base_url('/uploads/' . $app['profile']) : 'default_path_here' ?>"
                                                        class="custom-block-profile-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <strong class="mb-3">
                                                    <?= $app['username']; ?>
                                                </strong>
                                                <strong class="mb-2">
                                                    <?= $app['email']; ?>
                                                </strong>
                                                <strong class="mb-2">
                                                    <?= $app['number']; ?>
                                                </strong>

                                                
                                            </div>
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

    <?= view('Admin/chop/js') ?>
</body>

</html>