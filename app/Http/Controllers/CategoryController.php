<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function category(Category $category)
    {
        return View('category', [
            "title" => $category->name,
            "category" => $category
        ]);
    }
}
