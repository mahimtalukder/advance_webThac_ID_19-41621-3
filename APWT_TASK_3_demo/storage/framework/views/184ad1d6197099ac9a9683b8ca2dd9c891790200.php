<?php $employee = session()->get('employee')?>

<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('picture', $employee['picture']); ?>
<?php $__env->startSection('name', $employee['name']); ?>
<?php $__env->startSection('email', $employee['email']); ?>
<?php $__env->startSection('contant'); ?> 
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.employeeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_3\resources\views/employee/dashboard.blade.php ENDPATH**/ ?>