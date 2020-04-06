<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('quotes', 'QuoteController@index');

Route::get('showquote/{quote}', 'QuoteController@showQuote');

Route::get('getquotes', 'QuoteController@getQuotes');

Route::get('newquotes', 'QuoteController@newQuotes');

Route::get('randquote', 'QuoteController@randQuote');
