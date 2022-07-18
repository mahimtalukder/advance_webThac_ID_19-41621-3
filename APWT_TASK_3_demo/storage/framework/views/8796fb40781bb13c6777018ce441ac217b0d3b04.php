
<?php $__env->startSection('title', 'Teams'); ?>
<?php $__env->startSection('PageTitle', 'Teams'); ?>
<?php $__env->startSection('CurrentPage'); ?>
    <li class="active">Teams</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <script>document.getElementById("teams").className = "nav-link active";</script>
			<!-- Start Team Area -->
			<section class="team-area pt-100 pb-70">
				<div class="container">
					<div class="section-title">
						<span>Professionals</span>
						<h2>Meet our skilled team</h2>
					</div>
	
					<div class="row">
						<?php $__currentLoopData = $all_team_member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-4 col-sm-6">
								<div class="single-team">
									<img src="<?php echo $member['picture'] ?>" alt="Image">

									<div class="team-content">
										<h3><?php echo $member['name'] ?></h3>
										<span><?php echo $member['designation'] ?></span>

										<ul>
											<li>
												<a href="<?php echo $member['facebook'] ?>" target="_blank">
													<i class="bx bxl-facebook"></i>
												</a>
											</li>
											<li>
												<a href="<?php echo $member['linkedin'] ?>" target="_blank">
													<i class="bx bxl-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</section>
			<!-- End Team Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT_TASK_3\resources\views/teams.blade.php ENDPATH**/ ?>