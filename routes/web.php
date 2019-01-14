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

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/countries','CountryController@index');
Route::get('/cities','CityController@index');
Route::get('/clubs','ClubController@index');
Route::get('/leagues','LeagueController@index');
Route::get('/players','PlayerController@index');
Route::get('/continents', 'ContinentController@index');

Route::get('/countries/new', 'CountryController@create');
Route::post('/countries', 'CountryController@store');

Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');

Route::get('/clubs/new', 'ClubController@create');
Route::post('/clubs', 'ClubController@store');

Route::get('/players/new', 'PlayerController@create');
Route::post('/players', 'PlayerController@store');

Route::get('/leagues/new', 'LeagueController@create');
Route::post('/leagues', 'LeagueController@store');

Route::get('/continents/new', 'ContinentController@create');
Route::post('/continents', 'ContinentController@store');

