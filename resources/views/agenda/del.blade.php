@extends('layouts.app')

@section('content')

@include('layout')

<fieldset class="formulario del">
<form action="/destroy/{{$agenda->id}}" method="POST">
{{csrf_field()}}
{{method_field('DELETE')}}
<p><strong>Deletando: {{$agenda->id}}</strong></p>
<p>Tem Certeza ?</p><br>
<button type="submit">&ensp;SIM&ensp;</button>
<button type="button" onclick="window.history.go(-1);">Voltar</button><br>
</form><br>
</form>
</fieldset>

@endsection