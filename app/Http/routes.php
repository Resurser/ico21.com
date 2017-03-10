<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',['as'=>'Principal', 'uses'=>'StructController@index']);

Route::get('/blog',['as'=>'Blog','uses'=>'BlogController@index']);
Route::post('/blog/store',['as'=>'SaveBlog','uses'=>'BlogController@store']);
Route::get('/blog/crear',['as'=>'CreateBlog','uses'=>'BlogController@create']);
Route::get('/blog/ShowBlog/{titulo}',['as'=>'ShowBlog','uses'=>'BlogController@show']);
Route::post('/blog/search',['as'=>'ShowSearch','uses'=>'BlogController@search']);


Route::get('/practicas',['as'=>'indicePracticas','uses'=>'PracticasController@index']);
Route::get('/practicas/ShowPractice/{titulo}',['as'=>'ShowPractice','uses'=>'PracticasController@show']);
Route::get('/practicas/crear',['as'=>'CrearPractica','uses'=>'PracticasController@create']);
Route::post('/practicas/store',['as'=>'SavePractice','uses'=>'PracticasController@store']);

Route::get('/proyectos',['as'=>'indiceProyectos','uses'=>'ProyectosController@index']);
Route::get('/proyectos/ShowProject/{titulo}',['as'=>'ShowProject','uses'=>'ProyectosController@show']);
Route::get('/proyectos/crear',['as'=>'CrearProyecto','uses'=>'ProyectosController@create']);
Route::post('/proyectos/store',['as'=>'SaveProject','uses'=>'ProyectosController@store']);

Route::get('/recomendacion/crear',['as'=>'CrearRecom','uses'=>'recomendacionController@create']);
Route::get('/recomendacion/store',['as'=>'SaveRecom','uses'=>'recomendacionController@store']);
Route::get('/recomendaciones-mensual',['as'=>'LastRecom','uses'=>'recomendacionController@index']);