<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function update()
    {
    }

}
