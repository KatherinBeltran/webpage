<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('cob-dash', App\Http\Controllers\CobDashController::class);
Route::resource('cob-neta', App\Http\Controllers\CobNetumController::class);
Route::resource('cob-bruta', App\Http\Controllers\CobBrutumController::class);
Route::resource('cargar', App\Http\Controllers\CargaController::class);
Route::post('cargar/importar', 'App\Http\Controllers\CargaController@importar');
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('users', App\Http\Controllers\UserController::class)->only(['index', 'edit', 'update', 'destroy']);