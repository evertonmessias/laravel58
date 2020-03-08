<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<fieldset class="formulario contato">
<form action="/envio/<?php echo e($agenda->id); ?>" enctype="multipart/form-data" method="POST">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PUT')); ?>

<p><strong>Inserir detalhes para : &emsp; <?php echo e($agenda->nome); ?></strong></p><br>
<p>E-Mail:<input type="text" name="email" value="<?php echo e($agenda->anotacao['email']); ?>"></p>
<p>Imagem:</p><br>
<input type="file" name="imagem"><br>
<button type="submit">Enviar</button>
<button type="button" onclick="window.history.go(-1);">Voltar</button><br>
</form><br>
</fieldset>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>