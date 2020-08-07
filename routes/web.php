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

Route::get('/', 'LoginsController@index');
Route::post('/', 'LoginsController@store');
Route::get('/register', 'RegistersController@index');
Route::post('/register', 'RegistersController@store');
Route::get('/reset', 'ResetsController@index');
Route::get('/dashboard', 'DashboardsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
