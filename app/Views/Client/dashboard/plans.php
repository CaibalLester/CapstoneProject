<!DOCTYPE html>
<html lang="en">
<?= view('/Home/chop/head'); ?>

<body>
    <?= view('/client/dashboard/topside'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="ClientPage">Home</a></li>
                    <li class="breadcrumb-item">Plans</li>
                    <!-- <li class="breadcrumb-item active">Profile</li> -->
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6">
                    <div class="row row-cols-2">
                        <!-- First card column -->

                        <?Php foreach ($plan as $plans): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="col-lg-12">
                                        <div class="image-container">
                                            <img src="<?= isset($plans['image']) ? base_url('/uploads/plans/' . $plans['image']) : '' ?>"
                                                class="card-img-top img-fluid" alt="...">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $plans['plan_name'] ?></h5>
                                        <p class="card-text">
                                            <?= isset($plans['description']) ? $plans['description'] : ''; ?>
                                        </p>
                                        <p class="card-text"><a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#plan<?= $plans['token'] ?>">Read More</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="plan<?= $plans['token'] ?>" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?= $plans['plan_name'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-lg">
                                            <?= isset($plans['description']) ? $plans['description'] : ''; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="" class="btn btn-primary">Save changes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?Php endforeach ?>

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<?= view('/Home/chop/jsh'); ?>