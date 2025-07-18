<?php

use Illuminate\support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransactionController;
Use App\Http\Controllers\DashboardUserTiketController;
Use App\Http\Controllers\UpdatePasswordController;


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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store']);


// Dashboard routes
// User Routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard-admin', [UserController::class, 'dashboard'])->name('index');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard-user', [AdminController::class, 'dashboard'])->name('index');
});
// // Dashboard User
// Route::get('/dashboard-user', [DashboardUserController::class, 'index'])->middleware('auth');

// Route::resource('/dashboard-user/data-user', DashboardUserTiketController::class)->middleware('auth');
// Route::get('/dashboard-user/data-order', [DashboardUserTiketController::class, 'order']);

// // Update Password
// Route::get('transaction', [TransactionController::class, 'index']);
