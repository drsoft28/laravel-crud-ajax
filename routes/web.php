<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TasksController@index');

Route::get('tasks', 'TasksController@index');
Route::post('tasks/store', 'TasksController@store');
Route::post('tasks/update', 'TasksController@update');
Route::post('tasks/destroy', 'TasksController@destroy');
Route::post('tasks/order', 'TasksController@order');
