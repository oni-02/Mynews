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


Route::get('xxx','AAAController@bbb');

Route::group(['prefix'=>'admin'], function(){
    Route::get('profile/create', 'admin\profilecontroller@add');
    Route::get('profile/edit', 'admin\profilecontroller@edit');
    Route::get('news/create' , 'admin\newscontroller@add');
});


