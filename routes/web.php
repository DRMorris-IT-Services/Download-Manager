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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/api/{id}', 'ApiController@index')->name('api');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/software', 'SoftwareController@index')->name('software');
Route::get('/software/add', 'SoftwareController@create')->name('software.add');
Route::post('/software/create', 'SoftwareController@store')->name('software.create');
Route::post('/software/update/{id}', 'SoftwareController@update')->name('software.update');
Route::get('/software/view/{id}', 'SoftwareController@show')->name('software.view');
Route::get('/software/edit/{id}', 'SoftwareController@edit')->name('software.edit');

Route::get('/downloads', 'DownloadsController@index')->name('downloads');
Route::post('/downloads/create/{id}', 'DownloadsController@store')->name('downloads.create');
Route::get('/downloads/view/{id}', 'DownloadsController@show')->name('download.view');
Route::get('/downloads/del/{id}', 'DownloadsController@destroy')->name('downloads.delete');