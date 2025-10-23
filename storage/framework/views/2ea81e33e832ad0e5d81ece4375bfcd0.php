<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #28a745;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo e(route('dashboard')); ?>">🍎 AppleSites</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo e(route('dashboard')); ?>" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="<?php echo e(route('pengelolaan')); ?>" class="nav-link">Data Apel</a></li>
                <li class="nav-item"><a href="<?php echo e(route('profile')); ?>" class="nav-link">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\AkuCintaLaravel\pwebuts\resources\views/components/navbar.blade.php ENDPATH**/ ?>