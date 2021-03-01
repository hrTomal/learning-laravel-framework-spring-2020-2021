<?php

Route::get('/', function () {
    echo "welcome";
});


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

Route::get('/home', 'HomeController@index');

Route::get('/home/create', 'HomeController@create');
Route::post('/home/create', 'HomeController@store');
Route::get('/home/userlist', 'HomeController@userlist');

Route::get('/home/edit/{id}', 'HomeController@edit');
Route::post('/home/edit/{id}', 'HomeController@update');

Route::get('/home/delete/{id}', 'HomeController@delete');
Route::post('/home/delete/{id}', 'HomeController@destroy');
