<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function author(User $user)
    {
        return view('author', [
            'title' => $user->name,
            'author' => $user
        ]);
    }
}
