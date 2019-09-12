@extends('layout')

@section('content')

<table class="tabela">
<tr><td>
<form action="/update/{{$agenda->id}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<p><strong>Editando: {{$agenda->id}}</strong></p>
<p>Nome:&emsp;<input type="text" name="nome" value="{{$agenda->nome}}"></p>
<p>Telefone:<input type="text" name="telefone" value="{{$agenda->telefone}}"></p><br>
<button type="submit">Enviar</button>&emsp;
<button type="button" onclick="window.history.go(-1)">Voltar</button>
</form>
</td></tr>
</table>

@endsection