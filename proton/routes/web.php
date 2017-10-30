<?php


Route::get('/','HomeController@adv')->name('index');
Route::get('/findDistrict','HomeController@findDistrict');
Route::get('/findStation','HomeController@findStation');
Route::get('/findSubway','HomeController@findSubway');
Route::post('/','HomeController@save')->name('savepost');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/updateYesStatus/{id}', [ 'uses'=> 'AdminController@updateYesStatus', 'permission'=> 'update' ]);
Route::get('/updateNoStatus/{id}', [ 'uses'=> 'AdminController@updateNoStatus', 'permission'=> 'update' ]);
Route::get('/myhome', 'HomeController@myhome')->name('myhome');
Route::get('/show/{id}', 'HomeController@show')->name('show_advert');
