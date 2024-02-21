<!doctype html>
<html lang="en">
<?= view('Agent/chop/head') ?>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<body>
    <?= view('Agent/chop/header') ?>

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
                            <a class="nav-link active" href="/AgProfile">
                                <i class="bi-person me-2"></i>
                                Profile
                            </a>
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
                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Profile</h1>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body pt-3">
                                <div class="row">
                                    <!-- First Column -->
                                    <div class="col-xl-7"> <!-- I-update ang class na ito -->
                                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center text-center">
                                            <img src="<?= isset($agent['agentprofile']) ? base_url('/uploads/' . $agent['agentprofile']) : '' ?>" alt="Profile" class="rounded-circle" style="width: 150px; height: 150px;">
                                            <h2>
                                                <?= $agent['Agentfullname'] ?>
                                            </h2>
                                        </div>
                                    </div>
                                    <!-- Include the QR code library -->
                                    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

                                    <div class="col-xl-4 d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <!-- Dito mo ilalagay ang QR code container -->
                                            <div class="qr-code-container mt-3 mb-3" id="qrCodeContainer"></div>

                                            <!-- Button para sa pag-download -->
                                            <button type="button" class="btn btn-dark" id="downloadButton"><i class="bi bi-download"></i></button>
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
                                        <h5 class="card-title">Agent Details</h5>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">User Name</th>
                                                    <td>
                                                        <?= $agent['username'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Full Name</th>
                                                    <td>
                                                        <?= $agent['Agentfullname'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td>
                                                        <?= $agent['email'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Number</th>
                                                    <td>
                                                        <?= $agent['number'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Birthday</th>
                                                    <td>
                                                        <?= date('M j, Y', strtotime($agent['birthday'])); ?>
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

    <!-- JAVASCRIPT FILES -->
    <?= view('Agent/chop/js') ?>
    <script>
        // I-create ang QR code gamit ang actual na data
        var profileData = JSON.stringify({
            role: "<?= $user['role'] ?>",
            username: "<?= $agent['username'] ?>",
            fullname: "<?= $agent['Agentfullname'] ?>",
            email: "<?= $agent['email'] ?>",
            number: "<?= $agent['number'] ?>",
            birthday: "<?= date('M j, Y', strtotime($agent['birthday'])); ?>"
        });

        // Set ang data ng QR code container gamit ang profileData
        var qrCodeContainer = document.getElementById("qrCodeContainer");

        // Set the size of the QR code (adjust as needed)
        var qrCodeOptions = {
            width: 150, // Adjust as needed
            height: 150, // Adjust as needed
        };

        new QRCode(qrCodeContainer, {
            text: profileData,
            ...qrCodeOptions,
        });

        // Kung gusto mo i-download ang QR code
        var downloadButton = document.getElementById("downloadButton");
        downloadButton.addEventListener("click", function() {
            // Kunin ang data URL ng QR code at gawing anchor link
            var dataURL = qrCodeContainer.querySelector("img").src;
            var downloadLink = document.createElement("a");
            downloadLink.href = dataURL;
            downloadLink.download = "profile_qr_code_" + "<?= $agent['username'] ?>.png";
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        });
    </script>

</body>

</html>