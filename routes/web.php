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

/* login */
Route::get('/admin','AdminController@index');
Route::post('/admin_login','AdminController@adminLogin');
Route::get('/dashboard','SuperAdminController@index');
Route::get('/logout','SuperAdminController@logOut');

/*Start category */
Route::get('/add-category','SuperAdminController@addCategory');
Route::post('/save-category','SuperAdminController@saveCategoryData');
Route::get('/view-category','SuperAdminController@viewCategoryData');
Route::get('/unpublish-category/{id}','SuperAdminController@unpublishCategoryById');
Route::get('/publish-category/{id}','SuperAdminController@publishCategoryById');
Route::get('/delete-category/{id}','SuperAdminController@deleteCategoryById');
Route::get('/edit-category/{id}','SuperAdminController@editCategoryById');
Route::post('/update-category','SuperAdminController@updateCategoryData');
/*End category */

/*Start BLog related web routes*/

Route::get('/add-blog','SuperAdminController@add_blog');
Route::post('/save-blog','SuperAdminController@saveBlogData');
Route::get('/view-blog','SuperAdminController@viewBlogData');
Route::get('/unpublish-blog/{id}','SuperAdminController@unpublishBlogById');
Route::get('/publish-blog/{id}','SuperAdminController@publishBlogById');
Route::get('/delete-blog/{id}','SuperAdminController@deleteBlogById');
Route::get('/edit-blog/{id}','SuperAdminController@editBlogById');
Route::post('/update-blog','SuperAdminController@updateBlogData');
/*End BLog related web route*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
