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
            <li><a href="{{ url('blog') }}">Blog</a></li>
            <li><a href="{{ url('recomendaciones-mensual') }}">Recomendaciones del mes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br> <br>
    <div class="container col-md-9 contenido">

