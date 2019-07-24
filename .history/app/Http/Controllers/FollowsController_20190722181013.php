<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function stroree(User $user)
    {
        return $user->username;
    }
}
