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

Route::get('/', function () {
    return view('welcome');
});

 //Tickettype creation
 Route::get('patients','Dashboard\PatientController@index')->name('patients.index');
 Route::get('patients/create', 'Dashboard\PatientController@create')->name("patients.create");
 Route::post('patients', 'Dashboard\PatientController@store')->name("patients.store");
 Route::get('patients/{patient_id}/edit', 'Dashboard\PatientController@edit')->name("patients.edit");
 Route::put('patients/{patient_id}', 'Dashboard\PatientController@update')->name("patients.update");
 Route::delete('patients/{patient_id}', 'Dashboard\PatientController@destroy')->name("patients.destroy");

 Route::get('games','Dashboard\GameController@index')->name('games.index');



 Route::get('patients/{patient_id}/results', 'Dashboard\ResultController@resultsPatient')->name("results.index.patient");
 Route::get('results', 'Dashboard\ResultController@index')->name("results.index");

 Route::get('patients/{patient_id}/results/create', 'Dashboard\GameController@index')->name("results.create");
//  Route::post('games/{game_id}/results', 'Dashboard\ResultController@store')->name("results.store");
//  Route::get('patients/{patient_id}/edit', 'Dashboard\PatientController@edit')->name("patients.edit");
//  Route::put('patients/{patient_id}', 'Dashboard\PatientController@update')->name("patients.update");
 Route::delete('resultss/{result_id}', 'Dashboard\ResultController@destroy')->name("results.destroy");

Route::get('games/{game_id}/results/create', 'Dashboard\ResultController@create')->name("result.details.create");
Route::post('games/{game_id}/results', 'Dashboard\ResultController@store')->name("result.details.store");
Route::put('games/{game_id}/results', 'Dashboard\ResultController@store')->name("result.details.update");
Route::get('results/{result_id}/resultDetails', 'Dashboard\ResultController@resultDetailsIndex')->name("result.details.index");
