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
    return view('index');
});

Route::get('/styleguide', function () {
    return view('styleguide');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/admin', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/admin', 'Auth\LoginController@login');

//Route::get('/admin/dashboard', 'PromotionsController@getData')->middleware('auth');

Route::get('/admin/promotions/show', 'PromotionsController@getData')->name('getdata')->middleware('auth');

Route::get('/admin/promotions', 'PromotionsController@index')->middleware('auth');


