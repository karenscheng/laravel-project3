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

use Illuminate\Http\Request;

Route::get('/books', 'BookController@index');
Route::post('/books', 'BookController@create');

Route::get('/books/{id}', 'BookController@show');
Route::put('/books/{id}', 'BookController@update');
Route::delete('/books/{id}', 'BookController@destroy');

Route::get('/genres', 'GenreController@index');
Route::post('/genres', 'GenreController@create');

Route::get('/genres/{id}', 'GenreController@show');
Route::put('/genres/{id}', 'GenreController@update');
Route::delete('/genres/{id}', 'GenreController@destroy');

Route::get('/authors', 'AuthorController@index');
Route::post('/authors', 'AuthorController@create');

Route::get('/authors/{id}', 'AuthorController@show');
Route::put('/authors/{id}', 'AuthorController@update');
Route::delete('/authors/{id}', 'AuthorController@destroy');

Route::get('/', function () {
    return view('welcome');
});
