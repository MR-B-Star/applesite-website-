

<?php $__env->startSection('title', 'Data Apel'); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="fw-bold text-success mb-3">📋 Daftar Harga Apel</h2>
    <p class="text-muted">Informasi harga apel berdasarkan jenisnya.</p>

    <div class="table-responsive mt-4">
        <table class="table table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Jenis Apel</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item['id']); ?></td>
                    <td><?php echo e($item['jenis']); ?></td>
                    <td>Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\AkuCintaLaravel\pwebuts\resources\views/pengelolaan.blade.php ENDPATH**/ ?>