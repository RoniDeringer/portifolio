<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatatablesController;
use App\Http\Controllers\TransacaoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',  [AuthController::class, 'checkLogin']);

// Route::get('login',     function() { dd('teste');})->name('login');
Route::get('login',     [AuthController::class, 'index'])->name('login');
Route::post('login',    [AuthController::class, 'login'])->name('post-login');
Route::post('logout',   [AuthController::class, 'logout'])->name('logout');



/* == ROTAS PARA USERS == */
Route::middleware(['auth'])->group(function () {
    Route::get('datatables',   [DatatablesController::class, 'index'])->name('datatables');
    Route::get('datatables2',   [DatatablesController::class, 'index2'])->name('datatables');

    Route::get('transacao',   [TransacaoController::class, 'index'])->name('transacao');

});


/* == ROTAS PARA ADMIN == */
Route::middleware('check_admin')->group(function () {
    Route::get('teste', function () {
        return 'Bem-vindo à área restrita!';
    });
});
