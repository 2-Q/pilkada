<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::group(['middleware'=>'auth'], function () {
	// Route::get('register', function () {
	//     return view('auth.register');
	// });
	Route::get('dashboard', function () {
	    return view('backend.index');
	});
	Route::get('pemilih', 'VoterController@index');
});


	Route::get('/', 'FrontendController@index');
	Route::post('/', 'FrontendController@inputEmail');
	Route::put('/', 'FrontendController@vote');


	Route::get('lupakan', 'FrontendController@lupakan');

	Route::get('/welcome', function () {
	    return view('frontend.sudah');
	});
