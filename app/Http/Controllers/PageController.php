<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function posts(){
        //Latest es parecido al metodo OrderBy, antes colocabamos all(), get(), pero aqui lo hare que me traiga todo con: paginate()
        return view('posts',[
            'posts' => Post::with('user')->latest()->paginate()
        ]);

    }

    //La variable $post es la que yo coloco en la ruta => Route::get('blog/{post}'
    public function post(Post $post){

        return view('post', [
            'post' => $post
        ]);
    }
}
