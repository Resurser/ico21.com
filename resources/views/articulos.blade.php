@extends('templates.default')
@section('content')
<h1 class="centro">{{$post->titulo}}</h1>
<br>

<div class="content"><p class="content-p">{!!$post->cuerpo!!}</p></div><br>
<span class="autor-tag">Publicado por:{{$post->autor}} <br> Fecha: {{$post->created_at}}</span>
<br>
<br>
<br>
<br>
<div id="disqus_thread" class="container col-md-8"></div>
<script>

var disqus_config = function () {
this.page.url = window.location;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?php echo $post->titulo; ?>'; 
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//ico21.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>
<br><br>
<div class="container col-md-3 workout centro visible-lg  jumbotron">
	<h4> Recomendación de la semana <br> <small>{{$recomendacion->titulo}}</small></h4> <br>
	<img src="{{$recomendacion->imagen}}" alt="" class="recomendacion-img-thumb">
	<br><br>
	{!!$recomendacion->mensaje!!} <br>
	<a href="{{$recomendacion->url}}">Aprender más</a>
</div>
<div>

@stop

