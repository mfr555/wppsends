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

    Route::get('/contactar', function(){
        return view('base-de-datos.contactar');
    });

    Route::get('/contactos', function(){
        return view('base-de-datos.administrar-contactos');
    });

    Route::get('/default', function(){
        return view('welcome');
    });

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
