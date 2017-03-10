@extends('templates.default')
@section('content')

<div class="black">
	<h4>Primer semestre</h4> <br>
	@foreach ($primero as $proyecto)
	<a  class="index-item" href={{ route('ShowProject',[$proyecto->titulo]) }}>
	<i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$proyecto->titulo}} 
	<span class="badge">{{$proyecto->calificacion}}</span></a> <br><br>
	@endforeach
	<br><br>
</div>

<div class="darkcyan">
	<h4>Segundo semestre</h4>
	@foreach ($segundo as $proyecto)
	<strong><a class="index-item" href={{ route('ShowProject',[$proyecto->titulo]) }}>
	<i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$proyecto->titulo}} 
	<span class="badge">{{$proyecto->calificacion}}</span></a><br></strong>
	@endforeach
</div>
@stop

