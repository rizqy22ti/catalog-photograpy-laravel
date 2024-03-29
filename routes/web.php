<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PostController::class, "index"]);
Route::get('/about', function () {
    return view('about');
});

// posts routes
Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/{post:slug}', [PostController::class, "show"]);

// categories
Route::get('/categories', [CategoryController::class, "index"]);

// users
Route::get('/author/{author:username}', [UserController::class, "postsByUser"]);

// auth
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::delete('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// dashboard posts
Route::get('/dashboard/posts/slug', [DashboardPostController::class, 'slug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// dashboard categories
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
