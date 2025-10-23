

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="text-center">
    <h2 class="fw-bold text-success mb-3">Selamat Datang di AppleSites 🍎</h2>
    <p class="text-muted">Temukan berbagai informasi menarik dan harga terbaru apel di sini!</p>

    
    <div class="alert alert-success text-start mt-4" role="alert">
        <h5 class="fw-bold"><i class="bi bi-info-circle"></i> Fakta Menarik Tentang Apel</h5>
        <ul class="mb-0">
            <li>Apel mengandung serat tinggi yang baik untuk pencernaan.</li>
            <li>Jenis apel seperti <strong>Fuji</strong> dan <strong>Malang</strong> terkenal karena rasa manisnya.</li>
            <li>Apel hijau memiliki kandungan vitamin C lebih tinggi dibanding apel merah.</li>
            <li>Makan satu apel setiap hari dapat membantu menjaga daya tahan tubuh.</li>
        </ul>
    </div>

    
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-speedometer2 fs-1 text-success"></i>
                    <h5 class="mt-3">Dashboard</h5>
                    <p class="text-muted">Lihat informasi umum seputar apel dan statistik menarik.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-list-ul fs-1 text-success"></i>
                    <h5 class="mt-3">Data Apel</h5>
                    <p class="text-muted">Lihat daftar harga dan jenis apel yang tersedia.</p>
                    <a href="<?php echo e(route('pengelolaan')); ?>" class="btn btn-outline-success btn-sm">Lihat Data</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-person-circle fs-1 text-success"></i>
                    <h5 class="mt-3">Profil</h5>
                    <p class="text-muted">Lihat dan kelola profil pengguna Anda.</p>
                    <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-success btn-sm">Buka Profil</a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="mt-5">
        <h4 class="fw-bold text-success">📈 Statistik Produksi Apel Dunia</h4>
        <p class="text-muted">Data produksi apel dari beberapa negara utama (estimasi tahunan):</p>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-success">
                <tr>
                    <th>Negara</th>
                    <th>Produksi (juta ton)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>China</td><td>41.0</td></tr>
                <tr><td>Amerika Serikat</td><td>4.6</td></tr>
                <tr><td>Turki</td><td>3.6</td></tr>
                <tr><td>Polandia</td><td>3.2</td></tr>
                <tr><td>India</td><td>2.4</td></tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\AkuCintaLaravel\pwebuts\resources\views/dashboard.blade.php ENDPATH**/ ?>