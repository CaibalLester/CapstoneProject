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
                            <a class="nav-link" aria-current="page" href="/AdDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/usermanagement">
                                <i class="fa fa-user me-2"></i>
                                User Management
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
                            <a class="nav-link" href="/AdProfile">
                                <i class="fa fa-user me-2"></i>
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
                            <a class="nav-link" href="/AdHelp">
                                <i class="fas fa-hands-helping me-2"></i>
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
                    <h1 class="h2 mb-0">Account Management</h1>

                    <small class="text-muted">Welcome back!
                        <?= $admin['username'] ?>
                    </small>
                </div>

                <div class="row">
                    <!-- left side columns -->
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Table Applicants -->
                            <div class="col-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-12 mb-2">
                                                <div class="input-group">
                                                    <label class="input-group-text" for="filterDropdown"><i
                                                            class="bi bi-funnel"></i></label>
                                                    <select class="form-select" id="filterDropdown"
                                                        name="filterDropdown" onchange="navigateToOption()">
                                                        <option value="usermanagement">All</option>
                                                        <option value="clients">Clients</option>
                                                        <option value="agents">Agents</option>
                                                        <option value="applicants">Applicants</option>
                                                        <option value="users">Users</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- <script>
                                                function navigateToOption() {
                                                    var link = document.getElementById('filterDropdown').value;

                                                    // You can customize the URL structure based on your needs
                                                    var url = 'http://localhost:8080/' + link;

                                                    // Navigate to the selected option's URL
                                                    window.location.href = url;
                                                }
                                            </script> -->

                                            <div class="col-lg-9 col-md-12 col-12">
                                                <form class="custom-form search-form" action="#" method="post"
                                                    role="form">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-8">
                                                            <input class="form-control mb-lg-0 mb-md-0"
                                                                name="filterAgent" type="text" placeholder="Search"
                                                                aria-label="Search" required>
                                                        </div>

                                                        <div class="col-lg-2 col-4">
                                                            <button type="submit" class="form-control">
                                                                <i class="bi bi-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>


                                    <hr>
                                    <!-- Table with hoverable rows -->
                                    <div class="table-responsive mx-3">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($users as $user): ?>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td><?= $user['username'] ?></td>
                                                    <td><?= $user['email'] ?></td>
                                                    <td><?= $user['role'] ?></td>
                                                    <td><?= date('M j, Y', strtotime($user['created_at'])); ?></td>
                                                    <td><a href="<?= $user['token'] ?>" class="btn btn-primary"><li class="fas fa-eye"></li></a></td>
                                                </tr>
                                                <?php endforeach; ?>
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


                <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                        </div>
                    </div>
                </footer>

            </main>
        </div>
    </div>

    <?= view('Admin/chop/js'); ?>

</body>

</html>