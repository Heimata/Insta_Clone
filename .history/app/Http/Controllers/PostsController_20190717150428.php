<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(){

        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required ', 'image'], // ajout de 'image' pour valider une image
        ]);

        \App\Post::create($data);
        
        dd(request()->all());
        // return view('posts.create');
    }
}
