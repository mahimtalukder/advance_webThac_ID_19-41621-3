<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/seqty/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 04:51:03 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links of CSS files -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/boxicons.min.css"> 
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css"> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<link rel="stylesheet" href="assets/css/meanmenu.min.css">
		<link rel="stylesheet" href="assets/css/nice-select.min.css">
		<link rel="stylesheet" href="assets/css/odometer.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
		<!-- Title -->
		<title>MT | @yield('title')</title>
    </head>

    <body>	
		<!-- Start Header Area -->
		@include('inc.topnav')


        <!-- Start Page Title Area -->
		<div class="page-title-area page-title-style-two">
			<div class="container">
				<div class="page-title-content">
					<h2>@yield('PageTitle')</h2>
					<ul>
						<li>
							<a href="{{route('home')}}">
								<i class="bx bx-home"></i>
								Home 
							</a>
						</li>
                        @yield('CurrentPage')
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contain -->
        @yield('content')
		<!-- End Banner Area -->


		<!-- Start Footer Area -->
		<footer class="footer-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<a href="index.html" class="logo">
								<img src="assets/img/logo.png" alt="Image">
							</a>

							<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consec tetur adipiscing.</p>

							<ul class="social-icon">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-linkedin-square"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Address</h3>

							<ul class="address">
								<li class="location">
									<i class="bx bxs-location-plus"></i>
									6890 Blvd, The Bronx, NY 1058 New York, USA
								</li>
								<li>
									<i class="bx bxs-envelope"></i>
									<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#e9818c858586a99a8c989d90c78a8684"><span class="__cf_email__" data-cfemail="a6cec3cacac9e6d5c3d7d2df88c5c9cb">[email&#160;protected]</span></a>
									<a href="#">skype: example</a>
								</li>
								<li>
									<i class="bx bxs-phone-call"></i>
									<a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
									<a href="tel:+1-(514)-312-6677">+1 (514) 312-6677</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Solution</h3>

							<ul class="import-link">
								<li>
									<a href="#">Secure Private Cloud</a>
								</li>
								<li>
									<a href="#">Online Backup</a>
								</li>
								<li>
									<a href="#">Secure Websites</a>
								</li>
								<li>
									<a href="#">Cyber-Security</a>
								</li>
								<li>
									<a href="#">Enterprise Networks</a>
								</li>
								<li>
									<a href="#">Collaboration</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Resources</h3>

							<ul class="import-link">
								<li>
									<a href="#">Cybersecurity Strategies</a>
								</li>
								<li>
									<a href="#">Security Advisories</a>
								</li>
								<li>
									<a href="#">Security News</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Case Studies</a>
								</li>
								<li>
									<a href="#">User Guides</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<p>
							Copyright <i class="bx bx-copyright"></i>2021 Seqty. Designed By
							<a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
						</p>
					</div>

					<div class="col-lg-6 col-md-6">
						<ul class="footer-menu">
							<li>
								<a href="privacy-policy.html" target="_blank">
									Privacy Policy
								</a>
							</li>
							<li>
								<a href="terms-conditions.html" target="_blank">
									Terms & Conditions
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Copy Right Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->


		<!-- Links of JS files -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/meanmenu.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/nice-select.min.js"></script>
		<script src="assets/js/magnific-popup.min.js"></script>
		<script src="assets/js/jarallax.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
		<script src="assets/js/odometer.min.js"></script>
		<script src="assets/js/smoothscroll.min.js"></script>
		<script src="assets/js/form-validator.min.js"></script>
		<script src="assets/js/contact-form-script.js"></script>
		<script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
		<script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/seqty/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 04:51:21 GMT -->
</html>