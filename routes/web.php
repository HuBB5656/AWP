<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/','CanController@index');
Route::get('/createCandidate','CanController@create');
Route::post('/storeCandidate','CanController@store');
Route::get('/getCandidate','CanController@showAll');
Route::get('/candidate/{id}','CanController@show');
Route::get('/editCandidate/{id}', 'CanController@edit');
Route::post('/editCandidate/{id}','CanController@update');
Route::get('/delete/{id}','CanController@destroy');

Route::get('/elect','ElectionController@choose');



