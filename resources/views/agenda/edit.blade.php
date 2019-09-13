@extends('layouts.app')

@section('content')

@include('layout')

<fieldset class="formulario criar">
<form action="/update/{{$agenda->id}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<p><strong>Editando: {{$agenda->id}}</strong></p>
<p>Nome:&emsp;<input type="text" name="nome" value="{{$agenda->nome}}"></p>
<p>Telefone:<input type="text" name="telefone" value="{{$agenda->telefone}}"></p><br>
<button type="submit">Enviar</button><br>
</form>
</fieldset>

@endsection