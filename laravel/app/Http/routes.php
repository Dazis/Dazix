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

Route::any('test/index', 'TestController@index');


//王勃深
Route::any('index/show', 'IndexController@show');
Route::any('index/article_list', 'IndexController@article_list');
Route::any('index/type_list', 'IndexController@type_list');