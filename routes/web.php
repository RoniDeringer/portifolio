<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes', [ClienteController::class, 'index'])->name('dashboard');
Route::get('clientes', [ClienteController::class, 'index'])->name('index');
Route::get('clientes/store/database/{id}', [ClienteController::class, 'generateMultiTenacyByCliente'])->name('generateMultiTenacyByCliente');


Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::redirect('/home', '/user-profile');

Route::get('user-management', [UserController::class, 'index'])->name('user-management');
Route::get('user-create', [UserController::class, 'create'])->name('user-create');
Route::post('user-store', [UserController::class, 'store'])->name('user-store');
Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('user-edit');
Route::post('user-update/{id}', [UserController::class, 'update'])->name('user-update');
Route::post('user-destroy/{id}', [UserController::class, 'destroy'])->name('user-destroy');
Route::get('user-profile', function () {
    return view('pages.users.user-profile');
})->name('user-profile');
