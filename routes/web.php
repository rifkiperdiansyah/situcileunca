<?php

use Illuminate\support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTicketController;
use App\Http\Controllers\AdminTransactionController;
use App\Http\Controllers\TransactionController;
Use App\Http\Controllers\DashboardUserTiketController;
use App\Http\Controllers\ProfileController;
Use App\Http\Controllers\UpdatePasswordController;
use App\Models\Tiket;

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
    return view('tiket', [
        'title' => 'Tiket',
        'tickets' => Tiket::all()
        ]
    );
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
    Route::get('/dashboard-user', [UserController::class, 'dashboard'])->name('dashboard-user.index');

    Route::post('/order-ticket', [TransactionController::class, 'createTransaction'])->name('order-ticket.create');
    Route::get('/transaction/success', function () {
        return view('transaction.success');
    })->name('transaction.success');
    Route::get('/transactions/print/{transaction}', [TransactionController::class, 'print'])->name('transactions.print');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('/dashboard-admin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard-admin.index');

        Route::resource('/tickets', AdminTicketController::class);
        Route::resource('/transactions', AdminTransactionController::class);

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
// // Dashboard User
// Route::get('/dashboard-user', [DashboardUserController::class, 'index'])->middleware('auth');

// Route::resource('/dashboard-user/data-user', DashboardUserTiketController::class)->middleware('auth');
// Route::get('/dashboard-user/data-order', [DashboardUserTiketController::class, 'order']);

// // Update Password
// Route::get('transaction', [TransactionController::class, 'index']);
