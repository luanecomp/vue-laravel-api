<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('accounts', 'AccountController@index');
Route::group(['prefix' => 'account'], function () {
	Route::get('edit/{id}', 'AccountController@edit');
	
    Route::get('saldo/{account}', 'AccountController@saldo');
    Route::post('depositar/{account}', 'AccountController@depositar');
    Route::post('sacar/{account}', 'AccountController@sacar');
});


/*Route::get('books', 'BookController@index');
Route::group(['prefix' => 'book'], function () {
    Route::post('add', 'BookController@add');
    Route::get('edit/{id}', 'BookController@edit');
    Route::post('update/{id}', 'BookController@update');
    Route::delete('delete/{id}', 'BookController@delete');
});*/
