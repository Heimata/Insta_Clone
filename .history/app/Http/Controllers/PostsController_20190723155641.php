<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        // orderBy('created_at', 'DESC') == latest()
        $posts = Post::whereIn('user_id', $users)->latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

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

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
