<html>
<head>
    <title>DESTALHES</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/estilo">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/funcoes"></script>
</head>
<body>
<table class="tabela">
<tr> <td><strong>Nome</strong></td> <td><strong>Telefone</strong></td> </tr>
<tr><td><?php echo e($agenda->nome); ?></td><td><?php echo e($agenda->telefone); ?></td></tr>
<tr><td colspan="2">
<a href="/lista">[VOLTAR]</a>&emsp;
<a href="<?php echo e($agenda->id); ?>/edit">[EDITAR]</a>&emsp;
<a href="<?php echo e($agenda->id); ?>/del">[APAGAR]</a>
</td></tr>
</table>
</body></html>