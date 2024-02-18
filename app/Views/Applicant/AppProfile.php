<!doctype html>
<html lang="en">
<?= view('Applicant/chop/head'); ?>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>


<body>
    <?= view('Applicant/chop/header'); ?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/AppDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#manageDropdown" aria-expanded="false">
                                    <i class="bi-book me-2"></i>
                                    Forms
                                </a>
                                <div class="collapse" id="manageDropdown">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <span><a class="nav-link" href="/AppForm1">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">LIFE CHANGER</span>
                                            </a></span><br>
                                            <a class="nav-link" href="/AppForm2">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">AIAL</span>
                                            </a><br>
                                            <a class="nav-link" href="/AppForm3">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">GROUP LIFE INSURANCE</span>
                                            </a><br>
                                            <a class="nav-link" href="/AppForm4">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">AFFIDAVIT OF NON-FILING</span>
                                            </a><br>
                                            <a class="nav-link" href="/AppForm5">
                                                <i class="bi-pen me-2"></i>
                                                <span class="align-middle">STATEMENT OF UNDERTAKING</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/AppForm1">
                                <i class="bi-book me-2"></i>
                                Applicantion Form
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/AppProfile">
                                <i class="bi-person me-2"></i>
                                Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AppSetting">
                                <i class="bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AppHelp">
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
                    <h1 class="h2 mb-0">Profile</h1>
                </div>

                <div class="row">
                    <!-- <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center text-center">
                                <img src="<?= isset($applicant['profile']) ? base_url('/uploads/' . $applicant['profile']) : 'default_path_here' ?>"
                                    alt="Profile" class="rounded-circle" style="width: 150px; height: 150px;">
                                <h2>
                                    <?= $applicant['applicantfullname'] ?>
                                </h2>
                                <div class="social-links mt-2">
                                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->


                    <!-- <div class="col-xl-6">
                                        <div class="text-center">
                                            <div class="qr-code-container mt-3 mb-3">
                                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example"
                                                    alt="QR Code">
                                            </div>
                                            <button type="file" class="btn btn-dark"><i
                                                    class="bi bi-folder"></i></button>
                                        </div>
                                    </div> -->





                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body pt-3">
                                <div class="row">
                                    <!-- First Column -->
                                    <div class="col-xl-7"> <!-- I-update ang class na ito -->
                                        <div
                                            class="card-body profile-card pt-4 d-flex flex-column align-items-center text-center">
                                            <img src="<?= isset($applicant['profile']) ? base_url('/uploads/' . $applicant['profile']) : 'default_path_here' ?>"
                                                alt="Profile" class="rounded-circle"
                                                style="width: 150px; height: 150px;">
                                            <h2>
                                                <?= $applicant['applicantfullname'] ?>
                                            </h2>
                                        </div>
                                    </div>
                                    <!-- Include the QR code library -->
                                    <script
                                        src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

                                    <div class="col-xl-4 d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <!-- Dito mo ilalagay ang QR code container -->
                                            <div class="qr-code-container mt-3 mb-3" id="qrCodeContainer"></div>

                                            <!-- Button para sa pag-download -->
                                            <button type="button" class="btn btn-dark" id="downloadButton"><i
                                                    class="bi bi-download"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-9 col-8">
                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">Applicant Details</h5>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">User Name</th>
                                                    <td>
                                                        <?= $applicant['username'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Full Name</th>
                                                    <td>
                                                        <?= $applicant['applicantfullname'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td>
                                                        <?= $applicant['email'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Number</th>
                                                    <td>
                                                        <?= $applicant['number'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Birthday</th>
                                                    <td>
                                                        <?= date('M j, Y', strtotime($applicant['birthday'])); ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
    <?= view('Applicant/chop/js'); ?>
    <script>
        // I-create ang QR code gamit ang actual na data
        var profileData = JSON.stringify({
            applicantID: "<?= $applicant['applicant_id'] ?>",
            role: "<?= $user['role'] ?>",
            username: "<?= $applicant['username'] ?>",
            fullname: "<?= $applicant['applicantfullname'] ?>",
            email: "<?= $applicant['email'] ?>",
            number: "<?= $applicant['number'] ?>",
            birthday: "<?= date('M j, Y', strtotime($applicant['birthday'])); ?>"
        });

        // Set ang data ng QR code container gamit ang profileData
        var qrCodeContainer = document.getElementById("qrCodeContainer");

        // Set the size of the QR code (adjust as needed)
        var qrCodeOptions = {
            width: 150,  // Adjust as needed
            height: 150, // Adjust as needed
        };

        new QRCode(qrCodeContainer, {
            text: profileData,
            ...qrCodeOptions,
        });

        // Kung gusto mo i-download ang QR code
        var downloadButton = document.getElementById("downloadButton");
        downloadButton.addEventListener("click", function () {
            // Kunin ang data URL ng QR code at gawing anchor link
            var dataURL = qrCodeContainer.querySelector("img").src;
            var downloadLink = document.createElement("a");
            downloadLink.href = dataURL;
            downloadLink.download = "profile_qr_code_" + "<?= $applicant['username'] ?>.png";
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        });
    </script>
</body>

</html>