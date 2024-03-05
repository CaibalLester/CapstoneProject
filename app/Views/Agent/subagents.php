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
                                <a class="nav-link" href="/AgProfile">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="/subagent">
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
                    <h1 class="h2 mb-0">Sub Agents</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white">

                            <div class="custom-block bg-white">
                            <form class="custom-form search-form" action="/subagentSearch" method="post" role="form">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-8 col-12">
                                            <input class="form-control mb-lg-0 mb-md-0" name="filterAgent" type="text"
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
                                    <?php foreach ($agent as $ag): ?>
                                        <div class="col-lg-2 col-12 mb-3">
                                            <div
                                                class="custom-block-profile-front text-center p-4">
                                                <div class="custom-block-profile-image-wrap mb-4">
                                                    <a href="/agentprofile/<?= $ag['agent_token']; ?>">
                                                        <img src="<?= isset($ag['agentprofile']) ? base_url('/uploads/' . $ag['agentprofile']) : 'default_path_here' ?>"
                                                            class="img-fluid" alt=""></a>
                                                </div>
                                                <strong>
                                                    <?= $ag['username']; ?>
                                                </strong>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?= $pager->links('group1', 'page') ?>
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
    <?= view('Agent/chop/js') ?>
</body>

</html>