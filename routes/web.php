<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth'], function () {

    Route::view('/', 'index')->name('index');

    Route::group(['prefix' => '/profile', 'as' => 'profile.'], function () {
        Route::get('/{user}', [UserController::class, 'profile'])->name('show');
        Route::patch('/personal-update/{user}', [UserController::class, 'profilePersonalUpdate'])->name('personal.update');
        Route::patch('/avatar-update/{user}', [UserController::class, 'profileAvatarUpdate'])->name('avatar.update');
        Route::patch('/header-update/{user}', [UserController::class, 'profileHeaderUpdate'])->name('header.update');
    });

    Route::group(['prefix' => '/post', 'as' => 'post.'], function () {
        Route::get('/show/{post}', [PostController::class, 'show'])->name('show');
    });
});

Auth::routes(['reset' => false, 'logout' => false]);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
