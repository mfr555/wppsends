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


/* Route::get('/register', [RegisterController::class, 'show']);
Route::post('/action-register', [RegisterController::class, 'register']); */

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('app');
    Route::get('/default', function(){ return view('welcome'); });

    /**
     * Base de datos Routes
     */
    Route::get('/contactos', 'ContactosController@showPage');
    Route::post('/contactos', 'ContactosController@store')->name('contactos');
    Route::get('/contacto-editar', 'ContactosController@updatePage');
    Route::post('/contacto-editar', 'ContactosController@update')->name('contacto-editar');

    Route::get('/comunicaciones', 'ComunicacionesController@showAll');
    Route::post('/comunicaciones', 'ComunicacionesController@store')->name('comunicaciones');
    Route::get('/comunicaciones-abrir', 'ComunicacionesController@showOne');
    Route::post('/comunicaciones-editar', 'ComunicacionesController@edit');
    Route::post('/finalizar-comunicacion', 'ComunicacionesController@finalizar');

    Route::get('/comunicacion-contacto-nueva', 'ComunicacionContactoController@store');
    Route::get('/comunicacion-contacto-actualizar', 'ComunicacionContactoController@update');
    Route::get('/comunicacion-contacto-delete', 'ComunicacionContactoController@delete');
    Route::get('/editar-respuesta', 'ComunicacionContactoController@show');
    Route::post('/editar-respuesta', 'ComunicacionContactoController@updateResp')->name('editar-resp');
    Route::get('/lista-negra', 'ComunicacionContactoController@updateBlacklist');

    Route::post('/agregar-tematica', 'TematicasController@store')->name('agregar-tematica');



    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         *
   *     Route::get('/register', 'RegisterController@show')->name('register.show');
  *      Route::post('/register', 'RegisterController@register')->name('register.perform');
*/
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
