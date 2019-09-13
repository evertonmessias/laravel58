

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<fieldset class="formulario del">
<form action="/destroy/<?php echo e($agenda->id); ?>" method="POST">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('DELETE')); ?>

<p><strong>Deletando: <?php echo e($agenda->id); ?></strong></p>
<p>Tem Certeza ?</p><br>
<button type="submit">SIM</button><br>
</form>
</fieldset>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>