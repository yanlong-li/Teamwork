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
|
*/
//首页
Route::any('/','IndexController@index');

//博客
Route::group(['prefix' => 'blog', 'namespace' => 'Blog'], function () {
    Route::any('','IndexController@index');
    Route::any('index','IndexController@index');

});
//团队协作管理软件
Route::group(['prefix' => 'team', 'namespace' => 'Team'], function () {
    Route::get('', 'IndexController@index');
    //文档
    Route::get('docs', 'IndexController@docs');
});

//auth
Auth::routes();

//home
Route::any('home/index','Home\IndexController@index');
//Route::get('/home', 'HomeController@index')->name('home');