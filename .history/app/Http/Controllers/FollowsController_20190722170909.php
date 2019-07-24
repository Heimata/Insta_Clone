<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function strore(User $user)
    {
        return $user->username;
    }
}
