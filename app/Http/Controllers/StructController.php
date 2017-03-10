<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post as Post;
use App\Recomendacion as Recomendacion;
use App\Practicas as Practicas;
use App\Proyectos as Proyectos;

class StructController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temp=Post::all();
        $lastBlog=$temp->last();
        $temp=Practicas::all();
        $lastPractice=$temp->last();
        $temp=Proyectos::all();
        $lastProject=$temp->last();

        return \View::make('home',compact('lastProject','lastPractice','lastBlog'));
    }

    public function blog()
    {
        $recomendaciones=Recomendacion::where('id','>=',1)->firstOrFail();
        $posts=Post::all();
        return \View::make('blogs',compact('posts','recomendaciones'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
