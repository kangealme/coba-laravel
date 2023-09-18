<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //
    public function index()
    {
        $title = '';
        if(request('category'))
        {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author'))
        {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->username;
        }

        return view('posts',[
            "title" => "All Post" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString(),
        ]);
    }
}
