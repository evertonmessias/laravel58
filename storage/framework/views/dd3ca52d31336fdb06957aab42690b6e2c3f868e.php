

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<fieldset class="formulario criar">
<form action="/update/<?php echo e($agenda->id); ?>" method="POST">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PUT')); ?>

<p><strong>Editando: <?php echo e($agenda->id); ?></strong></p>
<p>Nome:&emsp;<input type="text" name="nome" value="<?php echo e($agenda->nome); ?>"></p>
<p>Telefone:<input type="text" name="telefone" value="<?php echo e($agenda->telefone); ?>"></p><br>
<button type="submit">Enviar</button><br>
</form>
</fieldset>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>