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

Route::resource('pi-sec-cultura-dash', App\Http\Controllers\PiSecCulturaDashController::class);
Route::resource('pi-sec-ambiente-dash', App\Http\Controllers\PiSecAmbienteDashController::class);
Route::resource('pi-sec-movilidad-dash', App\Http\Controllers\PiSecMovilidadDashController::class);
Route::resource('pi-sec-infraestructura-dash', App\Http\Controllers\PiSecInfraestructuraDashController::class);
Route::resource('pi-sec-educacion-dash', App\Http\Controllers\PiSecEducacionDashController::class);
Route::resource('pi-sec-desarrollo-dash', App\Http\Controllers\PiSecDesarrolloDashController::class);
Route::resource('pi-sec-hacienda-dash', App\Http\Controllers\PiSecHaciendaDashController::class);
Route::resource('pi-sec-planeacion-dash', App\Http\Controllers\PiSecPlaneacionDashController::class);
Route::resource('pi-sec-salud-dash', App\Http\Controllers\PiSecSaludDashController::class);
Route::resource('pi-sec-gobierno-dash', App\Http\Controllers\PiSecGobiernoDashController::class);
Route::resource('pi-sec-general-dash', App\Http\Controllers\PiSecGeneralDashController::class);
Route::resource('afivac-dash', App\Http\Controllers\AfiVacDashController::class);
Route::resource('pae-dash', App\Http\Controllers\PaeDashController::class);
Route::resource('des-dash', App\Http\Controllers\DesDashController::class);
Route::resource('cob-dash', App\Http\Controllers\CobDashController::class);
Route::resource('mat-dash', App\Http\Controllers\MatDashController::class);
Route::resource('pi-sec-culturas', App\Http\Controllers\PiSecCulturaController::class);
Route::resource('pi-sec-ambientes', App\Http\Controllers\PiSecAmbienteController::class);
Route::resource('pi-sec-movilidads', App\Http\Controllers\PiSecMovilidadController::class);
Route::resource('pi-sec-infraestructuras', App\Http\Controllers\PiSecInfraestructuraController::class);
Route::resource('pi-sec-educacions', App\Http\Controllers\PiSecEducacionController::class);
Route::resource('pi-sec-desarrollos', App\Http\Controllers\PiSecDesarrolloController::class);
Route::resource('pi-sec-haciendas', App\Http\Controllers\PiSecHaciendaController::class);
Route::resource('pi-sec-planeacions', App\Http\Controllers\PiSecPlaneacionController::class);
Route::resource('pi-sec-saluds', App\Http\Controllers\PiSecSaludController::class);
Route::resource('pi-sec-gobiernos', App\Http\Controllers\PiSecGobiernoController::class);
Route::resource('pi-sec-generals', App\Http\Controllers\PiSecGeneralController::class);
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
Route::resource('cargar-sec-cultura', App\Http\Controllers\CargarSecCulturaController::class);
Route::resource('cargar-sec-ambiente', App\Http\Controllers\CargarSecAmbienteController::class);
Route::resource('cargar-sec-movilidad', App\Http\Controllers\CargarSecMovilidadController::class);
Route::resource('cargar-sec-infraestructura', App\Http\Controllers\CargarSecInfraestructuraController::class);
Route::resource('cargar-sec-educacion', App\Http\Controllers\CargarSecEducacionController::class);
Route::resource('cargar-sec-desarrollo', App\Http\Controllers\CargarSecDesarrolloController::class);
Route::resource('cargar-sec-hacienda', App\Http\Controllers\CargarSecHaciendaController::class);
Route::resource('cargar-sec-planeacion', App\Http\Controllers\CargarSecPlaneacionController::class);
Route::resource('cargar-sec-salud', App\Http\Controllers\CargarSecSaludController::class);
Route::resource('cargar-sec-gobierno', App\Http\Controllers\CargarSecGobiernoController::class);
Route::resource('cargar-sec-general', App\Http\Controllers\CargarSecGeneralController::class);
Route::post('cargar-sec-cultura/importar', 'App\Http\Controllers\CargarSecCulturaController@importar');
Route::post('cargar-sec-ambiente/importar', 'App\Http\Controllers\CargarSecAmbienteController@importar');
Route::post('cargar-sec-movilidad/importar', 'App\Http\Controllers\CargarSecMovilidadController@importar');
Route::post('cargar-sec-infraestructura/importar', 'App\Http\Controllers\CargarSecInfraestructuraController@importar');
Route::post('cargar-sec-educacion/importar', 'App\Http\Controllers\CargarSecEducacionController@importar');
Route::post('cargar-sec-desarrollo/importar', 'App\Http\Controllers\CargarSecDesarrolloController@importar');
Route::post('cargar-sec-hacienda/importar', 'App\Http\Controllers\CargarSecHaciendaController@importar');
Route::post('cargar-sec-planeacion/importar', 'App\Http\Controllers\CargarSecPlaneacionController@importar');
Route::post('cargar-sec-salud/importar', 'App\Http\Controllers\CargarSecSaludController@importar');
Route::post('cargar-sec-gobierno/importar', 'App\Http\Controllers\CargarSecGobiernoController@importar');
Route::post('cargar-sec-general/importar', 'App\Http\Controllers\CargarSecGeneralController@importar');
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('users', App\Http\Controllers\UserController::class)->only(['index', 'edit', 'update', 'destroy']);