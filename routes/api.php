<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProyectoController;
use App\Http\Controllers\Api\CalificacionController;

/*
|--------------------------------------------------------------------------
| Rutas API públicas
|--------------------------------------------------------------------------
*/

// Login (devuelve token Sanctum)
Route::post('/login', [AuthController::class, 'login']);

/*
|--------------------------------------------------------------------------
| Rutas API protegidas (requieren token Bearer)
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {

    // --- Auth ---
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user',   [AuthController::class, 'me']);

    // --- Proyectos ---
    Route::get('/proyectos',              [ProyectoController::class, 'index']);
    Route::get('/proyectos/{proyecto}',   [ProyectoController::class, 'show']);
    Route::post('/proyectos',             [ProyectoController::class, 'store']);
    Route::put('/proyectos/{proyecto}',   [ProyectoController::class, 'update']);
    Route::patch('/proyectos/{proyecto}', [ProyectoController::class, 'update']);
    Route::delete('/proyectos/{proyecto}',[ProyectoController::class, 'destroy']);

    // --- Calificaciones ---
    // Todas las calificaciones de un proyecto
    Route::get('/proyectos/{proyecto}/calificaciones', [CalificacionController::class, 'index']);

        Route::get('/proyectos/mejores',       [ProyectoController::class, 'mejores']); // 👈 ranking


    // Calificación del docente logueado
    Route::get('/proyectos/{proyecto}/mi-calificacion', [CalificacionController::class, 'showMine']);

    // Crear calificación del docente logueado
    Route::post('/proyectos/{proyecto}/calificaciones', [CalificacionController::class, 'store']);

    // Actualizar calificación del docente logueado
    Route::patch('/proyectos/{proyecto}/mi-calificacion', [CalificacionController::class, 'updateMine']);
});
