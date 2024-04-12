<!DOCTYPE html>
<html lang="en">

<?= view('Client/chop/head') ?>

<body>

	<div class="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>


	<div class="header-area">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6 col-sm-3 col-md-3">
					<div class="header-left-bar-text">
						<ul class="list-inline">
							<li>
								<a href="https://www.facebook.com/" target="_blank">
									<i class="bx bxl-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/" target="_blank">
									<i class="bx bxl-twitter"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/" target="_blank">
									<i class="bx bxl-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.google.com/" target="_blank">
									<i class="bx bxl-google"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-sm-9 col-md-9">
					<div class="header-right-content text-end">
						<ul class="list-inline">
							<li class="d-inline">
								<img src="client/assets/images/phone.svg" alt="Phone">
								<a href="tel:(+0188)7689870859">09927703098</a>
							</li>
							<li class="d-inline">
								<img src="client/assets/images/email.svg" alt="Email">
								<a
									href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#4e272028210e272021203a262b232b3d602d2123"><span
										class="__cf_email__"
										data-cfemail="0940676f6649606766677d616c646c7a276a6664"></span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="navbar-area navbar-area-three">
		<div class="main-responsive-nav">
			<div class="container">
				<div class="main-responsive-menu">
				<div class="logo">
					<a href="index.html">
						<h3 style="font-family: Arial Black; color: #013781;">ALLIANZ PNB</h3>
					</a>
				</div>
				</div>
			</div>
		</div>
		<div class="main-navbar main-navbar-three">
			<div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="index.html">
						<h3 style="font-family: Arial Black; color: #013781;">ALLIANZ PNB</h3>
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a href="/" class="nav-link ">Home</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link active">
									Pages
									<i class="bx bx-down-arrow-alt"></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="/ClientService" class="nav-link active">Services</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											User Pages
											<i class="bx bx-down-arrow-alt"></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="/registers" class="nav-link">Register</a>
											</li>
											<li class="nav-item">
												<a href="/login" class="nav-link">Forgot Password</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="/terms" class="nav-link">Terms and Conditions</a>
									</li>
									<li class="nav-item">
										<a href="/policy" class="nav-link">Privacy Notice</a>
									</li>
									<li class="nav-item">
										<a href="/comingsoon" class="nav-link">Coming Soon</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Contact Us</a>
							</li>
						</ul>
						<div class="others-options d-flex align-items-center">
							<div class="option-item">
								<button class="searchbtn" type="button">
									<i class="bx bx-search"></i>
								</button>
							</div>
							<div class="option-item">
								<a href="/login" class="default-btn navbar-btn-style">Login</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="others-option-for-responsive">
			<div class="container">
				<div class="dot-menu">
					<div class="inner">
						<div class="circle circle-one"></div>
						<div class="circle circle-two"></div>
						<div class="circle circle-three"></div>
					</div>
				</div>
				<div class="container">
					<div class="option-inner">
						<div class="others-options d-flex align-items-center">
							<div class="option-item">
								<button class="searchbtn" type="button">
									<i class="bx bx-search"></i>
								</button>
							</div>
							<div class="option-item">
								<a href="/login" class="default-btn btn-style-2">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="search-area">
		<div class="container">
			<button type="button" class="close-searchbox">
				<i class="bx bx-x"></i>
			</button>
			<form action="#" class="search-form">
				<div class="form-group">
					<input type="search" placeholder="Search Here">
				</div>
			</form>
		</div>
	</div>

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
                    <img src="<?= isset ($agent['agentprofile']) ? base_url('/uploads/' . $agent['agentprofile']) : '' ?>" alt="team" >
                    </div>
                    <div class="single-team-content">
                    <h3><?= $agent['Agentfullname'] ?></h3>
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

    <div class="pagination-area">
        <a href="services.html" class="prev page-numbers">
        <i class="bx bx-chevron-left"></i>
        </a>
        <span class="page-numbers current" aria-current="page">01</span>
        <a href="services.html" class="page-numbers">02</a>
        <a href="services.html" class="page-numbers">03</a>
        <a href="services.html" class="prev page-numbers">
        <i class="bx bx-chevron-right"></i>
        </a>
        </div>
    </div>
</div><br>

    <?= view('Client/chop/footer') ?>
	<?= view('Client/chop/js') ?>


</body>
</html>