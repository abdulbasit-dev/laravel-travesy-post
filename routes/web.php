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


Route::name('pages.')->group(function () {
  Route::get('/', "PageController@index")->name('index');
  Route::get('/about', "PageController@about")->name('about');
  Route::get('/service', "PageController@service")->name('service');
});

Route::resource('posts', 'PostController');
