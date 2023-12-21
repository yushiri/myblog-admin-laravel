<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\UserController;
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

Route::view('/', 'index')->name('index');

Route::group(['prefix' => '/profile', 'as' => 'profile.', 'middleware' => 'auth'], function () {

    Route::get('/{user}', [UserController::class, 'profile'])->name('index');
    Route::patch('/personal-update/{user}', [UserController::class, 'profilePersonalUpdate'])->name('personal.update');
    Route::patch('/avatar-update/{user}', [UserController::class, 'profileAvatarUpdate'])->name('avatar.update');
    Route::patch('/header-update/{user}', [UserController::class, 'profileHeaderUpdate'])->name('header.update');
});

Route::group(['prefix' => 'api/', 'middleware' => ['setup', 'auth', 'admin', 'api']], function () {

    Route::group(['prefix' => '/users', 'as' => 'users.'], function () {

        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::patch('/update/{user}', [UserController::class, 'update'])->name('update');
        Route::get('/destroy/{user}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/categories', 'as' => 'categories.'], function () {

        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::patch('/update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::get('/destroy/{category}', [CategoryController::class, 'destroy'])->name('destroy');
    });
});

Auth::routes(['reset' => false, 'logout' => false]);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
