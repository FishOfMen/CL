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

// General routes
Route::get('/', 'homeController@home');

Route::get('/login', 'homeController@login');

// User routes
Route::get('/users', 'userController@index');

Route::get('/users/create-user', 'userController@createUser');

Route::post('/users/create', 'userController@store');

// team Routes
Route::get('/teams', 'teamController@index');

Route::get('/teams/create-team', 'teamController@create');

// League routes


// Other routes
