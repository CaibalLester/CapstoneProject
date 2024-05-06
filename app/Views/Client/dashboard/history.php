<!DOCTYPE html>
<html lang="en">
<?= view('/Home/chop/head'); ?>

<body>
  <?= view('/client/dashboard/topside'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Payment History</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="table-responsive pt-3">
              <div class="card-body">
                <h5 class="card-title">Payment History</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">Agent</th>
                      <th scope="col">Plan</th>
                      <th scope="col">Start Date</th>
                      <th scope="col">Due Dates</th>
                      <th scope="col">Terms</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($myplan as $payment): ?>
                      <tr>
                        <td><?= $payment['agent_name'] ?></td> <!-- Assuming agent name is retrieved from the join -->
                        <td><?= $payment['plan_name'] ?></td> <!-- Assuming plan name is retrieved from the join -->
                        <td><?= date('M j, Y h:i A', strtotime($payment['created_at'])); ?></td>
                        <td><?= $payment['mode_payment'] ?></td>
                        <td><?= $payment['term'] ?></td>
                        <td><?= $payment['status'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
</body>
<?= view('/Home/chop/jsh'); ?>