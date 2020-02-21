<?php

namespace App\Http\Controllers;

use App\Post;

use App\User;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        return auth()->user()->liking()->toggle($user->posts);
    }
}
