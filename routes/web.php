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

Route::get('/', 'HomeController@index')->name('home.index');

Route::prefix('questionario/')->name('questionario.')->group( function(){
    Route::get('/{id_questionario}', 'QuestionarioController@show')->name('show');
    Route::post('/', 'QuestionarioController@store')->name('store');

    // Rota para os informativos
    Route::get('/{id_questionario}/informativo/{id_info}', 'InformativoController@show')->name('info.show');
});
