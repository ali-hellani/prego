<?php


Route::get('/', [
    'uses' => '\Prego\Http\Controllers\HomeController@index',
    'as'   => 'index'
]);