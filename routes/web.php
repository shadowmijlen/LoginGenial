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

Route::group(['namespace' => 'Login'], function () {

    #Vista Login
    Route::get('/', 'LoginController@index')->name('login');

    #Validar credenciales
    Route::post('/login', 'LoginController@login')->name('validar');

    #Vista Recuperar Contraseña
    Route::get('/clave', 'LoginController@clave')->name('clave');

    #Vista Recuperar Contraseña
    Route::post('/recuperar', 'LoginController@recuperar')->name('recuperar');

    #Cerrar Sesion
    Route::post('/logout', 'LoginController@logout')->name('logout');

    #Bienvenido a tu dashboard
    Route::get('/bienvenido','LoginController@bienvenido')->name('bienvenido');

});
