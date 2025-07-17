

<?php $__env->startSection('title', 'Transkrip Nilai Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Transkrip Nilai Mahasiswa</h1>

    <h3>Nama Mahasiswa: <?php echo e($mahasiswa->nama); ?></h3>

    <!-- Tombol Kembali -->
    <a href="<?php echo e(route('nilaimahasiswa.index')); ?>" class="btn btn-secondary mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>

    <!-- Tabel Transkrip Nilai Mahasiswa -->
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>Matakuliah</th>
                <th>Nilai Angka</th>
                <th>Nilai Huruf</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mahasiswa->nilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($nilai->matakuliah->nama_mk); ?></td>
                    <td><?php echo e($nilai->nilai_angka); ?></td>
                    <td><?php echo e($nilai->nilai_huruf); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/nilaimahasiswa/transkrip.blade.php ENDPATH**/ ?>