<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('auth.login'); // Crie uma view de login
});

Route::post('login', [AuthController::class, 'login'])->name('post-login');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return 'Bem-vindo à área restrita!';
    });
});
