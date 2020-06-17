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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//route to view all films
Route::get('/films', 'AllViewController@index');

//route to create a new film information
Route::get('/films/create', 'NewFilmController@create');

//route to post a film information
Route::post('/addFilm', 'NewFilmController@store');

//route to view an individual films
Route::get('/films/{film}', 'AllViewController@show');

//route to create comment about a film
Route::get('/comment/create/{film}', 'CommentController@create');

//route to post comment about a film
Route::post('/addComment', 'CommentController@store');





