<!DOCTYPE html>
<html lang="en">

<?= view('Home/chop1/head') ?>

<body>

<?= view('Home/chop1/header') ?>

	<div class="page-banner-area team-page-area">
		<div class="container">
			<div class="single-page-banner-content">
				<h1>Agent</h1>
				<ul>
					<li>
						<a href="/">Home</a>
					</li>
					<li>Agent</li>
				</ul>
			</div>
		</div>
	</div>


	<div class="team-page-area pt-100 pb-100">
		<div class="container">
			<div class="section-title">
				<span class="top-title">Our Agent</span>
				<h2>Meet Our Great Agent</h2>
			</div>
			<div class="row">
				<?php foreach ($agents as $agent): ?>
					<div class="col-lg-4 col-sm-6 col-md-6">
						<div class="single-team-card team-page-card">
							<div class="team-img">
								<img src="<?= isset($agent['agentprofile']) ? base_url('/uploads/' . $agent['agentprofile']) : '' ?>"
									alt="team">
							</div>
							<div class="single-team-content">
								<h3><?= $agent['lastname'] ?>, <?= $agent['firstname'] ?> <?= $agent['middlename'] ?>.</h3>
								<p><?= $agent['email'] ?></p>
								<ul class="d-flex align-items-center justify-content-center">
									<li class="list-inline">
										<a href="https://www.facebook.com/" target="_blank">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li class="list-inline">
										<a href="https://twitter.com/" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li class="list-inline">
										<a href="https://www.linkedin.com/" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
									<li class="list-inline">
										<a href="https://www.google.com/" target="_blank">
											<i class="bx bxl-google"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<?= $pager->links('agent', 'clientpage') ?>
		</div>
	</div><br>
	<?= view('Home/chop1/footer') ?>
	<?= view('Home/chop1/js') ?>
</body>

</html>