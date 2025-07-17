<?php

use Illuminate\support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Post', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
  
       return view('post', ['title' => 'Single Post', 'post' => $post]);
});



Route::get('/tiket', function () {
    return view('tiket', ['title' => 'Tiket']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});


Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});

Route::get('login', [LoginController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);


