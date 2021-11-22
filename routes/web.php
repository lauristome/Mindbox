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

Route::get('/', function () {
    return view('welcome');
});


////////////// CRUD Usuários Routes
Route::get('/usuarios/create', 'App\Http\Controllers\UsuariosController@create');
Route::post('/usuarios/create', 'App\Http\Controllers\UsuariosController@store')->name('cadastrar-usuario');

Route::get('/usuarios/read/{id}', 'App\Http\Controllers\UsuariosController@read');

Route::get('/usuarios/edit/{id}', 'App\Http\Controllers\UsuariosController@edit');
Route::post('/usuarios/edit/{id}', 'App\Http\Controllers\UsuariosController@update')->name('alterar-usuario');

Route::get('usuarios/delete/{id}', 'App\Http\Controllers\UsuariosController@delete');
Route::post('usuarios/delete/{id}', 'App\Http\Controllers\UsuariosController@destroy')->name('excluir-usuario');

////////////// CRUD Troféus Routes
Route::get('/trofeus/create', 'App\Http\Controllers\TrofeusController@create');
Route::post('/trofeus/create', 'App\Http\Controllers\TrofeusController@store')->name('cadastrar-trofeu');

Route::get('/trofeus/read/{id}', 'App\Http\Controllers\TrofeusController@read');

Route::get('/trofeus/edit/{id}', 'App\Http\Controllers\TrofeusController@edit');
Route::post('/trofeus/edit/{id}', 'App\Http\Controllers\TrofeusController@update')->name('alterar-trofeu');


Route::get('trofeus/delete/{id}', 'App\Http\Controllers\TrofeusController@delete');
Route::post('trofeus/delete/{id}', 'App\Http\Controllers\TrofeusController@destroy')->name('excluir-trofeu');

////////////// CRUD Publicações Routes
Route::get('/publicacoes/create', 'App\Http\Controllers\PublicacoesController@create');
Route::post('/publicacoes/create', 'App\Http\Controllers\PublicacoesController@store')->name('cadastrar-publicacao');

Route::get('/publicacoes/read/{id}', 'App\Http\Controllers\PublicacoesController@read');

Route::get('/publicacoes/edit/{id}', 'App\Http\Controllers\PublicacoesController@edit');
Route::post('/publicacoes/edit/{id}', 'App\Http\Controllers\PublicacoesController@update')->name('alterar-publicacao');


Route::get('publicacoes/delete/{id}', 'App\Http\Controllers\PublicacoesController@delete');
Route::post('publicacoes/delete/{id}', 'App\Http\Controllers\PublicacoesController@destroy')->name('excluir-publicacao');

////////////// CRUD Admin Routes
Route::get('/admin/create', 'App\Http\Controllers\AdminController@create');
Route::post('/admin/create', 'App\Http\Controllers\AdminController@store')->name('cadastrar-admin');

Route::get('/admin/read/{id}', 'App\Http\Controllers\AdminController@read');

Route::get('/admin/edit/{id}', 'App\Http\Controllers\AdminController@edit');
Route::post('/admin/edit/{id}', 'App\Http\Controllers\AdminController@update')->name('alterar-admin');


Route::get('admin/delete/{id}', 'App\Http\Controllers\AdminController@delete');
Route::post('admin/delete/{id}', 'App\Http\Controllers\AdminController@destroy')->name('excluir-admin');

////////////// CRUD Curtida Routes
Route::get('/curtidas/create', 'App\Http\Controllers\CurtidaController@create');
Route::post('/curtidas/create', 'App\Http\Controllers\CurtidaController@store')->name('cadastrar-curtida');

Route::get('/curtidas/read/{id}', 'App\Http\Controllers\CurtidaController@read');

Route::get('/curtidas/edit/{id}', 'App\Http\Controllers\CurtidaController@edit');
Route::post('/curtidas/edit/{id}', 'App\Http\Controllers\CurtidaController@update')->name('alterar-curtida');


Route::get('curtidas/delete/{id}', 'App\Http\Controllers\CurtidaController@delete');
Route::post('curtidas/delete/{id}', 'App\Http\Controllers\CurtidaController@destroy')->name('excluir-curtida');

////////////// CRUD Denuncia Routes
Route::get('/denuncias/create', 'App\Http\Controllers\DenunciaController@create');
Route::post('/denuncias/create', 'App\Http\Controllers\DenunciaController@store')->name('cadastrar-denuncia');

Route::get('/denuncias/read/{id}', 'App\Http\Controllers\DenunciaController@read');

Route::get('/denuncias/edit/{id}', 'App\Http\Controllers\DenunciaController@edit');
Route::post('/denuncias/edit/{id}', 'App\Http\Controllers\DenunciaController@update')->name('alterar-denuncia');


Route::get('denuncias/delete/{id}', 'App\Http\Controllers\DenunciaController@delete');
Route::post('denuncias/delete/{id}', 'App\Http\Controllers\DenunciaController@destroy')->name('excluir-denuncia');

////////////// CRUD Usuario Segue Usuario Routes
Route::get('/follow/create', 'App\Http\Controllers\SeguirController@create');
Route::post('/follow/create', 'App\Http\Controllers\SeguirController@store')->name('cadastrar-follow');

Route::get('/follow/read/{id}', 'App\Http\Controllers\SeguirController@read');

Route::get('/follow/edit/{id}', 'App\Http\Controllers\SeguirController@edit');
Route::post('/follow/edit/{id}', 'App\Http\Controllers\SeguirController@update')->name('alterar-follow');


Route::get('follow/delete/{id}', 'App\Http\Controllers\SeguirController@delete');
Route::post('follow/delete/{id}', 'App\Http\Controllers\SeguirController@destroy')->name('excluir-follow');
