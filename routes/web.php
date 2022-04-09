<?php

use Illuminate\Support\Facades\Route;

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

// roda sobre nos
Route::get('sobrenos', [\App\Http\Controllers\SobreNosController::class, 'index']);
// rota contato
Route::get('contato',[\App\Http\Controllers\ContatoController::class,'index']);
// rota tela principal
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'index']);

Route::get('/contato/{id}/{nome}', function (string $id, string $nome) {
    return "Contato: {$id} - {$nome}";
});

