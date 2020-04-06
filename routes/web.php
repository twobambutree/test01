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
	return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/quotes', 'QuoteController@index')->name('quotes.index');

Route::post('/quotestore', 'QuoteController@store')->name('quotes.store');

//Route::post('/quotes', 'QuoteController@store');

Route::delete('/quotes', 'QuoteController@destroy');
