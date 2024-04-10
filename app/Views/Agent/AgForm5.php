<!doctype html>
<html lang="en">

<?= view('Agent/chop/head'); ?>
<body>
    <?= view('Agent/chop/header'); ?>

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
                            <a class="nav-link active" href="#" data-bs-toggle="collapse" data-bs-target="#manageDropdown"
                                aria-expanded="false">
                                <i class="bi-book me-2"></i>
                                My Forms
                            </a>
                            <div class="collapse" id="manageDropdown">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <span><a class="nav-link " href="/AgForm1">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">LIFE CHANGER</span>
                                            </a></span><br>
                                        <a class="nav-link " href="/AgForm2">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">AIAL</span>
                                        </a><br>
                                        <a class="nav-link" href="/AgForm3">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">GROUP LIFE INSURANCE</span>
                                        </a><br>
                                        <a class="nav-link" href="/AgForm4">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">AFFIDAVIT OF NON-FILING</span>
                                        </a><br>
                                        <a class="nav-link" href="/AgForm5">
                                            <i class="bi-pen me-2"></i>
                                            <span class="align-middle">STATEMENT OF UNDERTAKING</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/subagent">
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
                <div class="title-group mb-3 text-center">
                    <h4>STATEMENT OF UNDERTAKING FORM</h4>
                </div>
                <section class="section">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">

                                    <form class="container mt-5" method="post" action="/form1sv">
                                        <fieldset>
                                            <h5 style="text-align: center;">Statement of Undertaking<br>
                                                Submission of Hard Copies of Application Forms</h5><br>

                                            <p style="text-align: justify;">I, <input type="text" id="name" name="name"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="Name"> in my capacity as <input type="text"
                                                    id="position" name="position"
                                                    style="width: 200px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="Intm. Position">
                                                at ALLIANZ PNB LIFE INSURANCE, INC. (the, “Company”), hereby undertake
                                                the responsibility
                                                of ensuring the timely submission of hard copies of the application
                                                forms of the clients as
                                                required by Insurance Commission Circular Letter (IC CL) No. 2013-33
                                                (also known as the,
                                                “Market Conduct Guidelines”) within the period set by the Company.</p>

                                            <p style="text-align: justify;">I understand that any delays in submitting
                                                the hard copies of the application forms could
                                                potentially impact the overall process and the experience of our
                                                clients. Therefore, I pledge to
                                                take all necessary actions to ensure that the hard copies of the
                                                application forms are delivered
                                                within the specified timeframe.</p>

                                            <p style="text-align: justify;">Furthermore, I acknowledge and fully
                                                understand that any untoward incident or negative
                                                consequences that may arise as a result of unsubmitted or delayed
                                                submission of the hard copies
                                                of application forms shall be my responsibility. Accordingly, I commit
                                                to bearing any costs,
                                                liabilities, or damages that may result from such incidents.</p>

                                            <p style="text-align: justify;">I am fully committed to maintaining clear
                                                communication, monitoring the progress, and
                                                addressing any potential obstacles that may arise during the submission
                                                process. I will keep the
                                                Company informed of the status of each submission and promptly address
                                                any concerns or
                                                queries.</p>

                                            <p style="text-align: justify;">By signing this Statement of Undertaking, I
                                                affirm my dedication to upholding the standards of
                                                professionalism, timeliness, and reliability in all my interactions with
                                                the Company. I understand
                                                the importance of this commitment and am fully prepared to fulfill my
                                                responsibilities as outlined
                                                in this undertaking.</p><br>

                                            <p><input type="text" id="signature" name="signature" class="form-control"
                                                    placeholder="Signature over Printed Name">Signature over Printed
                                                Name<br>
                                                Date of signature: </p><br><br>
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
    <script src="AdminInfo/js/jquery.min.js"></script>
    <script src="AdminInfo/js/bootstrap.bundle.min.js"></script>
    <script src="AdminInfo/js/custom.js"></script>

</body>

</html>