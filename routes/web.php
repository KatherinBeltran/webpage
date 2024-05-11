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
    return view('index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::post('/guardar-cliente', function (Illuminate\Http\Request $request) {
    $nom_cli = $request->input('nom_cli');
    $num_cel_cli = $request->input('num_cel_cli');

    DB::table('clientes')->insert([
        'nom_cli' => $nom_cli,
        'num_cel_cli' => $num_cel_cli,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return redirect()->back()->with('success', 'Cliente guardado exitosamente.');
})->name('guardar-cliente');
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('users', App\Http\Controllers\UserController::class)->only(['index', 'edit', 'update', 'destroy']);