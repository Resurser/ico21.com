@extends('templates.default')
@section('content')

<div class="black">
	<h4>Primer semestre</h4><br>
	@foreach ($primero as $practica)
	<a  class="index-item" href={{ route('ShowPractice',[$practica->titulo]) }}>
	<i class="fa fa-angle-double-right" aria-hidden="true"></i>{{$practica->titulo}} 
	<span class="badge">{{$practica->calificacion}}</span></a> <br><br>
	@endforeach
	<br><br>
</div>

<div class="darkcyan">
	<h4>Segundo semestre</h4>
	@foreach ($segundo as $practica)
	<a  class="index-item" href={{ route('ShowPractice',[$practica->titulo]) }}>
	<i class="fa fa-angle-double-right" aria-hidden="true"></i>{{$practica->titulo}} 
	<span class="badge">{{$practica->calificacion}}</span></a><br>
	@endforeach
</div>

@stop