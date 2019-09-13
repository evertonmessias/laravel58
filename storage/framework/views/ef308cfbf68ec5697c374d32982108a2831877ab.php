

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<table class="tabela show">
<tr> <td><strong>Nome</strong></td> <td><strong>Telefone</strong></td></tr>
<tr><td><?php echo e($agenda->nome); ?></td><td><?php echo e($agenda->telefone); ?></td></tr>
<tr><td colspan="2">
<button type="button" onclick="window.location.href='<?php echo e($agenda->id); ?>/edit'">Editar</button>&emsp;&emsp;
<button type="button" onclick="window.location.href='<?php echo e($agenda->id); ?>/del'">Apagar</button>

</td></tr>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>