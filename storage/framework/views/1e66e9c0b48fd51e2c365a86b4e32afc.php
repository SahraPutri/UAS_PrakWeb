

<?php $__env->startSection('title', 'Edit Mata Kuliah'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Edit Mata Kuliah</h1>

    <form action="<?php echo e(route('matakuliah.update', $matakuliah->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
            <input type="text" name="kode_mk" id="kode_mk" class="form-control" value="<?php echo e($matakuliah->kode_mk); ?>" required>
        </div>

        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" id="nama_mk" class="form-control" value="<?php echo e($matakuliah->nama_mk); ?>" required>
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" name="sks" id="sks" class="form-control" value="<?php echo e($matakuliah->sks); ?>" required>
        </div>

        <div class="mb-3">
            <label for="dosen" class="form-label">Nama Dosen</label>
            <input type="text" name="dosen" id="dosen" class="form-control" value="<?php echo e($matakuliah->dosen); ?>" required>
        </div>

        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Update</button>
        <a href="<?php echo e(route('matakuliah.index')); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/matakuliah/edit.blade.php ENDPATH**/ ?>