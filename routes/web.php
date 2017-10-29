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

Route::post('/signIn', 'homeController@signIn');
Route::get('/login', 'homeController@login');

Route::get('/logout', 'homeController@logout');

// User routes
Route::get('/users', 'userController@index');

Route::get('/users/create-user', 'userController@createUser');
Route::post('/users/create', 'userController@store');

Route::get('/users/profile/{id}', 'userController@profile');

// team Routes
Route::get('/teams', 'teamController@index');

Route::get('/teams/create-team', 'teamController@create');
Route::post('/teams/create', 'teamController@store');

// League routes
Route::get('/leagues', 'leaguesController@index');


// Other routes
Route::get('/weather', 'homeController@weather');

Route::get('/sports', 'gamesController@sports');
