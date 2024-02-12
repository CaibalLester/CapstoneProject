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
                    <h1 class="h2 mb-0">Applicant Information</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white">
                            <h5 class="mb-4">Application Details</h5>
                            <!-- Search Bar -->

                            <!-- <div class="input-group mb-3">
                                <input type="text" id="searchInput" class="form-control"
                                    placeholder="Search for Applicant Username" onkeyup="performSearch()">
                            </div> -->

                            <!-- <div class="table-responsive">
                                <table class="account-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Date</th>

                                            <th scope="col" class="text-center">User Name</th>

                                            <th scope="col" class="text-center">Number</th>

                                            <th scope="col" class="text-center">Email</th>

                                            <th scope="col" class="text-center">Status</th>

                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($applicant as $app): ?>
                                            <tr>
                                                <td scope="row" class="text-center">
                                                    <?= date('M j, Y', strtotime($app['created_at'])); ?>
                                                </td>
                                                <td scope="row" class="text-center"><a
                                                        href="/ViewAppForm/<?= $app['applicant_id']; ?>">
                                                        <?= $app['username']; ?>
                                                    </a></td>
                                                <td scope="row" class="text-center">
                                                    <?= $app['number']; ?>
                                                </td>
                                                <td scope="row" class="text-center">
                                                    <?= $app['email']; ?>
                                                </td>
                                                <td scope="row" class="text-center">
                                                    <span class="badge text-bg-danger">
                                                        <?= $app['status']; ?>
                                                    </span>
                                                </td>
                                                <td class="text-center"><a href="#"><i class="fas fa-download"></i></a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div> -->
                            <!-- Pagination Links -->
                            <!-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <?= $pager->links() ?>
                                    </li>
                                </ul>
                            </nav> -->

                            <!-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Prev</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav> -->
                            <div class="custom-block bg-white">

                                <!-- <form action="/userSearch" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" name="filterUser" id="searchInput" class="form-control"
                                            placeholder="Search for Applicant Username">
                                        <input type="submit" value="search" class="btn btn-primary">
                                    </div>
                                </form> -->

                                <form class="custom-form search-form" action="/userSearch" method="post" role="form">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-12">
                                            <input class="form-control mb-lg-0 mb-md-0" name="filterUser" type="text" placeholder="Search for Applicant Username" aria-label="Search">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <button type="submit" class="form-control">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form><br>

                                <div class="row">
                                    <?php foreach ($applicant as $app): ?>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <div
                                                class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                                                <div class="custom-block-profile-image-wrap mb-4">
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

                                                <!-- <div class="text-start">
                                                    <p class="mb-2">
                                                        <strong>Name:</strong>
                                                        <?= $app['username']; ?>
                                                    </p>

                                                    <p class="mb-2">
                                                        <strong>Email:</strong>
                                                        <a href="mailto:<?= $app['email']; ?>">
                                                            <?= $app['email']; ?>
                                                        </a>
                                                    </p>

                                                    <p class="mb-0">
                                                        <strong>Phone:</strong>
                                                        <a href="tel:<?= $app['number']; ?>">
                                                            <?= $app['number']; ?>
                                                        </a>
                                                    </p>
                                                </div> -->
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
    <!-- Add this script at the bottom of your HTML, just before the closing </body> tag -->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchInput = document.getElementById('searchInput');
            const tableRows = document.querySelectorAll('.account-table tbody tr');

            searchInput.addEventListener('input', function () {
                const searchTerm = searchInput.value.trim().toLowerCase();

                tableRows.forEach(function (row) {
                    const usernameCell = row.querySelector('td:nth-child(2)');
                    const username = usernameCell.textContent.trim().toLowerCase();

                    if (username.includes(searchTerm)) {
                        row.style.display = '';  // Show the row
                    } else {
                        row.style.display = 'none';  // Hide the row
                    }
                });
            });
        });
    </script> -->

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchInput = document.getElementById('searchInput');
            const profileBlocks = document.querySelectorAll('.custom-block-profile');

            searchInput.addEventListener('input', function () {
                const searchTerm = searchInput.value.trim().toLowerCase();

                profileBlocks.forEach(function (profileBlock) {
                    const usernameElement = profileBlock.querySelector('p:nth-child(1)');
                    const username = usernameElement.textContent.trim().toLowerCase();

                    if (username.includes(searchTerm)) {
                        profileBlock.style.display = '';  // Show the block
                    } else {
                        profileBlock.style.display = 'none';  // Hide the block
                    }
                });
            });
        });
    </script> -->


    <?= view('Admin/chop/js') ?>
</body>

</html>