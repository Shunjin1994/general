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
    return view('child');
});

//checkだとエラー
Route::group(['middleware' => 'auth'], function() {
    Route::get('/commissions/new', 'CommissionsController@new')->name('commissions.new');
    Route::post('/commissions', 'CommissionsController@create')->name('commissions.create');
    // Route::get('/commissions', 'CommissionsController@index')->name('commissions');
    Route::get('/commissions/{id}/edit', 'CommissionsController@edit')->name('commissions.edit');
    Route::post('/commissions/{id}', 'CommissionsController@update')->name('commissions.update');
    Route::post('/commissions/{id}/delete', 'CommissionsController@destroy')->name('commissions.delete');
    Route::get('/commissions/{id}', 'CommissionsController@show')->name('commissions.show');
    Route::post('/mypage', 'CommissionsController@mypage')->name('mypage');
    Route::get('/mypage', 'CommissionsController@mypage')->name('mypage');
    Route::post('/profile_show', 'ProfileController@show')->name('profile.show');
    Route::post('/profile_edit', 'ProfileController@update')->name('profile.update');
});

Route::get('/login', 'LoginController@loggedOut')->name('logout');

Route::get('/commissions', 'CommissionsController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
