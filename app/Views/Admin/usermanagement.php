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
                                            <div class="col-lg-3 col-md-4 col-9 mb-2">
                                                <form id="filterForm" action="usermanagement" method="post" role="form">
                                                    <div class="input-group">
                                                        <label class="input-group-text" for="filterDropdown"><i
                                                                class="bi bi-funnel"></i></label>
                                                        <select class="form-select" id="filterDropdown"
                                                            name="filterDropdown" onchange="navigateToOption()">
                                                            <option value="">Filters</option>
                                                            <option value="all">All</option>
                                                            <option value="client">Clients</option>
                                                            <option value="agent">Agents</option>
                                                            <option value="applicant">Applicants</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="col-lg-2 col-md-2 col-2">
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                    data-bs-target="#myModal">
                                                    <i class="bi bi-person-plus"></i>
                                                </button>
                                            </div>

                                            <div class="col-lg-7 col-md-8 col-12">
                                                <form class="custom-form search-form" action="usermanagement"
                                                    method="post" role="form">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-8">
                                                            <input class="form-control mb-lg-0 mb-md-0"
                                                                name="searchusers" type="text"
                                                                placeholder="Search by username" aria-label="Search"
                                                                required>
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
                                    <script>
    function navigateToOption() {
        console.log("Dropdown value selected");
        document.getElementById('filterForm').submit();
    }
</script>
                                    <div class="modal fade" id="myModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add new User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Your registration form goes here -->
                                                    <form action="your_registration_controller/your_registration_method"
                                                        method="post">
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">User Name</label>
                                                            <input type="text" class="form-control" id="username"
                                                                name="username" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="role" class="form-label">Role</label>
                                                            <select class="form-select" id="role" name="role" required>
                                                                <option value="admin">Applicant</option>
                                                                <option value="client">Client</option>
                                                                <option value="agent">Agent</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="password"
                                                                name="password" value="defailt123" required>
                                                        </div>

                                                        <!-- Additional form elements go here -->

                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <hr>
                                    <!-- Table with hoverable rows -->
                                    <div class="table-responsive mx-3">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($users as $user): ?>
                                                    <tr>
                                                        <td>
                                                            <?= $user['username'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $user['email'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $user['role'] ?>
                                                        </td>
                                                        <td>
                                                            <?= date('M j, Y', strtotime($user['created_at'])); ?>
                                                        </td>
                                                        <td><a href="<?= $user['token'] ?>" class="btn btn-primary">
                                                                <li class="fas fa-eye"></li>
                                                            </a></td>
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