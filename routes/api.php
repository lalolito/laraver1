<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EstudianteController;  // Importar correctamente la clase con el nombre correcto

// Rutas para estudiantes
Route::get('/estudiante', [EstudianteController::class, 'index']); // Corregido el nombre del controlador

Route::post('/estudiante', [EstudianteController::class, 'store']); // Corregido el nombre del controlador

// Descomentar si es necesario
// Route::get('/estudiante/{id}', [EstudianteController::class, 'show']);
// Route::put('/estudiante/{id}', [EstudianteController::class, 'update']);
// Route::delete('/estudiante/{id}', [EstudianteController::class, 'destroy']);



