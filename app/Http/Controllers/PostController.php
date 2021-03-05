<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        //dd($request); // <-- Con esto podemos ver lo que recibimos del formulario 😁
        $post = new Post();
        $post->content = $request->content;
        $post->save(); 
        // Esta función te almacena el post en la base de datos, ahora mismo seguramente te de error, 
        // ya que hay mas campos que seguramente sean requeridos en tu entorno, así que te animo a que rellenes todos los campos requeridos de tu modelo Post
        // y te deseo un buen aprendizaje y mucha suerte en tus proyectos 😘
    }
}
