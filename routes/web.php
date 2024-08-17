<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('users', [Admin\UserController::class, 'index']);
    Route::resource('posts', Admin\PostController::class);
});

Route::resource('posts', PostController::class);
Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
});
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('users', [Admin\UserController::class, 'index']);
    Route::get('users/create', [Admin\UserController::class, 'create']);
    Route::post('users', [Admin\UserController::class, 'store']);
    Route::get('users/{user}/edit', [Admin\UserController::class, 'edit']);
    Route::put('users/{user}', [Admin\UserController::class, 'update']);
    Route::delete('users/{user}', [Admin\UserController::class, 'destroy']);

    Route::get('posts', [Admin\PostController::class, 'index']);
    Route::get('posts/create', [Admin\PostController::class, 'create']);
    Route::post('posts', [Admin\PostController::class, 'store']);
    Route::get('posts/{post}/edit', [Admin\PostController::class, 'edit']);
    Route::put('posts/{post}', [Admin\PostController::class, 'update']);
    Route::delete('posts/{post}', [Admin\PostController::class, 'destroy']);
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('admin/users', Admin\UserController::class);
    Route::resource('admin/posts', Admin\PostController::class);
});




Route::get('/', function () {
    return view('welcome');
});
