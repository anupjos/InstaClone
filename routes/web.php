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

Auth::routes();

Route::get('/', 'PostController@feed');
Route::get('/p/create', 'PostController@getCreate');
Route::post('/p/create', 'PostController@postCreate');
Route::get('/p/{postId}', 'PostController@getPost');

Route::get('/profile/{user}/edit', 'ProfileController@getEdit');
Route::post('/profile/{user}/edit', 'ProfileController@postEdit');
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::post('/ajax/follow/{user}', 'ProfileController@getFollowing');
