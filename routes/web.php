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

//Route::get('/', function () {
//    return view('frontEnd.home.home');
//});

Route::get('/', 'IndexController@index')->name('user.home');
Route::get('/property/{id}', 'IndexController@singleView')->name('user.singleView');

Route::get('/property/category/{id}', 'IndexController@categoryView')->name('user.categoryView');
Route::get('/property/type/{id}', 'IndexController@typeView')->name('user.typeView');


Route::resource('/profile', 'ProfileController');


Route::post('/search/property', 'SearchController@search')->name('search.property');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['as' => 'admin.', 'middleware'=> 'admin'], function () {

  Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
  Route::get('/admin/post/published/{id}', 'AdminController@publication')->name('post.publication');
  Route::resource('/category', 'CategoryController');
  Route::resource('/type', 'TypeController');
  Route::resource('/post', 'PostController');
  Route::resource('/post/image', 'PostImageController');


});

