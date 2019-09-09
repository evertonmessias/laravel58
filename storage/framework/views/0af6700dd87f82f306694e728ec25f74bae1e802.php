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
<tr> <td><strong>Nome</strong></td> <td><strong>Telefone</strong></td> </tr>
<tr><td><?php echo e($agenda->nome); ?></td><td><?php echo e($agenda->telefone); ?></td></tr>
<tr><td colspan="2"><a href="<?php echo e($agenda->id); ?>/edit">EDITAR</a></td></tr>
</table>
</body></html>