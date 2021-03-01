<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');


Route::get('/home/adminIndex', 'HomeController@adminIndex');
Route::get('/home/customerIndex', 'HomeController@customerIndex');
Route::get('/home/adminIndex', 'HomeController@accountantIndex');
Route::get('/home/customerIndex', 'HomeController@partnerIndex');
Route::get('/home/adminIndex', 'HomeController@salesIndex');
Route::get('/home/customerIndex', 'HomeController@vendorIndex');
