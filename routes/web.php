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
Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
});

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/home', 'HomeController@index')->name('home.index');

Route::prefix('questionario/')->name('questionario.')->middleware(['auth'])->group( function(){
    Route::get('/{id_questionario}', 'QuestionarioController@show')->name('show');
    Route::post('/', 'QuestionarioController@store')->name('store');
});


// Rota para os informativos
Route::post('/informativo', 'InformativoController@show')->name('info.show')->middleware('auth');
