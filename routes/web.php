<?php
Auth::routes(['register'=> false]);

Route::get('/','NewsController@index');
Route::get('/news/{category}/all','NewsController@categorySearch');
Route::get('/news/detail/{id}','NewsController@newsDetail')->name('news.detail');

Route::get('loadnews','NewsController@loadNews')->name('loadnews');

// authentication

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news/add', 'NewsController@addNews')->middleware('auth');
Route::post('/news/add', 'NewsController@insertNews')->middleware('auth');
Route::get('/removenews/{id}', 'NewsController@deleteNews')->middleware('auth');
