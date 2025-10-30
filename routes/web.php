<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;

Route::get('/home', [HomeController::class, 'index'])->name('home.home');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('locale/{locale}', [HomeController::class, 'locale'])
    ->name('locale')
    ->where('locale', '[a-z]+');




Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::resource('posts', PostController::class);

Route::get('/news', [UserController::class, 'index'])->name('users.index');



