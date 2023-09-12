<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewFinderInterface;

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



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Tulisan 1",
            "slug" => "tulisan-1",
            "author" => "kangealme",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestiae blanditiis maxime ab nam temporibus beatae unde voluptas, quibusdam necessitatibus atque nesciunt saepe esse a fuga nulla culpa recusandae sunt?"
        ],
        [
            "title" => "Tulisan 2",
            "slug" => "tulisan-2",
            "author" => "Dody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestiae blanditiis maxime ab nam temporibus beatae unde voluptas, quibusdam necessitatibus atque nesciunt saepe esse a fuga nulla culpa recusandae sunt? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum magnam minima accusamus voluptates animi quos architecto eligendi magni provident iure vero excepturi velit at, officiis aut temporibus. Inventore deleniti alias praesentium aliquam consequatur, pariatur itaque dicta reprehenderit distinctio sunt magni aspernatur? Facere necessitatibus sit tempora odit sequi neque dolores eos odio debitis rerum molestias a iusto tempore, aperiam eveniet qui explicabo hic recusandae cupiditate quos fugiat? Optio consequatur aperiam perspiciatis sed labore quae aliquid blanditiis quod asperiores deleniti tempora sequi reprehenderit nisi incidunt vero quia, at repellat provident illo eos! Animi delectus voluptate porro. Eveniet alias vel quod doloribus quaerat?"
        ],
    ];

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

Route::get('/posts/{slug}', function(){
    return view('post', [
        "title" => "Single Post",

    ]);
});
