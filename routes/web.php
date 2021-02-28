<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', ['as' => 'site.home', 'uses' => 'Site\LoginController@index']);

Route::get('/login', ['as' => 'site.login', 'uses' => 'Site\LoginController@index']);

Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'Site\LoginController@sair']);

Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses' => 'Site\LoginController@entrar']);





Route::group(['middleware' => 'auth'], function () {

  Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'BaseController@index']);



//  Cronograma
Route::get('/admin/cursos/cronograma_desenvolvimento', ['as' => 'admin.cronograma.desen', 'uses' => 'BaseController@cronograma']);
Route::get('/admin/cursos/cronograma_nivelum', ['as' => 'admin.cronograma.nivelum', 'uses' => 'BaseController@cronograma']);
Route::get('/admin/cursos/cronograma_niveldois', ['as' => 'admin.cronograma.niveldois', 'uses' => 'BaseController@cronograma']);
Route::get('/admin/cursos/cronograma_astec', ['as' => 'admin.cronograma.astec', 'uses' => 'BaseController@cronograma']);

});
