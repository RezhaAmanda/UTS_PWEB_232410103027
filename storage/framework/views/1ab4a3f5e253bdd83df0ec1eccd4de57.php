

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">

<div class="dashboard-container">
    <div class="dashboard-header">
        <img src="https://static.vecteezy.com/system/resources/previews/014/457/026/original/notebook-label-to-do-list-icon-clipart-in-cartoon-animated-vector.jpg" alt="ToDo Icon" class="dashboard-icon">
        <h1>Halo, <?php echo e(session('username')); ?>!</h1>
        <p>Selamat datang di ToDo List. Kelola tugas harianmu dengan mudah dan efisien.</p>
    </div>

    <div class="dashboard-nav">
        <a href="/profile" class="btn">Profil</a>
        <a href="/pengelolaan" class="btn">Pengelolaan</a>
        <a href="/logout" class="btn logout">Logout</a>
    </div>

    <section class="blog-section">
        <h2>Daftar Blog / Kegiatan</h2>
        <div class="blog-list">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="blog-card">
                    <h3><?php echo e($blog['title']); ?></h3>
                    <p><?php echo e($blog['content']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rezha Amanda\OneDrive\Lampiran\Todolist\todolist\resources\views/dashboard.blade.php ENDPATH**/ ?>