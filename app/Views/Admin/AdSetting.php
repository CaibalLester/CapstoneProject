<!doctype html>
<html lang="en">
<?= view('Admin/chop/head') ?>

<body>
    <?= view('Admin/chop/header') ?>

    <div class="container-fluid">
        <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/AdDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/usermanagement">
                                <i class="fa fa-user me-2"></i>
                                User Management
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/ManageAgent">
                                <i class="fas fa-user-tie me-2"></i>
                                Agents
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/ManageApplicant">
                                <i class="fa fa-users me-2"></i>
                                Applicants
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AdProfile">
                                <i class="fa fa-user me-2"></i>
                                Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/AdSetting">
                                <i class="bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/AdHelp">
                                <i class="fas fa-hands-helping me-2"></i>
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
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <h6 class="mb-4">Applicant Profile</h6>

                                    <form class="custom-form profile-form" action="/svad" method="post"
                                        enctype="multipart/form-data" onsubmit="return confirmSubmit()">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input class="form-control" type="username" name="username"
                                                    placeholder="Username"
                                                    value="<?= isset($admin['username']) ? $admin['username'] : '' ?>">
                                            </div>
                                            <div class="col-md-9">
                                                <label for="addminfullname" class="form-label">Full Name</label>
                                                <input class="form-control" type="text" name="Adminfullname"
                                                    id="profile-name" placeholder="Full name"
                                                    value="<?= isset($admin['Adminfullname']) ? $admin['Adminfullname'] : '' ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="number" class="form-label">Number</label>
                                                <input class="form-control" type="text" name="number"
                                                    placeholder="Please Enter Your Number"
                                                    value="<?= isset($admin['number']) ? $admin['number'] : '' ?>">
                                            </div>

                                            <div class="col-md-5">
                                                <label for="email" class="form-label">Email</label>
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="Email"
                                                    value="<?= isset($admin['email']) ? $admin['email'] : '' ?>">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="birthday" class="form-label">Birthday</label>
                                                <input class="form-control" type="date" name="birthday"
                                                    placeholder="Please Enter your Birthday mm/dd/yyyy"
                                                    value="<?= isset($admin['birthday']) ? $admin['birthday'] : '' ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="address" class="form-label">Complete Address</label>
                                                <input class="form-control" type="text" name="address"
                                                    placeholder="address" value="<?= isset($admin['address']) ? $admin['address'] : '' ?>">
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <label for="branch" class="form-label">Branch</label>
                                                <input class="form-control" type="text" name="branch"
                                                    placeholder="Branch" value="<?= $user['branch']; ?>" readonly>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="division" class="form-label">Division</label>
                                                <input class="form-control" type="text" name="branch"
                                                    placeholder="Division" value="<?= $admin['division']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-1">
                                                    <img id="preview-image"
                                                        src="<?= isset($admin['adminProfile']) ? base_url('/uploads/' . $admin['adminProfile']) : 'default_path_here' ?>"
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
                                            <button type="button" class="form-control me-3"
                                                onclick="resetPasswordFields()">Clear</button>

                                            <button type="submit" class="form-control ms-2">Update Password</button>
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

    <!-- JAVASCRIPT FILES -->
    <?= view('Admin/chop/js') ?>
    <script>
        function confirmSubmit() {
            return confirm("Are you sure you want to update your Profile?");
        }
        function confirmSubmitpassword() {
            return confirm("Are you sure you want to update your Password?");
        }
        function resetPasswordFields() {
            document.getElementById('current_password').value = '';
            document.getElementById('new_password').value = '';
            document.getElementById('confirm_new_password').value = '';
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