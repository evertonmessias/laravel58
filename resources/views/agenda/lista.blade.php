@extends('layout')

@section('content')

<table class="tabela">
<tr> <td><strong>Id</strong></td><td><strong>Nome</strong></td>
 <td><strong>Telefone</strong></td><td><strong>E-Mail</strong></td> </tr>
@foreach($agenda as $s)
<tr>
<td><a href="/show/{{$s->id}}">{{$s->id}}</a></td>
 <td>{{$s->nome}}</td>
 <td>{{$s->telefone}}</td>
 <td>{{$s->anotacao['email']}}</td>
</tr>
@endforeach
<tr> <td colspan="4"><a href="/criar">[INSERIR]</a></td></tr>
</table>

@endsection