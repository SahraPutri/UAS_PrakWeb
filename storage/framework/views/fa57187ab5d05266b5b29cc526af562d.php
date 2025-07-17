

<?php $__env->startSection('title', 'Edit Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Edit Mahasiswa</h1>

    <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo e($mahasiswa->nama); ?>" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" id="nim" class="form-control" value="<?php echo e($mahasiswa->nim); ?>" required>
        </div>

        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" value="<?php echo e($mahasiswa->nomor_telepon); ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo e($mahasiswa->email); ?>" required>
        </div>

        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Update</button>
        <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>