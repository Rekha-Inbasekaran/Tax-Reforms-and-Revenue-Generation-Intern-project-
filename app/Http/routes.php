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

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/taxcollection','MunicipalityController@taxcollectionform');
Route::get('/demand','MunicipalityController@taxdemandform');
Route::get('/viewreport','MunicipalityController@reportform');


Route::get('/monthlyreport','MunicipalityController@mreportform');



Route::get('/annualreport','MunicipalityController@areportform');



Route::get('/insertcoll','MunicipalityController@insertcoll');

Route::get('/insertdmd','MunicipalityController@insertdmd');