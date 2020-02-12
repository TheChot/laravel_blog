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
Route::get('/blog', 'FrontendController@blogAll')->name('blog');
Route::get('/blog/{id}', 'FrontendController@blogSingle')->name('blog.single');
Route::get('/contact-us', 'FrontendController@contactPage')->name('contact_us');
Route::post('/contact-us', 'FrontendController@contactSubmit')->name('contact_submit');
Route::get('/team', 'FrontendController@teamPage')->name('team');


Auth::routes(['register' => false]);
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('oldhome');


// Route::get('/news', 'BlogController@index')->name('news');
// Route::get('/news/{id}', 'BlogController@singleBlog')->name('news.single');





//Team Pages






// Admin
// Route::get('/login', 'AdminController@login')->name('admin.login');

Route::group(['prefix'=>'admin','middleware'=>'auth', 'as'=>'admin.'], function(){
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

    // News Pages
    Route::get('/news', 'BlogController@index')->name('news');
    Route::get('/news-create','BlogController@addBlogPage')->name('news.add.page');
    Route::post('/news-add', 'BlogController@addBlog')->name('blog.add');
    Route::get('/news-edit/{id}','BlogController@editBlogPage')->name('news.edit.page');
    Route::post('/news-edit/{id}', 'BlogController@editBlog')->name('news.edit');

    // Contact Form managememnt
    Route::get('/contact-form','AdminController@allContacts')->name('all_contacts');
    Route::get('/contact-form/{id}','AdminController@singleContact')->name('single_contact');

    // Team Members
    Route::get('/team-members', 'TeamController@index')->name('team.index');
    Route::get('/team-member/add', 'TeamController@addTeamMemberPage')->name('team.add.page');
    Route::post('/team-member/add', 'TeamController@addTeamMember')->name('team.add');
    Route::get('/team-member/edit/{id}', 'TeamController@editTeamMemberPage')->name('team.edit.page');
    Route::post('/team-member/edit/{id}', 'TeamController@editTeamMember')->name('team.edit');

    // Add Users
    Route::get('/users', 'AdminController@allUsers')->name('users.index');
    Route::get('/user-add', 'AdminController@addUserPage')->name('user.add.page');
    Route::post('/user-add', 'AdminController@addUser')->name('user.add');
    Route::get('/user-edit/{id}', 'AdminController@addUserPage')->name('user.edit.page');
    Route::get('/user-edit', 'AdminController@editUser')->name('user.edit');
    
});
