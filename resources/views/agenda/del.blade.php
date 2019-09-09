<html>
<head>
    <title>DELETAR</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/estilo">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/funcoes"></script>
</head>
<body>
<table class="tabela">
<tr><td>
<form action="/destroy/{{$agenda->id}}" method="POST">
{{csrf_field()}}
{{method_field('DELETE')}}
<p><strong>Deletando: {{$agenda->id}}</strong></p>
<p>Tem Certeza ?</p>
<button type="submit">SIM</button>&emsp;
<button type="button" onclick="window.history.go(-1)">NÃO</button>
</form>
</td></tr>
</table></body></html>