@extends('layouts.app')

@section('content')

@include('layout')

<fieldset class="formulario contato">
<form action="/envio/{{$agenda->id}}" enctype="multipart/form-data" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<p><strong>Inserir detalhes para : &emsp; {{$agenda->nome}}</strong></p><br>
<p>E-Mail:<input type="text" name="email" value="{{$agenda->anotacao['email']}}" required></p>
<p>Imagem:</p><br>
<input type="file" name="imagem"><br>
<button type="submit">Enviar</button>
<button type="button" onclick="window.history.go(-1);">Voltar</button><br>
</form><br>
</fieldset>
@endsection