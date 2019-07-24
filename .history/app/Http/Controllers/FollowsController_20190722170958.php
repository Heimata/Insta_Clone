<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowsController extends Controller
{
    public function strore(User $user)
    {
        return $user->username;
    }
}
