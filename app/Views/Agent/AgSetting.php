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

                                    <form class="custom-form profile-form" action="/svag" method="post"
                                        enctype="multipart/form-data">
                                        <input class="form-control" type="text" name="Agentfullname" id="profile-name"
                                            placeholder="Full name"
                                            value="<?= isset($agent['Agentfullname']) ? $agent['Agentfullname'] : '' ?>">

                                            <input class="form-control" type="username" name="username" placeholder="Username"
                                            value="<?= isset($agent['username']) ? $agent['username'] : '' ?>">

                                        <input class="form-control" type="email" name="email" placeholder="Email"
                                            value="<?= isset($agent['email']) ? $agent['email'] : '' ?>">

                                        <input class="form-control" type="text" name="number"
                                            placeholder="Please Enter Your Number"
                                            value="<?= isset($agent['number']) ? $agent['number'] : '' ?>">
                                        <input class="form-control" type="text" name="birthday"
                                            placeholder="Please Enter your Birthday mm/dd/yyyy"
                                            value="<?= isset($agent['birthday']) ? $agent['birthday'] : '' ?>">

                                        <input class="form-control" type="text" name="address"
                                            placeholder="Please Enter your Adress"
                                            value="<?= isset($agent['address']) ? $agent['address'] : '' ?>">

                                        <input class="form-control" type="text" name="branch" placeholder="Branch"
                                            value="<?= isset($agent['branch']) ? $agent['branch'] : '' ?>" readonly>

                                        <div class="input-group mb-1">
                                            <img id="preview-image"
                                                src="<?= isset($agent['agentprofile']) ? base_url('/uploads/' . $agent['agentprofile']) : 'default_path_here' ?>"
                                                class="profile-image img-fluid" alt="">

                                            <input type="file" name="profile" class="form-control" id="inputGroupFile02"
                                                onchange="previewImage()">
                                        </div>

                                        <div class="d-flex">
                                            <button type="submit" class="form-control ms-2">Save</button>
                                        </div>
                                    </form>

                                    <script>
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

                                </div>

                                <div class="tab-pane fade" id="password-tab-pane" role="tabpanel"
                                    aria-labelledby="password-tab" tabindex="0">
                                    <h6 class="mb-4">Password</h6>

                                    <form class="custom-form password-form" action="/updatePassword" method="post"
                                        role="form">
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