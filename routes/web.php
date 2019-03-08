<?php
 
Route::get('/','BlogController@show');
Route::post('/blogs/create','BlogController@create');
Route::resource('blogs','BlogController');
Route::post('/','BlogController@store');
Route::get('/blogs/{blog}','BlogController@blogsDetails');
Route::post('/blogs/{blog}/comments','CommentController@store');


