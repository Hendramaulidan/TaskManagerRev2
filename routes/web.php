<?php

//Index
Route::get('/', 'AwalController@index');
Route::get('/home/process', 'AwalController@process');
Route::get('/taskdef/newstart', 'AwalController@actStart');
Route::get('/taskdef/newprocess', 'AwalController@actProcess');
Route::get('/taskdef/newfinish', 'AwalController@actFinish');
Route::get('/home/delete/{is}','AwalController@delete');
Route::get('/home/toprocess/{is}','AwalController@toProcess');
Route::get('/home/tofinish/{is}','AwalController@toFinish');



Route::get('/home/kalender','CalenderController@Calenderku');
//Auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//newTask
Route::get('home/history','HomeController@history');
Route::get('home/masukan/{id}','HomeController@aksi');
Route::get('home/new/{id}','HomeController@aksiTask');
Route::get('home/{id}','HomeController@status');
Route::post('home/newParent','HomeController@newParent');
Route::post('home/editParent/{id}','HomeController@editParent');
Route::get('home/ParDel/{id}','HomeController@parDel');
Route::get('home/history/{id}','HomeController@hisDel');
Route::post('/home/newTask/{id}','HomeController@newTask');
Route::get('/home/delcolumn/{is}','HomeController@delColumn');




