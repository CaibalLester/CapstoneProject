<!doctype html>
<html lang="en">

<?= view('head'); ?>
<style>
    .card {
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
    }
</style>

<body>
    <?= view('Applicant/chop/header'); ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/AppDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/AppForms">
                                <i class="bi bi-file-earmark-slides me-2"></i>
                                Forms
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/appfiles">
                                <i class="bi bi-files"></i></i>
                                Files
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/FA">
                                <i class="bi-person me-2"></i>
                                Agents
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

            <main class="main-wrapper col-md-10 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Application Forms</h1>
                </div>

                <div class="row justify-content-center m-2">
                    <!-- left side columns -->
                    <div class="col-lg-12">
                        <div class="row justify-content-center row-cols-3">
                            <div class="card col-lg-3 m-3">
                                <div class="card-body text-center">
                                    <!-- Card Content -->
                                    <h6>Life Changer</h6>
                                    <a href="AppForm1">
                                        <img src="uploads/forms/life_changer.png" class="card-img img-fluid"
                                            alt="Card Image">
                                    </a>
                                </div>
                            </div>
                            <div class="card col-lg-3 m-3">
                                <div class="card-body text-center">
                                    <h6>AIAL</h6>
                                    <a href="AppForm2">
                                        <img src="uploads/forms/aial.png" class="card-img img-fluid" alt="Card Image">
                                    </a>
                                    <!-- Card Content -->
                                </div>
                            </div>
                            <div class="card col-lg-3 m-3">
                                <div class="card-body text-center">
                                    <!-- Card Content -->
                                    <h6>Group Life Insurance</h6>
                                    <a href="AppForm3">
                                        <img src="uploads/forms/grouplife.png" class="card-img img-fluid"
                                            alt="Card Image">
                                    </a>
                                </div>
                            </div>
                            <div class="card col-lg-3 m-3">
                                <div class="card-body text-center4">
                                    <!-- Card Content -->
                                    <h6>Affidavit of Non Filing</h6>
                                    <a href="AppForm4">
                                        <img src="uploads/forms/affidavit.png" class="card-img img-fluid"
                                            alt="Card Image">
                                    </a>
                                </div>
                            </div>
                            <div class="card col-lg-3 m-3">
                                <div class="card-body text-center">
                                    <!-- Card Content -->
                                    <h6>Statement of Undertaking</h6>
                                    <a href="AppForm5">
                                        <img src="uploads/forms/statement.png" class="card-img img-fluid"
                                            alt="Card Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of left side -->
            </main>
        </div>
    </div>
    <?= view('js'); ?>
</body>

</html>