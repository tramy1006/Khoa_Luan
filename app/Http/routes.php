<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Category;
Route::get('/', 'HomeController@welcome');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/admin', 'UserController@admin');
//profile
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_profile');

Route::get('/profile/edit/{user}', 'UserController@getEdit');
Route::post('/profile/edit/{user}', 'UserController@postEdit');
Route::get('/profile/edit/password/{user}', 'UserController@getEditPass');
Route::post('/profile/edit/password/{user}', 'UserController@postEditPass');

/// quan ly user
Route::get('/users', 'UserController@users');
Route::get('/user/delete/{user}', 'UserController@getDelete');
Route::post('/update-role/{user}', 'UserController@updateRole');

//categories
Route::group(['prefix' => 'cate'], function(){
	Route::get('list', 'CateController@getList');
	Route::get('edit/{id}', 'CateController@getEdit');
	Route::post('edit/{id}', 'CateController@postEdit');
	Route::get('add', 'CateController@getAdd');
	Route::post('add', 'CateController@postAdd');
	Route::get('delete/{id}', 'CateController@getDelete');
});
Route::get('cate/show', 'CateController@getShow');
///lesson
Route::group(['prefix'=>'lesson'], function(){
	Route::get('list', 'LessonController@getList');

	Route::get('add', 'LessonController@getAdd');
	Route::post('add', 'LessonController@postAdd');
	
	Route::get('edit/{id}', 'LessonController@getEdit');
	Route::post('edit/{id}', 'LessonController@postEdit');
	
	Route::get('delete/{id}', 'LessonController@getDelete');

});

Route::group(['prefix'=>'comment'], function(){	
	Route::get('delete/{id}/{less_id}', 'CommentController@getDelete');
});



