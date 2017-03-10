@extends('templates.default')
@section('content')

<script>

	function liveContent(contenido)
	{
		document.getElementById('contenido').innerHTML=contenido;
	}
</script>

<form action="{{ url('/blog/store') }}" class="form-group">
	<label for="titulo">Titulo del articulo</label><br>
	<input type="text" class="form-control" name="titulo" value="" placeholder="Titulo del post"><br>
	<label for="autor">Autor</label>
	<input type="text" name="autor" class="form-control" value="" placeholder="Autor del articulo"><br>
	<label for="cuerpo">Cuerpo del articulo</label><br>
	<textarea name="cuerpo" class="form-control" id="cuerpo" cols="50" rows="15" onkeyup="liveContent(this.value)">
		{{$post->cuerpo}}
	</textarea><br>
	<button class="btn btn-primary" type="submmit">Enviar a la base de datos</button>
</form>


<span id="titulo"></span>
<p id="contenido"></p>
@stop