<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adicao','ContadorController@adicao');

Route::get('/subtracao','ContadorController@subtracao');

Route::get('/multiplicacao','ContadorController@multiplicacao');

Route::get('/divisao','ContadorController@divisao');

Route::get('/porcentagem','ContadorController@porcentagem');