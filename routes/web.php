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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('books/results', 'BookController@index');
Route::post('books/books', 'BookController@index');

Route::get('space/space', 'spaceController@index');
Route::get('fixtures/results', 'fixturesController@index');

Route::post('movie/results', 'MoviesController@index');