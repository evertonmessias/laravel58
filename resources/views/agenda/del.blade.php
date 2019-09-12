@extends('layout')

@section('content')

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
</table>

@endsection