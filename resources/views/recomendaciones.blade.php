@extends('templates.default')
@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
	  
	  	<div class="item active">
	      <img src={{$recomendacionesMes[0]->imagen}} alt="Error al cargar la imagen"  class="carousel-img">
	      <div class="carousel-caption ">
	        <h3> <a href={{$recomendacionesMes[0]->url}} target="_blank"> 
	        {{$recomendacionesMes[0]->titulo}}</a> </h3>
	      </div>
	     
	    
	    </div>

	    @for ($i = 1; $i < count($recomendacionesMes); $i++)
	    	<div class="item">
	    		<img src={{$recomendacionesMes[$i]->imagen}} alt="Error al cargar la imagen" class="carousel-img">
	    		<div class="carousel-caption">
	    			<h3> <a target="_blank" href={{$recomendacionesMes[$i]->url}}> 
	    			{{$recomendacionesMes[$i]->titulo}} </a> </h3>
	    		</div>

	    	</div>
	    @endfor

  </div>

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<br><br>
<div class="container col-md-3 workout centro visible-lg  jumbotron">
	<h4> Recomendación de esta semana <br> <small>{{$recomendacion->titulo}}</small></h4> <br>
	<img src="{{$recomendacion->imagen}}" alt="" class="recomendacion-img-thumb">
	<br><br>
	{!!$recomendacion->mensaje!!} <br>
	<a href="{{$recomendacion->url}}" target="_blank">Aprender más</a>
</div>
<div>



@stop