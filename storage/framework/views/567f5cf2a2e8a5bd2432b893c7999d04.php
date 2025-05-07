

<?php $__env->startSection('title', 'Login Bebas'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<div class="container">
    <h2>Login Aja</h2>
    <?php if($errors->any()): ?>
        <p style="color:red;"><?php echo e($errors->first()); ?></p>
    <?php endif; ?>
    <form method="POST" action="/login">
        <?php echo csrf_field(); ?>
        <input type="text" name="username" placeholder="Masukkan Nama" required><br><br>
        <input type="password" name="password" placeholder="Masukkan Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rezha Amanda\OneDrive\Lampiran\Todolist\todolist\resources\views/login.blade.php ENDPATH**/ ?>