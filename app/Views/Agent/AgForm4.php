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
                    <h3>AFFIDAVIT OF NON-FILING FORM</h3>
                </div>


                <section class="section">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">

                                    <form class="container mt-5" method="post" action="/form4sv">
                                        <fieldset>
                                            <h6 style="text-align: center;">AFFIDAVIT OF NON-FILING FORM</h6><br>
                                            <p style="text-align: justify;">
                                                I, <input type="text" id="name" name="name"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="name">, of legal age, single/married, Filipino, and a
                                                resident of <input type="text" id="place" name="place"
                                                    style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="place"> after having been duly sworn to in accordance
                                                with law, hereby depose and say:
                                            </p>
                                            <br>
                                            <ol style="text-align: justify;">
                                                <li>I do not have a sufficient source of income/unemployed for <input
                                                        type="text" id="reason" name="reason"
                                                        style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                        placeholder="">;</li>
                                                <li>That as a consequence, I did not file my Income Tax Return for the
                                                    past year;</li>
                                                <li>That I am executing this affidavit to attest to the truthfulness of
                                                    the foregoing facts and for all legal intents and purposes.</li>
                                            </ol>
                                            <br>
                                            <p style="text-align: justify;">
                                                IN WITNESS WHEREOF, I have hereunto set my hands this <input type="text"
                                                    id="day" name="day"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="day"> day of <input type="text" id="month" name="month"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="month">, <input type="text" id="year" name="year"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="year"> at <input type="text" id="witness_place"
                                                    name="witness_place"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="place">.
                                            </p>
                                            <br><br>
                                            <p style="text-align: right;">
                                                <input type="text" id="affiant" name="affiant"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="affiant"><br>
                                                Affiant
                                            </p>
                                            <p style="text-align: right;">
                                                CTC No. <input type="text" id="ctc_no" name="ctc_no"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder=""><br>
                                                Issued on <input type="text" id="ctc_issue_date" name="ctc_issue_date"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder=""> <br>
                                                Issued at <input type="text" id="ctc_issue_place" name="ctc_issue_place"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="">
                                            </p>
                                            <br> <br>
                                            <p style="text-align: justify;">
                                                SUBSCRIBED AND SWORN to before me this <input type="text" id="sworn_day"
                                                    name="sworn_day"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="day"> day of <input type="text" id="sworn_month"
                                                    name="sworn_month"
                                                    style="width: 150px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="month">, <input type="text" id="sworn_year"
                                                    name="sworn_year"
                                                    style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="year"> at <input type="text" id="sworn_place"
                                                    name="sworn_place"
                                                    style="width: 100px;  padding:5px 5px; border-radius: 13px;"
                                                    placeholder="place">, affiant exhibited to me her Community Tax
                                                Certificate as indicated above.
                                            </p><br>
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