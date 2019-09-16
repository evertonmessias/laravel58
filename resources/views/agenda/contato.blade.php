@extends('layouts.app')

@section('content')

@include('layout')

<fieldset class="formulario">


<form action="/envio" enctype="multipart/form-data" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<p>Imagem:</p><br>
<input type="file" name="imagem"><br>
<button type="submit">Enviar</button>
</form>


</fieldset>
@endsection