<!doctype html>
<html lang="en">
<?= view('Agent/chop/head') ?>

<body>
    <?= view('Agent/chop/header') ?>

    <div class="container-fluid">
        <div class="row">
            <?= view('Agent/chop/side') ?>

            <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Sub Agents</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white">
                            <h5 class="mb-4">Account Activities</h5>

                            <div class="custom-block bg-white">
                                <form class="custom-form search-form" action="/agentSearch" method="post" role="form">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-12">
                                            <input class="form-control mb-lg-0 mb-md-0" name="filterAgent" type="text" placeholder="Search by Agents Name" aria-label="Search" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <button type="submit" class="form-control">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </form><br>

                                <div class="row">
                                    <?php foreach ($agent as $ag): ?>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <div
                                                class="custom-block custom-block-profile-front custom-block-profile text-center bg-white p-4">
                                                <div class="custom-block-profile-image-wrap mb-4">
                                                    <a href="http://" data-bs-toggle="modal"
                                                        data-bs-target="#verticalycentered<?= $ag['agent_id']; ?>">
                                                        <img src="<?= isset($ag['agentprofile']) ? base_url('/uploads/' . $ag['agentprofile']) : 'default_path_here' ?>"
                                                            class="profile-image img-fluid" alt=""></a>
                                                </div>
                                                <strong class="mb-3">
                                                    <?= $ag['Agentfullname']; ?>
                                                </strong>
                                                <p class="mb-2">
                                                    <?= $ag['email']; ?>
                                                </p>
                                                <p class="mb-2">
                                                    <?= $ag['number']; ?>
                                                </p>
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
                                                                class="profile-image img-fluid" alt="Agent Image">
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
                                                        <!-- <p><strong>Rank:</strong>
                                                            <?= $ag['rank']; ?>
                                                        </p> -->
                                                        <!-- Add more details if needed -->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Modal -->
                                    <?php endforeach; ?>
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