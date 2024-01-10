<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
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

/**
 * UI
 */
Route::view('/', 'index')->name('index');

/**
 * UI/User/Profile
 */
Route::group(['prefix' => '/profile', 'as' => 'profile.', 'middleware' => 'auth'], function () {
    Route::get('/{user}', [UserController::class, 'profile'])->name('index');
    Route::patch('/personal-update/{user}', [UserController::class, 'profilePersonalUpdate'])->name('personal.update');
    Route::patch('/avatar-update/{user}', [UserController::class, 'profileAvatarUpdate'])->name('avatar.update');
    Route::patch('/header-update/{user}', [UserController::class, 'profileHeaderUpdate'])->name('header.update');
});

/**
 * Api
 */
Route::group(['prefix' => 'api/', 'middleware' => ['setup', 'auth', 'admin', 'api']], function () {

    /**
     * Api/User
     */
    Route::group(['prefix' => '/users', 'as' => 'users.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::patch('/update/{user}', [UserController::class, 'update'])->name('update');
        Route::get('/destroy/{user}', [UserController::class, 'destroy'])->name('destroy');
    });

    /**
     * Api/Category
     */
    Route::group(['prefix' => '/categories', 'as' => 'categories.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::patch('/update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::get('/destroy/{category}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    /**
     * Api/Tag
     */
    Route::group(['prefix' => '/tags', 'as' => 'tags.'], function () {
        Route::get('/', [TagController::class, 'index'])->name('index');
        Route::get('/create', [TagController::class, 'create'])->name('create');
        Route::post('/store', [TagController::class, 'store'])->name('store');
        Route::get('/edit/{tag}', [TagController::class, 'edit'])->name('edit');
        Route::patch('/update/{tag}', [TagController::class, 'update'])->name('update');
        Route::get('/destroy/{tag}', [TagController::class, 'destroy'])->name('destroy');
    });

    /**
     * Api/Post
     */
    Route::group(['prefix' => '/posts', 'as' => 'posts.'], function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/store', [PostController::class, 'store'])->name('store');
        Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
        Route::patch('/update/{post}', [PostController::class, 'update'])->name('update');
        Route::get('/destroy/{post}', [PostController::class, 'destroy'])->name('destroy');
    });
});

/**
 * Authentication (Laravel/ui)
 */
Auth::routes(['reset' => false, 'logout' => false]);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
