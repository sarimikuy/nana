<?php $__env->startSection('title', 'Galeri'); ?>

<?php $__env->startSection('content'); ?>
<section class="wadah">
    <h1 class="judul">Galeri <?php echo e($nama); ?></h1>

    <div class="grid-galeri">
        <?php $__empty_1 = true; $__currentLoopData = $foto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <figure class="foto">
                <img src="<?php echo e(asset('images/galeri/' . $item['file'])); ?>" alt="<?php echo e($item['judul']); ?>">
                <figcaption>
                    <strong><?php echo e($item['judul']); ?></strong>
                    <span><?php echo e($item['ket']); ?></span>
                </figcaption>
            </figure>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Belum ada foto. Tambahkan foto di folder public/images/galeri.</p>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tes\kuk\resources\views/pages/galeri.blade.php ENDPATH**/ ?>