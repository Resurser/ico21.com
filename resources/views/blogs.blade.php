@extends('templates.default')
@section('content')
<form action="{{ url('blog/search') }}" method="POST" >
	<div class="input-group col-md-6">
	  {{ csrf_field() }} 
      <input type="search" class="form-control" name="clave" placeholder="¿Que estas buscando?"></input>
      <span class="input-group-btn">
        <button class="btn btn-info" type="submmit">Ir!</button>
      </span>
    </div>
</form>
    
<h2> Lista de artículos </h2>
@foreach ($posts as $post)
	<div class="blog-item">
		<a href={{ route('ShowBlog',[$post->titulo]) }}>{!!$post->titulo!!}</a><br>
		 <small class="autor-tag">Publicado por: {{$post->autor}}</small><br><br>
		<p> {!!str_limit($post->cuerpo,250)!!} <a href={{ route('ShowBlog',[$post->titulo]) }}>Leer completo</a></p> 
	</div>
	<br>
@endforeach
</div>
<br><br>
<div class="container col-md-3 workout centro visible-lg  jumbotron">
	<h4> Recomendación de la semana <br> <small>{{$recomendacion->titulo}}</small></h4> <br>
	<img src="{{$recomendacion->imagen}}" alt="" class="recomendacion-img-thumb">
	<br><br>
	{!!$recomendacion->mensaje!!} <br>
	<a href="{{$recomendacion->url}}" target="_blank">Aprender más</a>
</div>
<div>
@stop

