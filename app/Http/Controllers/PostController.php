<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($post, $categoria=null)
    {
        if ($categoria){
            return view('posts.categ', compact('post', 'categoria'));
        }
        return view('posts.show', compact('post'));
    }
}
