<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

//Llamar el método index del controlador
Route::get('/pacientes', [PacienteController::class,'index']);

//Llamar el método crear del controlador
Route::get('pacientes/crear', [PacienteController::class,'create']);

Route::post('pacientes/guardar', [PacienteController::class,'store']);

Route::get('pacientes/editar/{id}', [PacienteController::class,'edit']);

Route::put('pacientes/actualizar/{id}', [PacienteController::class,'update']);

Route::delete('pacientes/eliminar/{paciente}', [PacienteController::class,'destroy']);
