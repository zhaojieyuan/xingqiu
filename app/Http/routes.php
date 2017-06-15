<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/content/{name}',function($name){

    return "laravel框架 {$name} ";
});

Route::any('/get_post',function(){

    return "可以传get或post";
});
//前台
Route::any('/index',"IndexController@index");
Route::any('/index/main',"IndexController@main");
Route::any('/index/register',"IndexController@register");
Route::any('/index/log',"IndexController@log");
Route::any('/index/china',"IndexController@china");

//后台
Route::any('/login',"AdminController@login");
Route::any('/admin',"AdminController@index");
Route::any('/admin/add',"AdminController@add");
Route::any('/admin/cate',"AdminController@cate");
Route::any('/admin/page',"AdminController@page");
Route::any('/admin/main',"AdminController@main");
Route::any('/admin/tips',"AdminController@tips");
Route::any('/admin/pass',"AdminController@index");
Route::any('/admin/cate_add',"AdminController@cate_add");

//登陆
Route::get('login/show','LoginController@show');
Route::get('register/reg','RegisterController@reg');





