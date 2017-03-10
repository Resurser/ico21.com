<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://use.fontawesome.com/7876d5e5ca.js"></script>
    <meta name="description" content="Pagina del grupo ICO 21">
    <meta name="author" content="Elias Segundo Antonio">
    <link rel="icon" href="{{ asset('public/images/logo-min.png') }}">
    
    <link rel="stylesheet" href="{{ asset('public/css/prism-css.css') }}">
    <script src="{{ asset('public/js/prism-js.js') }}" ></script>
    
    <title>--Ingenieria en computacion--</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed font-semantic" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img alt="Brand" src="{{asset('public/images/logo.png')}}"> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/practicas') }}">Prácticas</a></li>
            <li><a href="{{ url('/proyectos') }}">Proyectos</a></li>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
            <li><a href="{{ url('/recomendaciones-mensual') }}">Recomendaciones del mes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br><br>
    </div>
	<div class="container-fluid col-md-12 centro home-block">
    	<h1>El punto de encuentro para los integrantes de ICO-21</h1> 
      <br><br>
      <img src="{{ asset('public/images/Cohete-fondo.png') }}" class="responsive-img lay-2" height="300px" width="200px">
      <br><br>
      <span class="label-home">Una forma sencilla de empezar grandes proyectos es hacerlo en equipo</span>
      <br><br><br>
      <div class="alert alert-info welcome-msg" role="alert">
        <span> Nueva <strong>imagen</strong>, nuevas 
        opciones de <strong>interacción</strong> y el framework <strong>
         Laravel </strong> es lo que marca el regreso de nuestra página grupal<br> 
         <br>Un sitio renovado, un solo propósito: <strong>compartir</strong> el conocimiento  </span>
      <br>
      </div>
      <br><br>
      <h2 class="news-title">Contenido reciente</h2>
      <div class="container col-md-4 news">
        <h3>Ultima práctica: </h3>
        <a class="home-new" href={{ route('ShowPractice',[$lastPractice->titulo]) }}>
         <span class="glyphicon glyphicon-console"></span> {{$lastPractice->titulo}}</a>
      </div>
      <div class="container col-md-4 news">
        <h3>Ultimo post:</h3>
        <a class="home-new" href={{ route('ShowBlog',[$lastBlog->titulo]) }}>
        <span class="glyphicon glyphicon-console"></span> {{$lastBlog->titulo}}</a>
      </div>
      <div class="container col-md-4 news">
        <h3>Ultimo proyecto:</h3>
        <a class="home-new" href={{ route('ShowProject',[$lastProject->titulo]) }}>
        <span class="glyphicon glyphicon-console"></span> {{$lastProject->titulo}}</a>
      </div>
      <div class="container-fluid col-md-12">
        <br><br>
      </div>
  </div>




<footer class="footer pie">
	<div class="container">
		<a href="https://github.com/elink21" class="social"><i class="fa fa-github-square fa-lg" aria-hidden="true"></i></a>
		<a href="https://www.facebook.com/esegundoantonio" class="social"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
		<a href="https://plus.google.com/u/0/105836227976441882276" class="social"><i class="fa fa-google-plus-circle fa-lg" aria-hidden="true"></i></a>
		<br> <span>Encuentrame en redes</span>  
	</div>
</footer>
		

</div>
<script src="js/prism-js.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>