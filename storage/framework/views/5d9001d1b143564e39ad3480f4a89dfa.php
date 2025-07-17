

<?php $__env->startSection('title', 'Detail Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Detail Mahasiswa</h1>

    <div class="card bg-dark text-light border-secondary">
        <div class="card-body">
            <p><strong>Nama:</strong> <?php echo e($mahasiswa->nama); ?></p>
            <p><strong>NIM:</strong> <?php echo e($mahasiswa->nim); ?></p>
            <p><strong>Nomor Telepon:</strong> <?php echo e($mahasiswa->nomor_telepon); ?></p>
            <p><strong>Email:</strong> <?php echo e($mahasiswa->email); ?></p>
        </div>
    </div>

    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary mt-3"><i class="fas fa-arrow-left"></i> Kembali</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/mahasiswa/show.blade.php ENDPATH**/ ?>