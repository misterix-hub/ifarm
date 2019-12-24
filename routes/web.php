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

Route::get('/', function () {
    return view('welcome');
});

/* FERME */

Route::get('fermes', 'FermeController@index')->name('indexFermes');
Route::post('fermes', 'FermeController@store')->name('storeFerme');
Route::post('fermes/{id}/modifier', 'FermeController@update')->name('updateFerme');
Route::get('fermes/{id}/supprimer', 'FermeController@destroy')->name('destroyFerme');
Route::get('fermes/{id}/champs', 'FermeController@show')->name('champsFerme');

/* CHAMPS */

Route::get('champs', 'ChampsController@create')->name('createChamps');
Route::post('champs', 'ChampsController@store')->name('storeChamps');
Route::get('champs/{id}/modifier', 'ChampsController@edit')->name('editChamps');
Route::post('champs/{id}/modifier', 'ChampsController@update')->name('updateChamps');
Route::get('champs/{id}/supprimer', 'ChampsController@destroy')->name('destroychamps');

/* SEMENCE */

Route::get('semences/{id}/editer', 'SemenceController@edit')->name('editSemence');
Route::post('semences/store', 'SemenceController@store')->name('storeSemence');