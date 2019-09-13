

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<fieldset class="formulario criar">
    <form action="/agenda" method="POST">
        <?php echo e(csrf_field()); ?>

        <p><strong>CRIAR REGISTRO</strong></p><br>
        <p>Nome:<input type="text" name="nome"></p>
        <p>Telefone:<input type="text" name="telefone"></p>
        <button type="submit">Enviar</button>
        <br>
</fieldset>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>