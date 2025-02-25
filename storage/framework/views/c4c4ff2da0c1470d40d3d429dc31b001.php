<?php $__env->startSection('content'); ?>

<h1>Login</h1>
<br><br>
<form action="<?php echo e(route('authenticate')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label for="email">Email Address</label><br>
    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required><br>
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color: red;"><?php echo e($message); ?></span><br>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>

    <label for="password">Password</label><br>
    <input type="password" id="password" name="password" required autocomplete="off"><br>
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color: red;"><?php echo e($message); ?></span><br>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>

    <button type="submit">Login</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\windy\e-poin\resources\views/auth/login.blade.php ENDPATH**/ ?>