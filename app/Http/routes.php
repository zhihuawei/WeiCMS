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
    Route::get('/', 'LoginController@login');
    //登录
    Route::get('login', 'LoginController@login');
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
