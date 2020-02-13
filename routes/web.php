<?php

//Index
Route::get('/', 'AwalController@index');



Route::get('/home/delete/{is}','HomeController@delete');
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
Route::post('/home/newTask/{id}','HomeController@newTask');




