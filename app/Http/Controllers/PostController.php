<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\Auth;
use Illuminate\Database\Eloquent\Collection;
//use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  string  $categoria
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $autor = User::all();               
        return view('admin.posts.index', ['posts'=>$posts, 'autor'=>$autor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post();
        $post->title_post=$request->title;
        $post->description=$request->description;
        $post->categoria=$request->cat;
        $file=$request->file;
        if($request->hasFile('file')){
            $file=$request->file;
            $name=$file->getClientOriginalName();
            $destination=public_path().'/posts';
            $file->move($destination,$name);
            $post->image_post=$name;
        }
        $post->user_id=auth()->user()->id;

        $post->save();

        $posts = Post::all();
        $autor= User::all();
        foreach ($autor as $key) {
            if($post->user_id == $key->id){
                $id_autor=$key;
            }
        }
        //return view('admin.posts.index', ['posts'=>$posts, 'autor'=>$key]);
        return redirect(route('adminposts.show', $post->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //Busca la publicación
        $post=Post::findOrFail($id);
        //Para obtener el nombre del autor de la publicación
        $autor= User::all();
        foreach ($autor as $key) {
            if($post->user_id == $key->id){
                $id_autor=$key;
            }
        }
        //Busca los comentarios de la publicación
        $comments = Comment::all();        

        return view('admin.posts.show', ['post'=>$post, 'autor'=>$id_autor, 'comments'=>$comments]);
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
