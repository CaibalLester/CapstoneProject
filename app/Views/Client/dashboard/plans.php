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
            <div class="row">
                <!-- First card column -->

                <?Php foreach($plan as $plans): ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <img src="<?= isset($plans['image']) ? base_url('/uploads/plans/' . $plans['image']) : '' ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $plans['plan_name'] ?></h5>
                            <p class="card-text"><?= isset($plans['description']) ? $plans['description'] : ''; ?></p>
                                <p class="card-text"><a href="#" class="btn btn-primary">Read More</a></p>
                        </div>
                    </div>
                </div>
                <?Php endforeach ?>


                <!-- Second card column
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <img src="req/assets/img/card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with an image on top</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>


    </main>
</body>
<?= view('/Home/chop/jsh'); ?>