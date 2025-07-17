

<?php $__env->startSection('title', 'Detail Mata Kuliah'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Detail Mata Kuliah</h1>

    <div class="card bg-dark text-light border-secondary">
        <div class="card-body">
            <p><strong>Kode Mata Kuliah:</strong> <?php echo e($matakuliah->kode_mk); ?></p>
            <p><strong>Nama Mata Kuliah:</strong> <?php echo e($matakuliah->nama_mk); ?></p>
            <p><strong>Jumlah SKS:</strong> <?php echo e($matakuliah->sks); ?></p>
            <p><strong>Nama Dosen:</strong> <?php echo e($matakuliah->dosen); ?></p>
        </div>
    </div>

    <a href="<?php echo e(route('matakuliah.index')); ?>" class="btn btn-secondary mt-3"><i class="fas fa-arrow-left"></i> Kembali</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/matakuliah/show.blade.php ENDPATH**/ ?>