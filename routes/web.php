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

Route::resource('pi-dash', App\Http\Controllers\PiDashController::class);
Route::resource('afivac-dash', App\Http\Controllers\AfiVacDashController::class);
Route::resource('pae-dash', App\Http\Controllers\PaeDashController::class);
Route::resource('des-dash', App\Http\Controllers\DesDashController::class);
Route::resource('cob-dash', App\Http\Controllers\CobDashController::class);
Route::resource('mat-dash', App\Http\Controllers\MatDashController::class);
Route::resource('pis', App\Http\Controllers\PiController::class);
Route::resource('afi-vacunacions', App\Http\Controllers\AfiVacunacionController::class);
Route::resource('paes', App\Http\Controllers\PaeController::class);
Route::resource('eficiencia', App\Http\Controllers\EficienciumController::class);
Route::resource('fue-sistemas', App\Http\Controllers\FueSistemaController::class);
Route::resource('desercions', App\Http\Controllers\DesercionController::class);
Route::resource('cob-neta', App\Http\Controllers\CobNetumController::class);
Route::resource('cob-bruta', App\Http\Controllers\CobBrutumController::class);
Route::resource('pob-discapacidads', App\Http\Controllers\PobDiscapacidadController::class);
Route::resource('tra-grados', App\Http\Controllers\TraGradoController::class);
Route::resource('est-venezolanos', App\Http\Controllers\EstVenezolanoController::class);
Route::resource('extraedads', App\Http\Controllers\ExtraedadController::class);
Route::resource('mat-etnicos', App\Http\Controllers\MatEtnicoController::class);
Route::resource('mat-sector-zonas', App\Http\Controllers\MatSectorZonaController::class);
Route::resource('mat-sectors', App\Http\Controllers\MatSectorController::class);
Route::resource('cargar', App\Http\Controllers\CargaController::class);
Route::post('cargar/importar', 'App\Http\Controllers\CargaController@importar');
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('users', App\Http\Controllers\UserController::class)->only(['index', 'edit', 'update', 'destroy']);