@extends('layout')

@section('content')

<table class="tabela show">
<tr> <td><strong>Nome</strong></td> <td><strong>Telefone</strong></td></tr>
<tr><td>{{$agenda->nome}}</td><td>{{$agenda->telefone}}</td></tr>
<tr><td colspan="2">
<a href="/lista">[VOLTAR]</a>&emsp;
<a href="{{$agenda->id}}/edit">[EDITAR]</a>&emsp;
<a href="{{$agenda->id}}/del">[APAGAR]</a>
</td></tr>
</table>

@endsection