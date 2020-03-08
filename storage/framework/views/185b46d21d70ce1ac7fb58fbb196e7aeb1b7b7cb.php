<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<fieldset class="formulario">


<form action="/envio" enctype="multipart/form-data" method="POST">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PUT')); ?>

<p>Imagem:</p><br>
<input type="file" name="imagem"><br>
<button type="submit">Enviar</button>
</form>


</fieldset>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>