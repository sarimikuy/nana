<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero wadah">
    <p class="sapaan">Halo, saya</p>
    <h1 class="nama"><?php echo e($nama); ?></h1>
    <p class="peran"><?php echo e($peran); ?></p>
    <div class="tombol-grup">
        <a href="<?php echo e(route('tentang')); ?>" class="tombol">Kenali saya</a>
        <a href="<?php echo e(route('galeri')); ?>" class="tombol tombol-garis">Lihat galeri</a>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tes\kuk\resources\views/pages/beranda.blade.php ENDPATH**/ ?>