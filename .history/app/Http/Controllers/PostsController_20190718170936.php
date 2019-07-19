<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required ', 'image'], // ajout de 'image' pour valider une image
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        // \App\Post::create($data); // On remplace cette ligne par celle d'en dessous
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' .auth()->user()->id);

        // dd(request()->all());
        // return view('posts.create');
    }

    public function show(\App\Post $post){
        return view('posts.show', compact('post'));
    }
}
