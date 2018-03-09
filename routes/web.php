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

    Route::get('/register/confirm/{token}', 'RegisterController@confrimEmail');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/reports', 'ReportsController@index')->name('reports');
    Route::get('/statistics', 'StatisticsController@index')->name('statistics');
    Route::get('/help', 'HelpController@index')->name('help');

    Route::get('/userAccount', 'UserController@index')->name('account');
    Route::get('/userMessages', 'UserController@getMessages')->name('messages');

    Route::get('/devTools', 'DevController@index')->name('devTools');
