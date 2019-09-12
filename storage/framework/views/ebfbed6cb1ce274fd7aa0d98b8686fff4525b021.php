

<?php $__env->startSection('content'); ?>

<table class="tabela">
<tr><td>
<form action="/destroy/<?php echo e($agenda->id); ?>" method="POST">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('DELETE')); ?>

<p><strong>Deletando: <?php echo e($agenda->id); ?></strong></p>
<p>Tem Certeza ?</p>
<button type="submit">SIM</button>&emsp;
<button type="button" onclick="window.history.go(-1)">NÃO</button>
</form>
</td></tr>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>