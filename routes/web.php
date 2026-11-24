<?php
 
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalMedicoController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
 
Route::resource('pacientes', PacienteController::class);
Route::resource('personal-medico', PersonalMedicoController::class)
    ->parameters(['personal-medico' => 'personalMedico'])
    ->except(['destroy']);
 
Route::patch('personal-medico/{personalMedico}/estado',
    [PersonalMedicoController::class, 'cambiarEstado'])
    ->name('personal-medico.estado');
