<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;



Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/news/{post:slug}', [HomeController::class, 'index'])->name('posts.index');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');


Route::get('/team/{team:slug}', [TeamController::class, 'index'])->name('teams.index');




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {




    Route::resource('posts', PostController::class);


    Route::resource('teams', TeamController::class)->except(['index']);




    Route::resource('users', UserController::class)->except(['index']);
});
