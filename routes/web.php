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

Route::get('/', 'GeneralController@home')->name('home');

Route::get('/contatti', 'GeneralController@contatti_index')->name('contact');
Route::post('/contatti', 'ContactController@store')->name('send_message');

Route::get('/cafe', 'GeneralController@cafe_index');
Route::get('/cafe/bar', 'GeneralController@bar_index');
Route::get('/cafe/gelateria', 'GeneralController@gelateria_index');

Route::get('/food', 'GeneralController@food_index');
Route::get('/food/sea-food', 'GeneralController@sea_food_index');
Route::get('/food/steak-food', 'GeneralController@meat_dishes_index');
Route::get('/food/pizzeria', 'GeneralController@pizzeria_index');
Route::get('/food/street-food', 'GeneralController@street_food_index');

Route::get('/lounge/arsenale', 'GeneralController@arsenale_index');