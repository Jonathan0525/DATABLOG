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

Route::get('/', [
	'as' => 'welcome',
	'uses' => 'FrontController@index'
]);

Route::get('/template/partials/menu', 'TestController@index');



Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){

	Route::resource('user','UserController');
	Route::resource('categories','CategoriesController');

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
		'uses'  => 'TagsController@destroy',
		'as'	=> 'dashboard.tags.destroy'

	]);

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('dashboard/user/img', 'UserController@postNewImage')->name('image');





