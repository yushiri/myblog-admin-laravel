<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
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

Route::group(['prefix' => '/users', 'as' => 'users.', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::get('/show/{user}', [UserController::class, 'show'])->name('show');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::patch('/update/{user}', [UserController::class, 'update'])->name('update');
    Route::get('/destroy/{user}', [UserController::class, 'destroy'])->name('destroy');

    Route::group(['prefix' => '/profile', 'as' => 'profile.'], function () {
        Route::get('/{user}', [UserController::class, 'profile'])->name('index');
        Route::get('/edit/{user}', [UserController::class, 'profile_edit'])->name('edit');
    });
});

Auth::routes(['register' => false, 'reset' => false, 'logout' => false]);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
