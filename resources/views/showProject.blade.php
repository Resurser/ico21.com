@extends('templates.default')
@section('content')
<h2 class="centro">{{$project->titulo}}</h2>
{!!$project->descripcion!!}

<br><br>
<code>Fecha de publicacion :{{$project->created_at}}</code>
<br><br>

<div class="info-bar">
	<h3>Información adicional</h3>
	<button class="btn btn-info">
	Calificacion obtenida: <span class="badge">{{$project->calificacion}}</span>	
	</button><tr>
	<button class="btn btn-info">Semestre <span class="badge">{{$project->semestre}}°</span></button><br>
	<div class="alert-success" role="alert">
		Puedes encontrar los codigos de este trabajo en:
		<a href="{{$project->url}}" target="_blank">{{$project->url}}</a>
	</div>
</div>



<br>
<br>
<br>
<br>

<div id="disqus_thread" class="container col-md-9"></div>
<script>

var disqus_config = function () {
this.page.url = window.location;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?php echo $project->titulo; ?>'; 
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//ico21.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@stop