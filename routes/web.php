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

        //Usuarios
        Route::prefix('user')->group(function() {
            Route::get('{id}/show/', 'UserController@show')->name('user');
            Route::get('{id}/edit/', 'UserController@edit')->name('user-edit');
            Route::post('/{id}/update-password', 'UserController@updatePassword')->name('user-update-password');
            Route::get('index', 'UserController@index')->name('user.index');
        });

        //Listas
        Route::prefix('listas')->group(function() {
            Route::get('/', 'ListaController@index')->name('listas');
            Route::get('/create', 'ListaController@create')->name('listas.create');
            Route::post('/store', 'ListaController@store')->name('listas.store');
            Route::get('/{id}/edit', 'ListaController@edit')->name('listas.edit');
            Route::post('/update', 'ListaController@update')->name('listas.update');
        });

        Route::get('/contactos', 'ContactosController@showPage');
        Route::post('/contactos', 'ContactosController@store')->name('contactos');
        Route::get('/contacto-editar', 'ContactosController@updatePage');
        Route::post('/contacto-editar', 'ContactosController@update')->name('contacto-editar');

        Route::get('/comunicaciones', 'ComunicacionesController@showAll');
        Route::post('/comunicaciones', 'ComunicacionesController@store')->name('comunicaciones');
        Route::get('/comunicaciones-abrir', 'ComunicacionesController@showOne');
        Route::post('/comunicaciones-editar', 'ComunicacionesController@edit');
        Route::post('/finalizar-comunicacion', 'ComunicacionesController@finalizar');

        Route::post('/confirmar-mensajes/{comunicacion_id}', 'ComunicacionContactoController@confirmarMensajes');

        Route::prefix('/reportes')->group(function () {
            Route::get('/comunicaciones/{comunicacion_id}', 'ReportesController@comunicaciones');
        });

        Route::get('/comunicacion-contacto-nueva', 'ComunicacionContactoController@store');
        Route::get('/comunicacion-contacto-actualizar', 'ComunicacionContactoController@update');
        Route::get('/comunicacion-contacto-delete', 'ComunicacionContactoController@delete');
        Route::get('/editar-respuesta', 'ComunicacionContactoController@show');
        Route::post('/editar-respuesta', 'ComunicacionContactoController@updateResp')->name('editar-resp');
        Route::get('/lista-negra', 'ComunicacionContactoController@updateBlacklist');

        Route::post('/agregar-tematica', 'TematicasController@store')->name('agregar-tematica');
        Route::post('/agregar-origen', 'OrigenController@store')->name('agregar-origen');

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
