<?php

use App\Http\Controllers\EmpleadoHabilidadController;
use App\Http\Controllers\HijoController;
use Illuminate\Support\Facades\Route;


// 9- AGREGAR A RELACION MUCHOS A MUCHOS
Route::get('/empleadohabilidad',[EmpleadoHabilidadController::class,'asociar']);
Route::post('/empleadohabilidad/store',[EmpleadoHabilidadController::class,'store'])->name('empleadohabilidad.store');


//  Acceder a todas las rutas 
Route::resource('hijo',HijoController::class);
// acceder a show
Route::get('/hijo/{id}/show', [hijoController::class, 'show'])->name('hijo.show');