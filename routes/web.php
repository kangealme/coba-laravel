<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "kangealme",
        "email" => "kangealme@gmail.com",
        "image" => "kangealme.png"
    ]);
});

Route::get('/posts', [PostController::class,'index']);
Route::get('/post/{post:slug}', [PostController::class, 'post']);
Route::get('/category/{category:slug}', [CategoryController::class, 'category']);
Route::get('/author/{user:username}',[AuthorController::class, 'author']);
