<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class ProfilesController extends Controller
{

    public function index(User $user)
    {

        // $user = User::findOrFail($user);
        //     return view('profiles.index',[
        //         'user' => $user
        //     ]
        // );
        // on peut ecrire de cette façon ci dessous

        return view('profiles.index', compact('user'));
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

        auth()->user()->profile->update($data); // Limitera l'accès au visiteur

        if(request('image'))
        {
            
        }
        return redirect("/profile/{$user->id}");
    }

}
