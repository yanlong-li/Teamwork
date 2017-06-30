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
Route::group(['prefix' => 'blog','namespace'=>'Blog'],function (){
    //博客
    Route::any('','IndexController@index');
    Route::any('index','IndexController@index');
});


//auth
Auth::routes();

//home
Route::get('/home', 'HomeController@index')->name('home');

//团队协作管理软件
Route::get('team','Team\IndexController@index');

//团队管理软件文档
Route::get('team/docs','Team\IndexController@docs');

Route::get('/{name}', function ($user) {
    return $user.'正在建设中';
});