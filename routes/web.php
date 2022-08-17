<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\http\controllers\Sitecontroller@gethome')->name('gethome');
Route::get('/about', 'App\http\controllers\Sitecontroller@getabout')->name('getabout');
Route::get('/route', 'App\http\controllers\Sitecontroller@getroute')->name('getroute');
Route::get('/gallery', 'App\http\controllers\Sitecontroller@getgallery');
Route::get('/contact', 'App\http\controllers\Sitecontroller@getcontact')->name('getcontact');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/test/cart', 'App\http\controllers\Sitecontroller@getTestCart')->name('getTestCart');
Route::post('/cart', 'App\http\controllers\Sitecontroller@postTestCart')->name('postTestCart');

Route::get('/search','App\Http\controllers\siteController@getFindBus')->name('getFindBus');




// admin homecontroller

Route::get('/BusList','App\Http\controllers\HomeController@getbusList')->name('getbusList');
Route::post('/savelist','App\Http\controllers\HomeController@postBusList')->name('postBusList');
Route::get('/delete/{ListBus}','App\Http\controllers\HomeController@getDeletebuslist')->name('getDeletebuslist');
Route::get('/update/{ListBus}','App\Http\controllers\HomeController@getEditbuslist')->name('getEditbuslist');
Route::post('/updated/{ListBus}','App\Http\controllers\HomeController@postEditbusdetail')->name('postEditbusdetail');

Route::get('/Schedule/{bus}','App\Http\controllers\HomeController@getSchedulebus')->name('getSchedulebus');
Route::post('/postSchedule','App\Http\controllers\HomeController@postScheduleList')->name('postScheduleList');

Route::get('/ManageSeat/{bus}','App\Http\controllers\HomeController@getManageSeat')->name('getManageSeat');
Route::post('/addbusseat/{bus}','App\Http\controllers\HomeController@postManageSeat')->name('postManageSeat');










Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	
	
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
