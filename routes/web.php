<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Uma rota estar sempre atrelado a um método ou action no mvc
// Cada método é responsabel por uma rota especifica

Route::get('/', [SiteController::class, 'index']);

Route::get('/layout', [SiteController::class, 'layout']);
Route::get('/layout2', [SiteController::class, 'layout2']);

Route::get('/sair', [SiteController::class, 'sair']);

/* Para passar um valor pela url tem que colocar depois da barra colocar em chaves */
Route::get('/usuarios/{qnt}', [SiteController::class, 'users']);

Route::get('/exercicio1', [SiteController::class, 'exercicio1']);
Route::get('/exercicio2', [SiteController::class, 'exercicio2']);
Route::get('/include', [SiteController::class, 'include']);
// Route::get('/', function () {
//     return view('bemvindo');
// });
