<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "MoviesController@index");

//Route::resource("movies", "MoviesController");
Route::get("movies/getMovies", "MoviesController@getMovies");
Route::post("movies/", "MoviesController@store");
Route::put("movies/","MoviesController@update");
Route::delete("movies/", "MoviesController@destroy");
