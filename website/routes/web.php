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
    return view('frontend.home');
});

Route::group(['namespace' => 'Frontend'], function () {

	require(__DIR__.'/frontend/main.php');

});

Route::group(['as' => 'cp.', 'prefix' => 'cp', 'namespace' => 'CP'], function() {
	require(__DIR__.'/cp/main.php');
});