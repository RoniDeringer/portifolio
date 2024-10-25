<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return redirect('sign-in');})->middleware('auth');

// Route::get('login',     function() { dd('teste');})->name('login');
Route::get('login',     [AuthController::class, 'index'])->name('login');
Route::post('login',    [AuthController::class, 'login'])->name('post-login');
Route::post('logout',   [AuthController::class, 'logout'])->middleware('auth');
Route::get('logout',    function() {Auth::logout();})->name('logout');



/* == ROTAS PARA USERS == */
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return 'Bem-vindo à área restrita 123!';
    });
});


/* == ROTAS PARA ADMIN == */
Route::middleware('check_admin')->group(function () {
    Route::get('teste', function () {
        return 'Bem-vindo à área restrita!';
    });
});
