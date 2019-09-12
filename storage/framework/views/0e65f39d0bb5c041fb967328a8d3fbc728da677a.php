<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS - public/css/app.css-->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/estilo.css')); ?>" rel="stylesheet">
        <!-- caso não recebe nenhum valor o título da página será "Projeto 5.8"-->
        <title><?php echo $__env->yieldContent('title','Projeto 5.8'); ?></title>
    </head>

    <body>
        <div class="container">
            <?php echo $__env->make('menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html>