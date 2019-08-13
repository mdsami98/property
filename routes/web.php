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

Route::get('/user/profile/{id}', 'ProfileController@userView')->name('user.profile.view');

Route::post('/profile/phone', 'ProfileController@addNumber')->name('profile.addnumber');
Route::post('/profile/address', 'ProfileController@addAddress')->name('profile.addaddress');
Route::post('/profile/about', 'ProfileController@addAbout')->name('profile.addabout');
Route::post('/profile/image', 'ProfileController@addImage')->name('profile.addimage');

Route::post('/search/property', 'SearchController@search')->name('search.property');

Route::resource('/user/favourite', 'FavouriteController');




Route::group(['middleware'=> 'auth'], function () {

    Route::post('/comment/replies', 'CommentRepliesController@createReply');
    Route::post('/comment', 'PostCommentController@createReply');

    Route::resource('/user/post', 'UserPostController');
    Route::post('/user/post/payment', 'UserPostController@payment')->name('post.payment');



});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['as' => 'admin.', 'middleware'=> 'admin'], function () {

  Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
  Route::get('/admin/post/published/{id}', 'AdminController@publication')->name('post.publication');
  Route::resource('/category', 'CategoryController');
  Route::resource('/type', 'TypeController');
  Route::resource('/post', 'PostController');
  Route::resource('/post/image', 'PostImageController');
  Route::resource('/users', 'UserController');
  Route::get('/agents/list', 'UserController@allAgents')->name('agents');
  Route::get('/admin/list', 'UserController@addAdmin')->name('admins');
  Route::get('/change/{id}', 'UserController@change')->name('user.change');


  Route::resource('admin/comments', 'PostCommentController');
  Route::resource('admin/comment/replies', 'CommentRepliesController');

  Route::resource('admin/log', 'LogController');


});


Route::group(['as' => 'agent.', 'middleware'=> 'agent'], function () {

    Route::get('/agent/home', 'AgentController@index')->name('home');

    Route::resource('agent/users', 'AgentUserController');
    Route::resource('agent/category', 'AgentCategoryController');

    Route::resource('agent/post', 'AgentPostController');
    Route::get('agent/my/post', 'AgentPostController@myPost')->name('my.post');
    Route::get('agent/unpublished/post', 'AgentPostController@unpublishedPost')->name('unpublished.post');
    Route::get('agent/post/published/{id}', 'AdminController@publication')->name('post.publication');
    Route::resource('agent/post/image', 'AgentPostImageController');

    Route::resource('agent/comments', 'PostCommentController');
    Route::resource('agent/comment/replies', 'CommentRepliesController');

});
