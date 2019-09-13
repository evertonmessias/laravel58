@extends('layouts.app')

@section('content')

@include('layout')

<table class="tabela show">
<tr> <td><strong>Nome</strong></td> <td><strong>Telefone</strong></td></tr>
<tr><td>{{$agenda->nome}}</td><td>{{$agenda->telefone}}</td></tr>
<tr><td colspan="2">
<button type="button" onclick="window.location.href='{{$agenda->id}}/edit'">Editar</button>&emsp;&emsp;
<button type="button" onclick="window.location.href='{{$agenda->id}}/del'">Apagar</button>

</td></tr>
</table>

@endsection