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

Route::get('/', 'HomeController@index')->name('home');


// rotte diverse per la visualizazzione del cestiono (soft delete)
Route::get('/comics/trash', 'ComicsController@trash')->name('comics.trash');
Route::patch('/comics/{comic}/restore', 'ComicsController@restore')->name('comics.restore');


// queste sono le rotte generate da routs resorce
Route::resource('comics', 'ComicsController');
