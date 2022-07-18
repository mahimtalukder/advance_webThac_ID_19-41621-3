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
		<title>MT | <?php echo $__env->yieldContent('title'); ?></title>
    </head>

    <body>	
		<!-- Start Header Area -->
		<?php echo $__env->make('inc.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2><?php echo $__env->yieldContent('PageTitle'); ?></h2>
					<ul>
						<li>
							<a href="<?php echo e(route('home')); ?>">
								<i class="bx bx-home"></i>
								Home 
							</a>
						</li>
                        <?php echo $__env->yieldContent('CurrentPage'); ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contain -->
        <?php echo $__env->yieldContent('content'); ?>
		<!-- End Banner Area -->


		<!-- Start Footer Area -->
		<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- End Footer Area -->
		
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
</html><?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_2\resources\views/layouts/app2.blade.php ENDPATH**/ ?>