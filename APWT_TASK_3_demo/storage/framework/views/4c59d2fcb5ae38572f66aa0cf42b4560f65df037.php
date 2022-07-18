
<?php $__env->startSection('title', 'Sign In'); ?>
<?php $__env->startSection('contant'); ?>
    <?php if(!empty($message)): ?>
        <h4 class="text-primary"><?php echo e($message); ?></h4>
    <?php endif; ?>
    <?php if(!empty($error_message)): ?>
        <h4 class="text-danger"><?php echo e($error_message); ?></h4>
    <?php endif; ?>
    <h4>Hello! let's get started</h4>
    <h6 class="font-weight-light">Sign in to continue.</h6>
    <form class="pt-3" action="<?php echo e(route('employeeSignInSubmitted')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <input class="form-control form-control-lg" name="username" placeholder="Username">
            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="font-weight-light text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="font-weight-light text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                SIGN IN
            </button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
            <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input">
                Keep me signed in
            </label>
            </div>
            <a href="#" class="auth-link text-black">Forgot password?</a>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Don't have an account? <a href="<?php echo e(route('employeeCreate')); ?>" class="text-primary">Create</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.signInLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT_TASK_3\resources\views/employee/signIn.blade.php ENDPATH**/ ?>