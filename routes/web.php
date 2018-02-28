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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('dashboard', function () {
    return view('template.user.dashboard');
});*/


/*Route::group(['prefix' => 'user'], function(){

	Route::resource('user','UserController');

});*/

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('/dashboard','DashboardControllerr');

Route::get('dashboard', function () {
    return view('dashboard.index');
});

