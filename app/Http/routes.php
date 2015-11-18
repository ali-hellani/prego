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

Route::resource('projects', 'ProjectController');

Route::post('projects/{projects}/tasks', [
    'uses' => '\Prego\Http\Controllers\ProjectTasksController@postNewTask',
    'as' => 'projects.tasks.create'
]);

Route::get('projects/{projects}/tasks/{tasks}/edit', [
    'uses' => '\Prego\Http\Controllers\ProjectTasksController@getOneProjectTask',
    'as' => 'projects.tasks'
]);

Route::put('projects/{projects}/tasks/{tasks}', [
    'uses' => '\Prego\Http\Controllers\ProjectTasksController@updateOneProjectTask',
]);

Route::delete('projects/{projects}/tasks/{tasks}', [
    'uses' => '\Prego\Http\Controllers\ProjectTasksController@deleteOneProjectTask',
]);

Route::post('projects/{projects}/files', [
    'uses' => '\Prego\Http\Controllers\FilesController@uploadAttachments',
    'as'   => 'projects.files',
    'middleware' => ['auth']
]);