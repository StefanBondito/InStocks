<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PythonController;

// Auth
Auth::routes();
Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/', [AuthController::class, 'homeGet']);
Route::get('/home_user', [AuthController::class, 'log_acc']);

Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/about-us-user', function () {
    return view('about_us_user');
});
Route::get('/graphs', function () {
    return view('graph');
});

Route::get('/graphs-user', function () {
    return view('graph_user');
});

route::get('/stocks-pred', [PythonController::class, 'index'])->name('predict.index');
Route::post('/stocks-pred', [PythonController::class, 'prediction'])->name('predict.analyze');



// Route::get('/home_user', [AuthController::class, 'homeGet'])->middleware('auth')->name('home_user');

// Apply admin access middleware
// Route::middleware(['auth','admin.access'])->group(function () {
//     // Add all routes that should be accessible by admin
//     Route::get('/dashboard', [AuthController::class, 'homeGet'])->name('dashboard');
//     Route::get('/admin/home', [AuthController::class, 'admin_homeGet']);
//     Route::get('/admin/home_user', [AuthController::class, 'admin_homeGet'])->name('admin-home');
//     // Add more routes here
// });

// Route::middleware('auth.redirect')->group(function () {
//     Route::get('/login',[AuthController::class, 'loginGet'])->name('login');
//     // Route::post('/login',[AuthController::class, 'loginPost']);
//     Route::get('/signup',[AuthController::class, 'signUpGet'])->name('signup');
//     // Route::post('/signup',[AuthController::class, 'registerPost']);
// });

// LOG OUT
// Route::middleware('auth')->group(function () {
//     Route::get('/logout', [AuthController::Class, 'logoutPost'])->middleware('auth')->name('logout');
// });
