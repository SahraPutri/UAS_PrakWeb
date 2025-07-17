

<?php $__env->startSection('title', 'Data Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Mahasiswa</h1>

    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Mahasiswa</a>

    <form action="<?php echo e(route('mahasiswa.index')); ?>" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari Nama atau NIM" value="<?php echo e(request('search')); ?>">
    </form>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mahasiswa->id); ?></td>
                    <td><?php echo e($mahasiswa->nama); ?></td>
                    <td><?php echo e($mahasiswa->nim); ?></td>
                    <td><?php echo e($mahasiswa->nomor_telepon); ?></td>
                    <td><?php echo e($mahasiswa->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('mahasiswa.show', $mahasiswa->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Detail</a>
                        <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa->id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>