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



/*Route::get('dashboard/articles/{slug}', [
	'as' => 'articles.vista',
	'uses' => 'FrontController@viewArticle'
])->where('slug', '[\w\d\-\_]+');*/

Route::get('dashboard/articles/vista/{slug}', [
	'as' => 'dashboard.articles.vista',
	'uses' => 'FrontController@viewArticle'
]);



Route::get('categories/{name}', [
	'as' => 'dashboard.search.category',
	'uses' => 'FrontController@searchCategory'
]);

Route::get('tags/{name}', [
	'as' => 'dashboard.search.tag',
	'uses' => 'FrontController@searchTag'
]);


Route::get('/dashboard/user/articles/{user_id}', [
	'as' => 'dashboard.user.articles',
	'uses' => 'UserController@SearchIdUser'
]);

Route::get('/', [
	'as' => 'welcome',
	'uses' => 'FrontController@searchArticle'
]);


Route::get('/template/partials/menu', 'TestController@index');

//Route::get('/template/partials/nav', 'SearchController@index');



Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){

	Route::resource('user','UserController');
	Route::resource('categories','CategoriesController');

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
		'uses'  => 'TagsController@destroy',
		'as'	=> 'dashboard.tags.destroy'

	]);

	Route::resource('articles', 'ArticlesController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('dashboard/user/img', 'UserController@postNewImage')->name('image');





