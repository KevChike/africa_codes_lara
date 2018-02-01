<?php

Route::group(['middleware' => 'auth'], function() {
	Route::get('/profile', 'CustomersController@registerCustomer');	
	Route::post('/profile', 'CustomersController@createCustomer');	
	Route::get('/dashboard', 'DashboardController@dashboard');	

});

Route::get('/', function () {
    return view('auth.signin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
