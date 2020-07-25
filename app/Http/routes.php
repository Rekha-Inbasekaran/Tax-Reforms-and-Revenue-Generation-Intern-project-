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

// Route::get('/userlogin', function () {
//     return view('userlogin');
// });

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/insert','NewUserController@insertform');

Route::post('/create','NewUserController@insert');

Route::post('/checkdata','NewUserController@check');


Route::get('/entertax','NewUserController@taxdetailsform');


Route::get('/addmunicipality','NewUserController@addmunicipalityform');


Route::get('/inserttax','NewUserController@inserttax');

Route::get('/insertmunci','NewUserController@insertmunci');




