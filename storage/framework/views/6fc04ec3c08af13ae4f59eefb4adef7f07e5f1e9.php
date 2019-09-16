<link href="<?php echo e(asset('css/estilo.css')); ?>" rel="stylesheet">
<div class="container">
    <?php echo $__env->make('menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
</div>