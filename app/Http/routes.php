<?php


Route::get('/', [
    'uses' => '\Prego\Http\Controllers\HomeController@index',
    'as'   => 'index'
]);

Route::get('/auth/register', [
    'uses' => '\Prego\Http\Controllers\AuthController@getRegister',
    'as' => 'auth.register',
    'middleware' => ['guest']
]);

Route::post('/auth/register', [
    'uses' => '\Prego\Http\Controllers\AuthController@postRegister',
    'middleware' => ['guest']
]);

Route::get('/auth/signin', [
    'uses' => '\Prego\Http\Controllers\AuthController@getLogin',
    'as' => 'auth.login',
    'middleware' => ['guest']
]);

Route::post('/auth/signin', [
    'uses' => '\Prego\Http\Controllers\AuthController@postLogin',
    'middleware' => ['guest']
]);

Route::get('/logout', [
    'uses' => '\Prego\Http\Controllers\AuthController@logOut',
    'as'   => 'auth.logout'
]);
