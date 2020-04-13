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

use App\Exports\FormulairesExport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middelware' => 'auth'], function () {

    Route::get('/formulaire/inscription','InscriptionController@index')->name('formulaire.inscription');
    Route::post('/formulaire/store','InscriptionController@store')->name('inscription.store');
    Route::get('/formulaire/show','InscriptionController@show')->name('formulaire.show');

    Route::get('/export','ExcelController@export')->name('export.excel');

    /*Route::get('/download', function (){
        return Excel::download(new FormulairesExport, 'formulaires.xlsx');
    });*/
});




