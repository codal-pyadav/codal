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

Route::get('/swagger', 'SwaggerController@index');

Route::get("test/{name}/{age}/{dob}", "TestController@index");

Route::get("demoStudent/{name}", "TestController@demoStudent");

Route::get("display/{name}", "TestController@display");

Route::get('/', function () {
    return view('testView');
});

Route::get("insert", "DemoController@insertData");

Route::get("displayStudentData/{name}", "DemoController@displayStudentData");
