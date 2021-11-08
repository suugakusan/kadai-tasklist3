<?php

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
