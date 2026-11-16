<header class="header">
    <div class="wadah header-isi">
        <a href="<?php echo e(route('beranda')); ?>" class="logo">Profil Saya</a>
        <nav class="menu">
            <a href="<?php echo e(route('beranda')); ?>"  class="<?php echo e(request()->routeIs('beranda') ? 'aktif' : ''); ?>">Beranda</a>
            <a href="<?php echo e(route('tentang')); ?>"  class="<?php echo e(request()->routeIs('tentang') ? 'aktif' : ''); ?>">Tentang</a>
            <a href="<?php echo e(route('galeri')); ?>"   class="<?php echo e(request()->routeIs('galeri') ? 'aktif' : ''); ?>">Galeri</a>
        </nav>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\tes\kuk\resources\views/partials/header.blade.php ENDPATH**/ ?>