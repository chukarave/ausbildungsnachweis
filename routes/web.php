<?php

use App\Task;
use App\Week;


Route::get('/weeks', 'WeeksController@index');
Route::get('/weeks/{week}', 'WeeksController@show')->where('week', '[0-9]{1,3}');
Route::get('/weeks/add', 'WeeksController@showForm');
Route::post('/weeks/add', 'WeeksController@postForm');

