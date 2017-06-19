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
//首页
Route::get('/', function () {
    return view('welcome');
});
//照片
Route::get('photo','PhotoController@index');


//auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('team','Team\IndexController@index');
Route::get('team/docs','Team\IndexController@index');
//Route::group();