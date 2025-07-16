<?php

use Illuminate\support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

Route::get('/pembelian', [App\Http\Controllers\PembelianController::class, 'index']);
Route::post('/pembelian', [App\Http\Controllers\PembelianController::class, 'store']);
Route::get('/pembelian/success', [App\Http\Controllers\PembelianController::class, 'success']);