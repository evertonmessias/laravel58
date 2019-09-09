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
<tr><td>
<form action="/update/{{$agenda->id}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<p><strong>Editando: {{$agenda->id}}</strong></p>
<p>Nome:&emsp;<input type="text" name="nome" value="{{$agenda->nome}}"></p>
<p>Telefone:<input type="text" name="telefone" value="{{$agenda->telefone}}"></p><br>
<button type="submit">Enviar</button>
</form>
</td></tr>
</table></body></html>