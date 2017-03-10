@extends('templates.default')
@section('content')
<form action="{{ url('/recomendacion/store') }}" class="input-group">
	<label for="titulo">Nombre corto de la recomendacion</label> <br>
	<input type="text" class="form-control" name="titulo" placeholder="Titulo"> <br>
	<label for="imagen">Imagen para mostrar en el carrusel</label> <br>
	<input type="text" class="form-control" name="imagen" placeholder="formato horizontal de preferencia"> <br>
	<label for="autor">Quien hizo la recomendacion</label> <br>
	<input type="text"  name="autor" class="form-control" placeholder="Autor"><br>
	<label for="url">Direccion de la informacion</label><br>
	<input type="url"  class="form-control" name="url" value="" placeholder="Link de la recomendacion"><br>
	<label for="mensaje">Pequeña descripcion</label>
	<textarea name="mensaje" id="" cols="50" rows="10" class="form-control" placeholder="algun dato extra"></textarea>
	<br>
	<br>
	<br>
	<button class="btn btn-primary" type="submit">Enviar a la base de datos</button>
</form>
@stop