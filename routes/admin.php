<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'admin.index')->name('index');

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

Route::group(['prefix' => '/tags', 'as' => 'tags.'], function () {
    Route::get('/', [TagController::class, 'index'])->name('index');
    Route::get('/create', [TagController::class, 'create'])->name('create');
    Route::post('/store', [TagController::class, 'store'])->name('store');
    Route::get('/edit/{tag}', [TagController::class, 'edit'])->name('edit');
    Route::patch('/update/{tag}', [TagController::class, 'update'])->name('update');
    Route::get('/destroy/{tag}', [TagController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => '/posts', 'as' => 'posts.'], function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
    Route::patch('/update/{post}', [PostController::class, 'update'])->name('update');
    Route::get('/destroy/{post}', [PostController::class, 'destroy'])->name('destroy');
});
