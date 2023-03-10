<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Uma rota estar sempre atrelado a um método ou action no mvc
// Cada método é responsabel por uma rota especifica

Route::get('/', [SiteController::class, 'index']);

Route::get('/sair', [SiteController::class, 'sair']);

/* Para passar um valor pela url tem que colocar depois da barra colocar em chaves */
Route::get('/usuarios/{qnt}', [SiteController::class, 'users']);

// Route::get('/', function () {
//     return view('bemvindo');
// });
