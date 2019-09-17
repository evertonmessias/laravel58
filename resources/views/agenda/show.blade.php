@extends('layouts.app')

@section('content')

@include('layout')

<table class="tabela show">
<tr><td><strong>Nome</strong></td><td><strong>Telefone</strong></td>
<td><strong>E-Mail</strong>&emsp;&emsp;(editar detalhes)</td> </tr>
<tr><td>{{$agenda->nome}}</td><td>{{$agenda->telefone}}</td>
<td>
 <?php
 if (e($agenda->anotacao['email'])) {
     echo "<a href='".e($agenda->id)."/anotacao'>".e($agenda->anotacao['email'])."</a>";
     }
     else{
        echo "<a href='".e($agenda->id)."/anotacao'>&nbsp;sem e-mail !</a>";
     } 
 ?>
 </td>
</tr>
<tr><td colspan="3">
<button type="button" onclick="window.location.href='{{$agenda->id}}/edit'">Editar</button>&emsp;&emsp;
<button type="button" onclick="window.location.href='{{$agenda->id}}/del'">Apagar</button>

</td></tr>
</table>

@endsection