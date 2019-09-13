@extends('layouts.app')

@section('content')

@include('layout')

<fieldset class="formulario criar">
    <form action="/agenda" method="POST">
        {{csrf_field()}}
        <p><strong>CRIAR REGISTRO</strong></p><br>
        <p>Nome:<input type="text" name="nome"></p>
        <p>Telefone:<input type="text" name="telefone"></p>
        <button type="submit">Enviar</button>
        <button type="button" onclick="window.history.go(-1);">Voltar</button><br><br>
</fieldset>

@endsection