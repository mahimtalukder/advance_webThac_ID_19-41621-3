
<?php $__env->startSection('title', 'Services'); ?>
<?php $__env->startSection('PageTitle', 'Services'); ?>
<?php $__env->startSection('CurrentPage'); ?>
    <li class="active">Services</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <script>document.getElementById("service").className = "nav-link active";</script>
    <section class="safety-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Cybersecurity services</span>
                <h2>You can protect your organization’s cybersecurity by services us</h2>
            </div>

            <div class="row">
                <?php $__currentLoopData = $all_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-safety overly-one">
                            <div class="overly-two">
                                <img src="<?php echo $service['picture'] ?>" alt="Image">
                                <a href="<?php echo $service['link'] ?>">
                                    <h3><?php echo $service['name'] ?></h3>
                                </a>
                                <p><?php echo $service['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT_TASK_3\resources\views/product/service.blade.php ENDPATH**/ ?>