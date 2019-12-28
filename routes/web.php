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

Route::get('/', 'FrontendController@index')->name('home');

Auth::routes(['register' => false]);
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('oldhome');

Route::get('/news', 'BlogController@index')->name('news');
Route::get('/news/{id}', 'BlogController@singleBlog')->name('news.single');
Route::get('/news-create','BlogController@addBlogPage')->name('news.add.page');
Route::post('/news-add', 'BlogController@addBlog')->name('blog.add');
Route::get('/news-edit','BlogController@editBlogPage')->name('news.edit.page');
Route::post('/news-edit/{id}', 'BlogController@editBlog')->name('news.edit');
