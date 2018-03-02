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


Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){

	Route::resource('user','UserController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*Route::group(['middleware' => 'auth'], function() {
  Route::resource('/dashboard', 'DashboardControllerr');
});*/


/*Route::resource('/dashboard', 'DashboardControllerr');*/

/*
Route::resource('/dashboard','DashboardControllerr');
*/

/*
Route::get('dashboard/{id}', function ($id) {
    return 'dashboard '.$id;
})->middleware('auth');

*/


