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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'PagesController@getHome')->name('home');
Route::get('/cocreate', 'PagesController@getCocreate')->name('cocreate');
Route::get('/experience', 'PagesController@getExperience')->name('experience');
Route::get('/lifehacks', 'PagesController@getLifehacks')->name('lifehacks');
Route::get('/express', 'PagesController@getExpress')->name('express');
