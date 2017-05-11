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

Route::resource('tasks', 'TasksController');
Route::get('/', 'TasksController@index');

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/task/{id?}', function ($id = null) {
    return 'User '.$id;
});

Route::get('/test/{param}', function ($param) {
    return view('test')->with('param', $param);
});

Route::get('/tasks', 'TasksController@index');
*/
//Route::get('tasks/{id?}', 'TasksController@show')->name('tasksShow');
//route('task', ['id' => 1]);
