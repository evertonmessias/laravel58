<html>
<head>
    <title>LISTA</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/estilo">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/funcoes"></script>
</head>
<body>
<table class="tabela">
<tr> <td><strong>Id</strong></td><td><strong>Nome</strong></td> <td><strong>Telefone</strong></td> </tr>
<?php $__currentLoopData = $agenda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><a href="/show/<?php echo e($s->id); ?>"><?php echo e($s->id); ?></a></td>
 <td><?php echo e($s->nome); ?></td> <td><?php echo e($s->telefone); ?></td> </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tr> <td colspan="3"><a href="/criar">[INSERIR]</a></td></tr>
</table></body></html>