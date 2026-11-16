<?php $__env->startSection('title', 'Tentang Saya'); ?>

<?php $__env->startSection('content'); ?>
<section class="wadah">
    <h1 class="judul">Tentang <?php echo e($nama); ?></h1>

    <h2 class="sub">Data diri</h2>
    <dl class="data">
        <?php $__currentLoopData = $profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $isi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <dt><?php echo e($label); ?></dt>
            <dd><?php echo e($isi); ?></dd>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </dl>

    <h2 class="sub">Keahlian</h2>
    <ul class="chip">
        <?php $__currentLoopData = $keahlian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2 class="sub">Hobi</h2>
    <ul class="daftar">
        <?php $__currentLoopData = $hobi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tes\kuk\resources\views/pages/tentang.blade.php ENDPATH**/ ?>