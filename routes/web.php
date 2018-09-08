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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/test', function () {
// 		echo 'test';
// 	});

// Route::get('/test/abc', function () {
// 		echo 'test abc';
// 	});

// Route::get('/test/aaa', function () {
// 		echo 'test aaa';
// 	});

Route::group(['prefix' => '/test'], function () {
		Route::get('/', function () {
				// echo 'test';
				return view('test');
			});

		// Route::get('/abc', function () {
		// 		echo 'test abc';
		// 	});
		Route::get('/abc', 'TestController@abc');

		// Route::get('/aaa', function () {
		// 		echo 'test aaa';
		// 	});
		Route::get('/aaa/{p1}/{p2}', 'TestController@aaa');

		Route::get('/view', 'TestController@view');

		Route::get('/demo', 'TestController@demo');

		Route::get('/list', 'TestController@list');

		Route::get('/list1', [
				'as'   => 'list1',
				'uses' => 'TestController@list1'
			]);
	});

Route::get('/giao-duc-khuyen-hoc/{param}', function ($param) {
		echo $param;
	});

Route::get('/post/{param1}/{param2}', function ($param1, $param2) {
		echo $param1;
		echo '<br/>';
		echo $param2;
	});