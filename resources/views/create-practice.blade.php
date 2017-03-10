@extends('templates.default')
@section('content')
<script>
	function liveContent(contenido)
	{
		document.getElementById('preview').innerHTML=contenido;
	}
</script>
<form class="form-group" action={{ url('/practicas/store') }} method="POST">
		<input type="text" name="_token" value="{{ csrf_token() }}"> <br>
		<label for="semestre">calificacion de la practica</label>
		<br>
		<input type="number" name="calificacion" min="0" max="100" 
		  class="form-control" placeholder="Solo numero"></input>
		<br>
		<label for="titulo">Nombre de la practica</label>
		<br>
		<input type="text" class="fo
		rm-control" name="titulo"  cols="50" placeholder="Inserte el titulo"></input>
		<br>
		<label for="url">Direccion del codigo en github</label>
		<br>
		<input type="url" class="form-control" name="url" placeholder="Inserte la url sin comillas"></input>
		<br>
		<label for="descripcion">Descripcion de la practica</label><br>
		<textarea name="descripcion" cols="50" rows="15" class="form-control" onkeyup="liveContent(this.value)"></textarea>		
		<br>
		<label for="calificacion">Semestre de la practica</label>
		<br>
		<input type="number" name="semestre" min="0" max="100" 
		  class="form-control" placeholder="Solo numero"></input>
		<br>
		<button type="submmit" class="btn btn-primary">Enviar a la base de datos</button>	
	
</form>
<br><br>
<div class="container ">
	<h1>Contenido en vista previa</h1><br>
	<p id="preview"></p>	
</div>

@stop