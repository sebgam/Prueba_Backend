<?php

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



Route::group(['prefijo' => 'empresas'], function () {
   
    Route::resource('empresas','empresaController');
    Route::get('{id}/empresas/',[
    	'uses' => 'empresaController@destroy',
    	'as'=>'empresas.destroy',

    	]);


   
});

Route::group(['prefij' => 'empleados'], function () {
   
    Route::resource('empleados','empleadosController');
    Route::get('{id_empleados}/empleados/',[
    	'uses' => 'empleadosController@destroy',
    	'as'=>'empleados.destroy',

    	]);

   
});

Route::get('/', 'empresaController@index');
Route::get('/listarempleados', 'empleadosController@index');