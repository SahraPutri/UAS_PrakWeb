

<?php $__env->startSection('title', 'Tambah Nilai Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Tambah Nilai Mahasiswa</h1>

    <form action="<?php echo e(route('nilaimahasiswa.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control" required>
                <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($mahasiswa->id); ?>"><?php echo e($mahasiswa->nama); ?> (<?php echo e($mahasiswa->nim); ?>)</option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="mata_kuliah_id" class="form-label">Mata Kuliah</label>
            <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control" required>
                <?php $__currentLoopData = $matakuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($matakuliah->id); ?>"><?php echo e($matakuliah->nama_mk); ?> (<?php echo e($matakuliah->kode_mk); ?>)</option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="nilai_angka" class="form-label">Nilai Angka</label>
            <input type="number" name="nilai_angka" id="nilai_angka" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nilai_huruf" class="form-label">Nilai Huruf</label>
            <input type="text" name="nilai_huruf" id="nilai_huruf" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Simpan</button>
        <a href="<?php echo e(route('nilaimahasiswa.index')); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/nilaimahasiswa/create.blade.php ENDPATH**/ ?>