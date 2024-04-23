<!DOCTYPE html>
<html lang="en">
<?= view('/Home/chop/head'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <?= view('/client/dashboard/topside'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>My Schedules</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="ClientPage">Home</a></li>
                    <li class="breadcrumb-item">My Schedules</li>
                    <!-- <li class="breadcrumb-item active">Profile</li> -->
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">My Schedules</h5>

                            <!-- Default Table -->
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date Schedule</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Meeting Type</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Created</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($schedule as $sched): ?>
                                            <tr>
                                                <td><?= date('M j, Y', strtotime($sched['selected_date'])); ?></td>
                                                <td><?= $sched['schedule_time'] ?></td>
                                                <td><?= $sched['meeting_type'] ?></td>
                                                <td><?= $sched['status'] ?></td>
                                                <td><?= date('M j, Y', strtotime($sched['created_at'])); ?></td>
                                                <td><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#dat<?= $sched['plan'] ?>"><i
                                                            style="font-size: 30px;" class="ri-eye-line"></i></a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php foreach ($plan as $plans): ?>
                                <div class="modal fade" id="dat<?= $plans['token'] ?>" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?= $plans['plan_name'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <?php foreach ($agent as $agents): ?>
                                                <?php if ($agents['agent_id'] == $sched['agent']): ?>
                                                    <div class="modal-body text-lg">
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <div class="card">
                                                                    <div
                                                                        class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                                        <img src="<?= isset($agents['agentprofile']) ? base_url('/uploads/' . $agents['agentprofile']) : '' ?>"
                                                                            alt="Profile" class="rounded-circle" style=" width: 150px; height: 150px;object-fit: cover; border-radius: 50%; ">
                                                                        <h2><?= isset($agents['username']) ? $agents['username'] : '' ?>
                                                                        </h2>
                                                                        <h4>Agent</h4>
                                                                        <div class="social-links mt-2">
                                                                            <a href="#" class="twitter"><i
                                                                                    class="bi bi-messenger"></i></a>
                                                                            <a href="#" class="facebook"><i
                                                                                    class="bi bi-facebook"></i></a>
                                                                            <a href="#" class="gmail"><i
                                                                                    class="bi bi-envelope"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-8">

                                                                <div class="card">
                                                                    <div class="card-body pt-3">
                                                                        <div class="tab-content pt-2">
                                                                            <div class="tab-pane fade show active profile-overview">
                                                                                <h5 class="card-title">Plan</h5>
                                                                                <h5 class="modal-title">
                                                                                    <?= $plans['plan_name'] ?>
                                                                                </h5>

                                                                                <h5 class="card-title">Agent Contact Details</h5>

                                                                                <div class="row mb-2">
                                                                                    <div class="col-lg-3 col-md-4 label ">Full
                                                                                        Name
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-8">
                                                                                        <?php if (isset($agents['lastname']) && isset($agents['firstname']) && isset($agents['middlename'])): ?>
                                                                                            <?= $agents['lastname'] ?>,
                                                                                            <?= $agents['firstname'] ?>
                                                                                            <?= $agents['middlename'] ?>.
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mb-2">
                                                                                    <div class="col-lg-3 col-md-4 label">
                                                                                        Username
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-8">
                                                                                        <?php echo isset($agents['username']) ? $agents['username'] : '' ?>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mb-2">
                                                                                    <div class="col-lg-3 col-md-4 label">Email
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-8">
                                                                                        <?php echo isset($agents['email']) ? $agents['email'] : '' ?>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mb-2">
                                                                                    <div class="col-lg-3 col-md-4 label">Phone
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-8">
                                                                                        <?php echo isset($agents['number']) ? $agents['number'] : '' ?>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mb-2">
                                                                                    <div class="col-lg-3 col-md-4 label">
                                                                                        Birthday
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-8">
                                                                                        <?= isset($agents['birthday']) ? date('M j, Y', strtotime($agents['birthday'])) : ''; ?>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-2">
                                                                                    <div class="col-lg-3 col-md-4 label">Adress
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-8">
                                                                                        <?= isset($agents['region']) ? $agents['region'] : '' ?>,
                                                                                        <?= isset($agents['province']) ? $agents['province'] : '' ?>,
                                                                                        <?= isset($agents['city']) ? $agents['city'] : '' ?>,
                                                                                        <?= isset($agents['barangay']) ? $agents['barangay'] : '' ?>,
                                                                                        <?= isset($agents['street']) ? $agents['street'] : '' ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- End Default Table Example -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<?= view('/Home/chop/jsh'); ?>