

<?php $__env->startSection('title', 'Tambah Mata Kuliah'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Tambah Mata Kuliah</h1>

    <form action="<?php echo e(route('matakuliah.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
            <input type="text" name="kode_mk" id="kode_mk" class="form-control" placeholder="Contoh: 12KBQ1" required>
        </div>

        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" id="nama_mk" class="form-control" placeholder="Contoh: Kecerdasan Buatan" required>
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">Jumlah SKS</label>
            <input type="number" name="sks" id="sks" class="form-control" placeholder="Contoh: 3" required>
        </div>

        <div class="mb-3">
            <label for="dosen" class="form-label">Nama Dosen</label>
            <input type="text" name="dosen" id="dosen" class="form-control" placeholder="Contoh: Dr. Joko Widodo" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Simpan</button>
        <a href="<?php echo e(route('matakuliah.index')); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/matakuliah/create.blade.php ENDPATH**/ ?>