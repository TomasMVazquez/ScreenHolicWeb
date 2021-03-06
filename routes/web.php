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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/movies', 'MoviesController@index');
Route::get('/movies/page/{id}', 'MoviesController@pages');
Route::get('/movies/{id}', 'MoviesController@detail');

Route::get('/series', 'SeriesController@index');
Route::get('/series/page/{id}', 'SeriesController@pages');
Route::get('/series/{id}', 'SeriesController@detail');

Route::get('/genres', 'GenresController@index');
