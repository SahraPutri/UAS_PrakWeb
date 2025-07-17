

<?php $__env->startSection('title', 'Data Mata Kuliah'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Mata Kuliah</h1>

    <a href="<?php echo e(route('matakuliah.create')); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Mata Kuliah</a>

    <form action="<?php echo e(route('matakuliah.index')); ?>" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari Kode MK" value="<?php echo e(request('search')); ?>">
    </form>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Nama Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $matakuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($matakuliah->id); ?></td>
                    <td><?php echo e($matakuliah->kode_mk); ?></td>
                    <td><?php echo e($matakuliah->nama_mk); ?></td>
                    <td><?php echo e($matakuliah->sks); ?></td>
                    <td><?php echo e($matakuliah->dosen); ?></td>
                    <td>
                        <a href="<?php echo e(route('matakuliah.show', $matakuliah->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Detail</a>
                        <a href="<?php echo e(route('matakuliah.edit', $matakuliah->id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <form action="<?php echo e(route('matakuliah.destroy', $matakuliah->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SahraPutri\PrakWeb_UAS\sistem-nilai\resources\views/matakuliah/index.blade.php ENDPATH**/ ?>