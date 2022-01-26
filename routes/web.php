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


Route::resource('/people', 'PersonController');
Route::post('/favorite/assign-to-person', 'FavoriteController@store');
Route::get('/favorites/create', 'FavoriteController@create')->name('favorites.create');

