<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use App\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{

    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        // $postCount = $user->posts->count(); // methode si dessous en cache
        $postCount = Cache::remember(
            'count.posts.' .$user->id, // clé
            now()->addSeconds(30), // Timer
            function () use ($user) { // callBack
                return $user->posts->count();
        });

        $followersCount = Cache::remember(
            'count.posts.' .$user->id, // clé
            now()->addSeconds(30), // Timer
            function () use ($user) { // callBack
                return $user->profile->followers->count();
        });

        $followingCount = Cache::remember(
            'count.posts.' .$user->id, // clé
            now()->addSeconds(30), // Timer
            function () use ($user) { // callBack
                return $user->following->count();
        });

        // dd($follows);

        // $user = User::findOrFail($user);
        //     return view('profiles.index',[
        //         'user' => $user
        //     ]
        // );
        // on peut ecrire de cette façon ci dessous

        return view('profiles.index', compact('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile); // Elle protege l'edit
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {

        $this->authorize('update', $user->profile);

        // Les champs seront requis
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        
        if(request('image'))
        {
            $imagePath = request('image')->store('profile', 'public');
            
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        )); // Limitera l'accès au visiteur

        return redirect("/profile/{$user->id}");
    }

}
