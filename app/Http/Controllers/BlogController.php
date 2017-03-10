<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post as Post;
use App\Recomendacion as Recomendacion;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        $temp=Recomendacion::all();
        $recomendacion=$temp->last();
        return \View::make('blogs',compact('posts','recomendacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-post');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post;
        $post->create($request->all());
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($titulo)
    {
        $temp=Recomendacion::all();
        $recomendacion=$temp->last();
        $post=Post::where('titulo','=',$titulo)->firstOrFail();
        return \View::make('articulos',compact('post','recomendacion'));
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

    public function search( Request $request)
    {
        $posts=Post::where('titulo','like','%'.$request->clave.'%')
        ->orWhere('cuerpo','like','%'.$request->clave.'%')->get();
        $temp=Recomendacion::all();
        $recomendacion=$temp->last();
        return \View::make('searchResults',compact('posts','recomendacion'));

    }
}
