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
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        dd($data);
        $user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }

}
