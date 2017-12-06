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
	if(\Illuminate\Support\Facades\Auth::user()) return redirect()->route('dashboard');
	return view('index');
})->name('login');

Route::post('/register', [
	'uses' => 'UserController@register',
	'as' => 'register'
]);

Route::post('/signin', [
	'uses' => 'UserController@signin',
	'as' => 'signin'
]);

Route::get('/live', [
	'uses' => 'DemoController@getView',
	'as' => 'liveDemo'
]);

Route::post('/uploadPic', [
	'uses' => 'DemoController@uploadPic',
	'as' => 'uploadPic'
]);

Route::get('/getImage/{id}', [
	'uses' => 'DemoController@getImage',
	'as' => 'getImage'
]);


Route::group(['middleware' => ['auth']], function() {
	Route::get('/dashboard', [
		'uses' => 'DashboardController@getDashboard',
		'as' => 'dashboard'
	]);

	Route::get('/logout', [
		'uses' => 'UserController@logout',
		'as' => 'logout'
	]);

	Route::get('/getDocumentation/{id}', [
		'uses' => 'DashboardController@getDocumentation',
		'as' => 'getDocumentation'
	]); 

	Route::post('/fetchText', [
		'uses' => 'DashboardController@fetchText',
		'as' => 'fetchText'
	]);

	Route::post('/createApp', [
		'uses' => 'DashboardController@createApp',
		'as' => 'createApp'
	]);

});

