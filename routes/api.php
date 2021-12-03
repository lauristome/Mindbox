<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


////////////// CRUD Usuários Routes
Route::get('/usuario/publicacoes/{id}', 'App\Http\Controllers\UsuariosController@listPublicacoes');

Route::get('/usuario/feed/{id}', 'App\Http\Controllers\UsuariosController@feed');

Route::get('/usuario/trofeus/{id}', 'App\Http\Controllers\UsuariosController@listTrofeus');

Route::get('/usuarios/read/{id}', 'App\Http\Controllers\UsuariosController@read');

Route::post('/usuarios', 'App\Http\Controllers\UsuariosController@store');

Route::put('/usuarios/{id}', 'App\Http\Controllers\UsuariosController@update');

Route::delete('usuarios/{id}', 'App\Http\Controllers\UsuariosController@destroy');

Route::post('/usuarios/login', 'App\Http\Controllers\UsuariosController@login');

////////////// CRUD Publicações Routes
Route::get('/publicacao/comentarios/{id}', 'App\Http\Controllers\PublicacoesController@listComentarios');

Route::get('/publicacao/ranking', 'App\Http\Controllers\PublicacoesController@ranking');

Route::post('/publicacao', 'App\Http\Controllers\PublicacoesController@store');

Route::get('/publicacao/{id}', 'App\Http\Controllers\PublicacoesController@read');

Route::put('/publicacao/{id}', 'App\Http\Controllers\PublicacoesController@update');

Route::delete('publicacao/{id}', 'App\Http\Controllers\PublicacoesController@destroy');

////////////// CRUD Troféus Routes
Route::post('/trofeu', 'App\Http\Controllers\TrofeusController@store');

Route::get('/trofeu/{id}', 'App\Http\Controllers\TrofeusController@read');

Route::put('/trofeu/{id}', 'App\Http\Controllers\TrofeusController@update');

Route::delete('trofeu/{id}', 'App\Http\Controllers\TrofeusController@destroy');

////////////// CRUD Admin Routes
Route::post('/admin', 'App\Http\Controllers\AdminController@store');

Route::get('/admin/{id}', 'App\Http\Controllers\AdminController@read');

Route::put('/admin/{id}', 'App\Http\Controllers\AdminController@update');

Route::delete('admin/{id}', 'App\Http\Controllers\AdminController@destroy');

Route::post('/admin/login', 'App\Http\Controllers\AdminController@login');

////////////// CRUD Curtida Routes
Route::post('/curtida', 'App\Http\Controllers\CurtidaController@store');

Route::delete('curtida/{id}', 'App\Http\Controllers\CurtidaController@destroy');

////////////// CRUD Denuncia Routes
Route::post('/denuncia', 'App\Http\Controllers\DenunciaController@store');

Route::get('/denuncia/{id}', 'App\Http\Controllers\DenunciaController@read');

Route::put('/denuncia/{id}', 'App\Http\Controllers\DenunciaController@update');

Route::delete('denuncia/{id}', 'App\Http\Controllers\DenunciaController@destroy');

////////////// CRUD Usuario Segue Usuario Routes
Route::post('/follow', 'App\Http\Controllers\SeguirController@store');

Route::delete('follow/{id}', 'App\Http\Controllers\SeguirController@destroy');

////////////// CRUD Usuario Tem Troféus Routes
Route::post('/usuario/trofeus', 'App\Http\Controllers\UsuarioTrofeusController@store');

Route::delete('usuario/trofeus/{id}', 'App\Http\Controllers\UsuarioTrofeusController@destroy');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
