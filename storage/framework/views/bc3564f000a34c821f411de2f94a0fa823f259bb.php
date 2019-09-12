

<?php $__env->startSection('content'); ?>

<table class="tabela show">
<tr> <td><strong>Nome</strong></td> <td><strong>Telefone</strong></td></tr>
<tr><td><?php echo e($agenda->nome); ?></td><td><?php echo e($agenda->telefone); ?></td></tr>
<tr><td colspan="2">
<a href="/lista">[VOLTAR]</a>&emsp;
<a href="<?php echo e($agenda->id); ?>/edit">[EDITAR]</a>&emsp;
<a href="<?php echo e($agenda->id); ?>/del">[APAGAR]</a>
</td></tr>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>