<?php

/**
 * ========================================================================
 * 前台路由
 * ========================================================================
 */
Route::group(['middleware' => ['web'], 'namespace' => 'Weihome'], function () {
    //前台首页
    Route::get('/', 'IndexController@index');
});

/**
 * ========================================================================
 * 后台登录退出路由
 * ========================================================================
 */
Route::group(['middleware' => ['web'], 'prefix' => 'admin', 'namespace' => 'Weicms'], function () {
    //登录
    Route::get('login', 'IndexController@index');
});

/**
 * ========================================================================
 * 后台路由
 * ========================================================================
 */
Route::group(['middleware' => ['web', 'weicms.login'], 'prefix' => 'weicms', 'namespace' => 'Weicms'], function () {
    //前台首页
    Route::get('/', 'IndexController@index');
});


//Route::get('/', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
