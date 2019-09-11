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
<tb><td>
<form action="/agenda" method="POST">
<?php echo e(csrf_field()); ?>

<p><strong>CRIAR REGISTRO</strong></p>
<p>Nome:&emsp;<input type="text" name="nome"></p>
<p>Telefone:<input type="text" name="telefone"></p><br>
<button type="submit">Enviar</button>&emsp;
<button type="button" onclick="window.history.go(-1)">Voltar</button>
</form>
</td></tr>
</table></body></html>