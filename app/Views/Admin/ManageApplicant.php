<!doctype html>
<html lang="en">

<?= view('Admin/chop/head') ?>

<body>
    <?= view('Admin/chop/header') ?>

    <div class="container-fluid">
        <div class="row">
            <?= view('Admin/chop/side') ?>

            <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Applicant Information</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white">
                            <h5 class="mb-4">Application Details</h5>
                            <!-- Search Bar -->

                            <div class="input-group mb-3">
                                <input type="text" id="searchInput" class="form-control"
                                    placeholder="Search for Applicant Username" onkeyup="performSearch()">
                            </div>

                            <div class="table-responsive">
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
                                                <td scope="row" class="text-center"><a href="/ViewAppForm/<?= $app['applicant_id']; ?>">
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
                                                        Pending
                                                    </span>
                                                </td>
                                                <td class="text-center"><a href="#"><i class="fas fa-download"></i></a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination Links -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <?= $pager->links() ?>
                                    </li>
                                </ul>
                            </nav>


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
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div class="custom-block custom-block-balance">
                            <small>Your Balance</small>

                            <h2 class="mt-2 mb-3">$254,800</h2>

                            <div class="custom-block-numbers d-flex align-items-center">
                                <span>****</span>
                                <span>****</span>
                                <span>****</span>
                                <p>2560</p>
                            </div>

                            <div class="d-flex">
                                <div>
                                    <small>Valid Date</small>
                                    <p>12/2028</p>
                                </div>

                                <div class="ms-auto">
                                    <small>Card Holder</small>
                                    <p>Thomas</p>
                                </div>
                            </div>
                        </div>

                        <div class="custom-block custom-block-bottom d-flex flex-wrap">
                            <div class="custom-block-bottom-item">
                                <a href="#" class="d-flex flex-column">
                                    <i class="custom-block-icon bi-wallet"></i>

                                    <small>Top up</small>
                                </a>
                            </div>

                            <div class="custom-block-bottom-item">
                                <a href="#" class="d-flex flex-column">
                                    <i class="custom-block-icon bi-upc-scan"></i>

                                    <small>Scan & Pay</small>
                                </a>
                            </div>

                            <div class="custom-block-bottom-item">
                                <a href="#" class="d-flex flex-column">
                                    <i class="custom-block-icon bi-send"></i>

                                    <small>Send</small>
                                </a>
                            </div>

                            <div class="custom-block-bottom-item">
                                <a href="#" class="d-flex flex-column">
                                    <i class="custom-block-icon bi-arrow-down"></i>

                                    <small>Request</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="custom-block custom-block-transations">
                            <h5 class="mb-4">Recent Transations</h5>

                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <img src="AdminInfo/images/profile/senior-man-white-sweater-eyeglasses.jpg"
                                        class="profile-image img-fluid" alt="">

                                    <div>
                                        <p>
                                            <a href="transation-detail.html">Daniel Jones</a>
                                        </p>

                                        <small class="text-muted">C2C Transfer</small>
                                    </div>
                                </div>

                                <div class="ms-auto">
                                    <small>05/12/2023</small>
                                    <strong class="d-block text-danger"><span class="me-1">-</span> $250</strong>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <img src="AdminInfo/images/profile/young-beautiful-woman-pink-warm-sweater.jpg"
                                        class="profile-image img-fluid" alt="">

                                    <div>
                                        <p>
                                            <a href="transation-detail.html">Public Bank</a>
                                        </p>

                                        <small class="text-muted">Mobile Reload</small>
                                    </div>
                                </div>

                                <div class="ms-auto">
                                    <small>22/8/2023</small>
                                    <strong class="d-block text-success"><span class="me-1">+</span> $280</strong>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="AdminInfo/images/profile/young-woman-with-round-glasses-yellow-sweater.jpg"
                                        class="profile-image img-fluid" alt="">

                                    <div>
                                        <p><a href="transation-detail.html">Store</a></p>

                                        <small class="text-muted">Payment Received</small>
                                    </div>
                                </div>

                                <div class="ms-auto">
                                    <small>22/8/2023</small>
                                    <strong class="d-block text-success"><span class="me-1">+</span> $280</strong>
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
    <!-- Add this script at the bottom of your HTML, just before the closing </body> tag -->
    <script>
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
    </script>

    <?= view('Admin/chop/js') ?>
</body>

</html>