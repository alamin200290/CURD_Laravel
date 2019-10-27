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

Route::get('/welcome', 'PageController@index');
Route::get('/page/admin', 'PageController@admin');
Route::get('/page/user', 'PageController@user');


//Route::get('/login', ["uses"=>"LoginController@index"]);
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@valid');

Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
	Route::post('/home/profile', 'HomeController@upload');

	Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');
	Route::get('/home/stdList', 'HomeController@show')->name('home.stdlist');
	Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
	Route::post('/home/edit/{sid}', 'HomeController@update');

	Route::group(['middleware'=>['type']], function(){

		Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{sid}', 'HomeController@destroy');
		Route::get('/home/add', 'HomeController@add')->name('home.add');
		//Route::get('/home/add', ["as"=>"home.add","uses"=>"HomeController@add"]);
		Route::post('/home/add', 'HomeController@create');
	});

});

Route::get('/logout', 'LogoutController@index');
//Route::resource('accounts', 'AccountController');





