
<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<script>document.getElementById("home").className = "nav-link active";</script>
	<section class="banner-area bg-1">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="banner-content">
						<span class="top-title">World Class Cyber Security</span>
						<h1>Powerful Protection Easy Recovery</h1>
						<p>Cybersecurity is the protection  from the theft to protect of our computer systems and networks or being damaged of our hardware and software.</p>
						<div class="banner-btn">
							<a href="<?php echo e(route('contact')); ?>" class="default-btn">
								<span>Contact Us</span>
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12">
					<div class="banner-image">
						<img src="assets/img/banner/banner_1.jpg" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_2\resources\views/page/index/landing_page.blade.php ENDPATH**/ ?>