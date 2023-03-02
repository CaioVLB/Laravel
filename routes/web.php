<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AppController;

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

// UM CONTROLADOR PODE CONTROLAR VARIAS ROTAS, MAS UMA ACTION (MÉTODO) SERÁ O RESPONSÁVEL POR UMA ROTA ESPECÍFICA.
// NO MVC o metódo se chama ACTION

//Route::get('/', [SiteController::class, 'index']);

//Route::get('/sair', [SiteController::class, 'sair']);

Route::get('/bemvindo', [SiteController::class, 'bemvindo'])->name('bemvindoRoute');

Route::get('/usuarios/{qnt}', [SiteController::class, 'users']);

Route::get('/pessoas', [AppController::class, 'pess']);

//Route::get('/', [SiteController::class, 'index'])->name('Qualquer');

