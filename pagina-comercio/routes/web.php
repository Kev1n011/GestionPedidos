<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckApiToken;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(CheckApiToken::class)->name('dashboard');

//USUARIOS
Route::get('/user_list/{id}', [UserController::class, 'getUsers'])
    ->middleware(CheckApiToken::class)
    ->name('user_list');
Route::post('/addUser', [UserController:: class, "addUser"])->name('addUser');

Route::get('/user_details/{id}', [UserController::class, 'getUser'])
    ->middleware(CheckApiToken::class)
    ->name('user_details');

Route::get('/editUser/{id}', [UserController::class, 'editUser'])
    ->middleware(CheckApiToken::class)
    ->name('user_editUser');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
