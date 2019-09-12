

<?php $__env->startSection('content'); ?>

<fieldset class="formulario">
<form action="/agenda" method="POST">
<?php echo e(csrf_field()); ?>

<p><strong>CRIAR REGISTRO</strong></p><br>
<p>Nome:<input type="text" name="nome"></p>
<p>Telefone:<input type="text" name="telefone"></p>
<button type="submit">Enviar</button>&emsp;
<button type="button" onclick="window.history.go(-1)">Voltar</button>
</fieldset>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>