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

Auth::routes(['register' => false, 'login'=>false]);
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('oldhome');

// News Pages
Route::get('/news', 'BlogController@index')->name('news');
Route::get('/news/{id}', 'BlogController@singleBlog')->name('news.single');
Route::get('/news-create','BlogController@addBlogPage')->name('news.add.page');
Route::post('/news-add', 'BlogController@addBlog')->name('blog.add');
Route::get('/news-edit','BlogController@editBlogPage')->name('news.edit.page');
Route::post('/news-edit/{id}', 'BlogController@editBlog')->name('news.edit');

//Team Pages
Route::get('/team-members', 'TeamController@index')->name('team.index');
Route::get('/team-member/add', 'TeamController@addTeamMemberPage')->name('team.add.page');
Route::post('/team-member/add', 'TeamController@addTeamMember')->name('team.add');
Route::get('/team-member/edit/{id}', 'TeamController@editTeamMemberPage')->name('team.edit.page');
Route::post('/team-member/edit/{id}', 'TeamController@editTeamMember')->name('team.edit');

// Admin
Route::get('/login', 'AdminController@login')->name('admin.login');

Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');