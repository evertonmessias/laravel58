@extends('layouts.app')

@section('content')

@include('layout')

<fieldset class="formulario del">
<form action="/destroy/{{$agenda->id}}" method="POST">
{{csrf_field()}}
{{method_field('DELETE')}}
<p><strong>Deletando: {{$agenda->id}}</strong></p>
<p>Tem Certeza ?</p><br>
<button type="submit">SIM</button><br>
</form>
</fieldset>

@endsection