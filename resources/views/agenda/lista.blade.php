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
<tr> <td><strong>Id</strong></td><td><strong>Nome</strong></td>
 <td><strong>Telefone</strong></td><td><strong>E-Mail</strong></td> </tr>
@foreach($agenda as $s)
@foreach($anotacao as $t)
<tr>
<td><a href="/show/{{$s->id}}">{{$s->id}}</a></td>
 <td>{{$s->nome}}</td> <td>{{$s->telefone}}</td>
 <td><?php
 if(e($s->id) == e($t->agendas_id)){ 
 echo e($t->email); 
} 
 ?></td> </tr>
@endforeach
@endforeach
<tr> <td colspan="4"><a href="/criar">[INSERIR]</a></td></tr>
</table></body></html>