

<?php $__env->startSection('title', 'Data Nilai Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Nilai Mahasiswa</h1>

    <!-- Tombol Tambah Nilai Mahasiswa -->
    <a href="<?php echo e(route('nilaimahasiswa.create')); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Nilai Mahasiswa</a>

    <!-- Form Pencarian Nilai Mahasiswa -->
    <form action="<?php echo e(route('nilaimahasiswa.index')); ?>" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari Nama atau NIM Mahasiswa" value="<?php echo e(request('search')); ?>">
    </form>

    <!-- Tabel Data Nilai Mahasiswa -->
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mahasiswa</th>
                <th>Matakuliah</th>
                <th>Nilai</th>
                <th>NIM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $nilaimahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($nilai->id); ?></td>
                    <td><?php echo e($nilai->mahasiswa->nama); ?></td>
                    <td><?php echo e($nilai->matakuliah->nama_mk); ?></td>
                    <td><?php echo e($nilai->nilai_angka); ?> (<?php echo e($nilai->nilai_huruf); ?>)</td>
                    <td><?php echo e($nilai->mahasiswa->nim); ?></td>
                    <td>
                        <!-- Tombol Lihat Transkrip -->
                        <a href="<?php echo e(route('transkrip', $nilai->mahasiswa->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat Transkrip</a>
                        
                        <!-- Tombol Edit -->
                        <a href="<?php echo e(route('nilaimahasiswa.edit', $nilai->id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        
                        <!-- Form Hapus Data Nilai Mahasiswa -->
                        <form action="<?php echo e(route('nilaimahasiswa.destroy', $nilai->id)); ?>" method="POST" style="display:inline;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
        <i class="fas fa-trash-alt"></i> Hapus
    </button>
</form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/nilaimahasiswa/index.blade.php ENDPATH**/ ?>