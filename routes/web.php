<?php

Route::group(['middleware' => 'guest'], function() {
	Route::get('/profile', 'CustomersController@registerCustomer');	
	Route::post('/profile', 'CustomersController@createCustomer');	

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
