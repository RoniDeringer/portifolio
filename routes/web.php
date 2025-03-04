<?php

use App\Http\Controllers\Ab\ClienteController;
use App\Http\Controllers\DashboardController;
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
	return redirect('sign-in');
})->middleware('guest');
// Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
// Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');


Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');


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



Route::get('clientes', [ClienteController::class, 'index'])->name('dashboard');
Route::get('clientes', [ClienteController::class, 'index'])->name('index');
Route::get('clientes/store/database/{id}', [ClienteController::class, 'generateMultiTenacyByCliente'])->name('generateMultiTenacyByCliente');


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('datatables', [DashboardController::class, 'datatables'])->name('datatables');
Route::get('formulario', [DashboardController::class, 'formulario'])->name('formulario');


