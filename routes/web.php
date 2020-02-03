<?php

//Index
Route::get('/', 'AwalController@index');



//CRUD
Route::get('/home/newtask','HomeController@newTask');
Route::get('/home/actiontambah','HomeController@actionNewTask');
Route::get('/home/edit/{id}','HomeController@inProgress');
Route::get('/home/finish/{it}','HomeController@finish');
Route::get('/home/delete/{is}','HomeController@delete');
Route::get('/home/kalender','CalenderController@Calenderku');




//Auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

