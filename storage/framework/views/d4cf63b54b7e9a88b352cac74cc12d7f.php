

<?php $__env->startSection('title', 'Profil Pengguna'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">

<div class="profile-container">
    <div class="profile-card">
        <h2>Profil Pengguna</h2>
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Icon" class="profile-icon">
        <p><strong>Nama Pengguna:</strong> <?php echo e($username); ?></p>
        <div class="nav-buttons">
            <a href="/dashboard" class="btn">Dashboard</a>
            <a href="/logout" class="btn logout">Logout</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rezha Amanda\OneDrive\Lampiran\Todolist\todolist\resources\views/profile.blade.php ENDPATH**/ ?>