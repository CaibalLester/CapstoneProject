<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ALLIANZ PNB</title>
	<link rel="stylesheet" href="client/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="client/vendors/owl.carousel/css/owl.carousel.css">
	<link rel="stylesheet" href="client/vendors/owl.carousel/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="client/vendors/aos/css/aos.css">
	<link rel="stylesheet" href="client/vendors/jquery-flipster/css/jquery.flipster.css">
	<link rel="stylesheet" href="client/css/style.css">
	<link rel="shortcut icon" href="client/images/allianzlogo1.png" />
	<style>
		body {
        background-image: url('home/images/allbg.png');
        background-size: 1000px; 
        background-repeat: repeat; 
		}
  	</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="mobile-menu-overlay"></div>
	<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #203864;">
		<div class="container">
			<a class="navbar-brand" href="#">
				<h3 class="font-weight-medium">ALLIANZ PNB</h3>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
				aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
					<h3 class="font-weight-medium">ALLIANZ PNB MIMAROPA</h3>

					<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
				</div>
				<ul class="navbar-nav ml-auto align-items-center">
					<li class="nav-item">
						<a class="nav-link" href="/ClientPage">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link " href="#offer">Offers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-secondary" href="#">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page-body-wrapper">
		<section class="pricing-list" id="offer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-4"> <!-- Add class col-sm-4 to create space on the left -->
						<!-- First pricing box aligned to the left -->
						<div class="pricing-box">
							<img src="client/images/well.jpg" alt="starter" style="max-width: 100%; height: auto;">
							<h5 class="text-amount mb-4 mt-2">100M Coverage</h5>
							<h2 class="font-weight-medium title-text">Allianz Well</h2>
						</div>
					</div>
					<div class="col-sm-8"> <!-- Add class col-sm-4 to create space on the right -->
						<!-- Second pricing box -->
						<div class="pricing-box" style="text-align: justify;">
							<h5 class="text-dark">Allianz Well! gives you health insurance coverage for in-patient hospitalization for COVID-19 and other illnesses. With an annual plan limit of Php 100 Million, you can now rest assured that you are secured should unforeseen medical expenses strike. </h5>	
						</div>
						<div class="pricing-box">
							<select id="select-options">
								<option value="option1">Agent 1</option>
								<option value="option2">Agent 2</option>
								<option value="option3">Agent 3</option>
							</select>
							<button class="btn btn-primary">Inquire</button>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<br><br><br><br><br><br>
	</div>

	<script src="client/vendors/base/vendor.bundle.base.js"></script>
	<script src="client/vendors/owl.carousel/js/owl.carousel.js"></script>
	<script src="client/vendors/aos/js/aos.js"></script>
	<script src="client/vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
	<script src="client/js/template.js"></script>
</body>

</html>