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
@foreach($agenda as $s)
<tr>
<td><?php print "<a href='/show/".e($s->id)."'>".e($s->id)."</a>";?></td>
 <td>{{$s->nome}}</td> <td>{{$s->telefone}}</td> </tr>
@endforeach
</table></body></html>