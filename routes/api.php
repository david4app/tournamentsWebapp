<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('locations', 'LocationController@index');
Route::post('locations', 'LocationController@store');
Route::delete('locations/{id}', 'LocationController@destroy');
Route::put('locations/{location}', 'LocationController@update' );

Route::get('matches', 'MatchController@index');
Route::get('matches/{id}', 'MatchController@show');
Route::post('matches', 'MatchController@store');
Route::delete('matches/{id}', 'MatchController@destroy');
Route::put('matches/{match}', 'MatchController@update' );


Route::get('users', 'UserController@index');
Route::post('users', 'UserController@store');
Route::delete('users/{id}', 'UserController@destroy');
Route::put('users/{user}', 'UserController@update' );


Route::get('players', 'PlayerController@index');
Route::post('players', 'PlayerController@store');
Route::delete('players/{id}', 'PlayerController@destroy');
Route::put('players/{player}', 'PlayerController@update' );


Route::get('teams', 'TeamController@index');
Route::post('teams', 'TeamController@store');
Route::delete('teams/{id}', 'TeamController@destroy');
Route::put('teams/{team}', 'TeamController@update' );


Route::get('tournaments', 'TournamentController@index');
Route::post('tournaments', 'TournamentController@store');
Route::delete('tournaments/{id}', 'TournamentController@destroy');
Route::put('tournaments/{tournament}', 'TournamentController@update' );
