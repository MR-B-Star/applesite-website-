

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
<div class="text-center">
    <h2 class="fw-bold text-success mb-3">👤 Profil Pengguna</h2>
    <p class="text-muted">Kelola akun Anda di AppleSites.</p>

    <div class="card mx-auto mt-4 shadow-sm" style="max-width: 400px;">
        <div class="card-body">
            <p><strong>Nama:</strong> Admin Apel</p>
            <p><strong>Email:</strong> admin@applesites.com</p>

            <hr>
            
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\AkuCintaLaravel\pwebuts\resources\views/profile.blade.php ENDPATH**/ ?>