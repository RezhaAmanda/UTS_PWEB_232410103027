

<?php $__env->startSection('title', 'Pengelolaan ToDo List'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pengelolaan.css')); ?>">

<div class="dashboard-container">
    <div class="nav-links" style="text-align: right; margin-bottom: 20px;">
        <a href="/dashboard" class="nav-btn">Dashboard</a>
        <a href="/profile" class="nav-btn">Profil</a>
        <a href="/logout" class="nav-btn logout">Logout</a>
    </div>

    <div class="dashboard-header">
        <img src="https://static.vecteezy.com/system/resources/previews/014/457/026/original/notebook-label-to-do-list-icon-clipart-in-cartoon-animated-vector.jpg" alt="ToDo Icon" class="dashboard-icon">
        <h1>Pengelolaan ToDo List</h1>
        <p>Tambah dan kelola daftar tugasmu secara instan.</p>
    </div>

    <?php if(session('edit_index') !== null): ?>
        
        <form action="/pengelolaan/update/<?php echo e(session('edit_index')); ?>" method="POST" class="todo-form">
            <?php echo csrf_field(); ?>
            <input type="text" name="todo" value="<?php echo e(session('edit_value')); ?>" required>
            <button type="submit" class="btn">Update</button>
        </form>
    <?php else: ?>
        
        <form action="/pengelolaan/tambah" method="POST" class="todo-form">
            <?php echo csrf_field(); ?>
            <input type="text" name="todo" placeholder="Tugas baru..." required>
            <button type="submit" class="btn">Tambah</button>
        </form>
    <?php endif; ?>

    <?php if(session('todos') && count(session('todos')) > 0): ?>
        <ul class="todo-list">
            <?php $__currentLoopData = session('todos'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="todo-item">
                    <?php echo e($todo); ?>

                    <div>
                        <form action="/pengelolaan/edit/<?php echo e($index); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-small">Edit</button>
                        </form>
                        <form action="/pengelolaan/hapus/<?php echo e($index); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn logout btn-small">Hapus</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p class="no-task">Belum ada tugas.</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rezha Amanda\OneDrive\Lampiran\Todolist\todolist\resources\views/pengelolaan.blade.php ENDPATH**/ ?>