<!doctype html>
<html lang="en">
<?= view('Applicant/chop/head'); ?>


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
                            <a class="nav-link" href="/AppProfile">
                                <i class="bi-person me-2"></i>
                                Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/FA">
                                <i class="bi-person me-2"></i>
                                Agents
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/AppSetting">
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
                    <h1 class="h2 mb-0">Settings</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-10 col-12">
                        <div class="custom-block bg-white">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="true">Profile</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                                        data-bs-target="#password-tab-pane" type="button" role="tab"
                                        aria-controls="password-tab-pane" aria-selected="false">Password</button>
                                </li>

                                <!-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="notification-tab" data-bs-toggle="tab"
                                        data-bs-target="#notification-tab-pane" type="button" role="tab"
                                        aria-controls="notification-tab-pane"
                                        aria-selected="false">Notification</button>
                                </li> -->
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <h6 class="mb-4">Applicant Profile</h6>

                                    <form class="custom-form profile-form" action="/svap" method="post"
                                        enctype="multipart/form-data" onsubmit="return confirmSubmit()">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input class="form-control" type="text" name="username"
                                                    id="profile-name" placeholder="Full name"
                                                    value="<?= isset($applicant['username']) ? $applicant['username'] : '' ?>">
                                            </div>
                                            <div class="col-md-9">
                                                <label for="applicantfullname" class="form-label">Full Name</label>
                                                <input class="form-control" type="text" name="applicantfullname"
                                                    id="profile-name" placeholder="Full name"
                                                    value="<?= isset($applicant['applicantfullname']) ? $applicant['applicantfullname'] : '' ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="number" class="form-label">Number</label>
                                                <input class="form-control" type="text" name="number"
                                                    placeholder="Please Enter Your Number"
                                                    value="<?= isset($applicant['number']) ? $applicant['number'] : '' ?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="Email"
                                                    value="<?= isset($applicant['email']) ? $applicant['email'] : '' ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="birthday" class="form-label">Birthday</label>
                                                <input class="form-control" type="date" name="birthday"
                                                    placeholder="Please Enter your Birthday mm/dd/yyyy"
                                                    value="<?= isset($applicant['birthday']) ? $applicant['birthday'] : '' ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="branch" class="form-label">Branch</label>
                                                <input class="form-control" type="text" name="branch"
                                                    placeholder="Branch" value="<?= $user['branch']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-1">
                                                    <img id="preview-image"
                                                        src="<?= isset($applicant['profile']) ? base_url('/uploads/' . $applicant['profile']) : 'default_path_here' ?>"
                                                        class="profile-image img-fluid" alt="">
                                                    <input type="file" name="profile" class="form-control"
                                                        id="inputGroupFile02" onchange="previewImage()">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <button type="submit" class="form-control ms-2">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="password-tab-pane" role="tabpanel"
                                    aria-labelledby="password-tab" tabindex="0">
                                    <h6 class="mb-4">Password</h6>

                                    <form class="custom-form password-form" action="/updatePassword" method="post"
                                        role="form" onsubmit="return confirmSubmitpassword()">
                                        <input type="password" name="current_password" id="current_password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control"
                                            placeholder="Current Password" required="">

                                        <input type="password" name="new_password" id="new_password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="New Password"
                                            required="">

                                        <input type="password" name="confirm_new_password" id="confirm_new_password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control"
                                            placeholder="Confirm Password" required="">

                                        <div class="d-flex">
                                            <button type="button" class="form-control me-3">Reset</button>

                                            <button type="submit" class="form-control ms-2">Update Password</button>
                                        </div>
                                    </form>
                                </div>


                                <div class="tab-pane fade" id="notification-tab-pane" role="tabpanel"
                                    aria-labelledby="notification-tab" tabindex="0">
                                    <h6 class="mb-4">Notification</h6>

                                    <form class="custom-form notification-form" action="#" method="post" role="form">

                                        <div class="form-check form-switch d-flex mb-3 ps-0">
                                            <label class="form-check-label" for="flexSwitchCheckCheckedOne">Account
                                                activity</label>

                                            <input class="form-check-input ms-auto" type="checkbox"
                                                name="form-check-input" role="switch" id="flexSwitchCheckCheckedOne"
                                                checked>
                                        </div>

                                        <div class="form-check form-switch d-flex mb-3 ps-0">
                                            <label class="form-check-label" for="flexSwitchCheckCheckedTwo">Payment
                                                updated</label>

                                            <input class="form-check-input ms-auto" type="checkbox"
                                                name="form-check-input" role="switch" id="flexSwitchCheckCheckedTwo"
                                                checked>
                                        </div>

                                        <div class="d-flex mt-4">
                                            <button type="button" class="form-control me-3">
                                                Reset
                                            </button>

                                            <button type="submit" class="form-control ms-2">
                                                Update Password
                                            </button>
                                        </div>
                                    </form>
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
        function confirmSubmit() {
            return confirm("Are you sure you want to update your Profile?");
        }
        function confirmSubmitpassword() {
            return confirm("Are you sure you want to update your Password?");
        }
        function previewImage() {
            const input = document.getElementById('inputGroupFile02');
            const preview = document.getElementById('preview-image');

            const file = input.files[0];
            const reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = 'default_path_here';
            }
        }
    </script>
</body>

</html>