@extends('layouts.app')

@section('content')

@include('layout')

<table class="tabela">
<tr> <td><strong>Id</strong></td><td><strong>Nome</strong></td>
 <td><strong>Telefone</strong></td><td><strong>E-Mail</strong></td> </tr>
@foreach($agenda as $s)
<tr>
<td><a href="/show/{{$s->id}}">[ {{$s->id}} ]</a></td>
 <td>{{$s->nome}}</td>
 <td>{{$s->telefone}}</td>
 <td>
 <?php
 if (e($s->anotacao['email'])) {
     echo e($s->anotacao['email']);
     }
     else{
     echo "&emsp;---";
     } 
 ?>
 </td>
</tr>
@endforeach

</table>

@endsection