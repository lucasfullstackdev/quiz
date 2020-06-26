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

/* 
 * +------------------------------------------------------+
 * | Rotas para autenticação | home ----------------------+
 * +------------------------------------------------------+
 */
Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('/logout', function(){
//     if (Auth::logout()){
//         dd('here');
//     }
//         return redirect()->route('home.index');
// });

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/home', 'HomeController@index')->name('home.index');


Route::middleware(['auth'])->group( function(){
    /* 
     * +------------------------------------------------------+
     * | Rotas para o questionário ---------------------------+
     * +------------------------------------------------------+
     */
    Route::prefix('questionario/')->name('questionario.')->group( function(){
        Route::get('/{id_questionario}', 'QuestionarioController@show')->name('show');
        Route::post('/', 'QuestionarioController@store')->name('store');
    });

    /* 
    * +------------------------------------------------------+
    * | Rotas para os Dashboards ----------------------------+
    * +------------------------------------------------------+
    */
    Route::prefix('dashboard')->name('dashboard.')->group( function(){
        Route::get('/', 'DashboardController@index')->name('index');
        Route::get('/respostas', 'DashboardController@listRespostas')->name('list-respostas');
    });
});

/* 
 * +------------------------------------------------------+
 * | Rotas para os informativos --------------------------+
 * +------------------------------------------------------+
 */
Route::post('/informativo', 'InformativoController@showByPost')->name('info.showbypost');
Route::get('/informativo/{informativo_id}', 'InformativoController@showByGet')->name('info.showbyget');



/* 
 * +------------------------------------------------------+
 * | Rotas para o Histórico de respostas -----------------+
 * +------------------------------------------------------+
 */
Route::prefix('dashboard/historico-respostas')->name('historico-respostas.')->group( function(){
    Route::get('/', 'HistoricoRespostaController@index')->name('index');
    Route::get('/questionario/{questionario_id}/user/{user_id}/created/{created_at}', 'HistoricoRespostaController@print')->name('print');
});