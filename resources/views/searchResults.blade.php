@extends('templates.default')
@section('content')

@if (count($posts))
	<h2>Resultados de la busqueda</h2>
	@foreach ($posts as $post)
		<div class="blog-item">
			<a href={{ route('ShowBlog',[$post->titulo]) }}>{!!$post->titulo!!}</a><br>
			 <small>Publicado por: {{$post->autor}}</small><br><br>
			<p> {{str_limit($post->cuerpo,200)}}</p>
		</div>
		<br>
	@endforeach
@endif

@if (!count($posts))
<h2>Lo sentimos, la busqueda no tuvo resultados</h2>
@endif
<br>
<a href="{{ url('/blog') }}">Regresar</a>
@stop