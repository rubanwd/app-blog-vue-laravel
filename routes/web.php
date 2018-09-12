<?php

Route::get('/', 'PostController@home');

Route::get('/view/{vue_capture?}', 'PostController@home')->where('vue_capture', '[\/\w\.-]*');
Route::get('/edit/{vue_capture?}', 'PostController@home')->where('vue_capture', '[\/\w\.-]*');

Route::resource('/posts', 'PostController');