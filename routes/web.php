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

Route::get('/','FrontEndController@index');
Route::get('/contact','FrontEndController@contact');
Route::get('/about','FrontEndController@about');
Route::get('/blogs','FrontEndController@blogs');
Route::get('/portfolio','FrontEndController@portfolio');
Route::get('/admin','AdminController@index');
Route::post('/dashboard','AdminController@adminLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
