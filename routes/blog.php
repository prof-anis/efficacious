<?php



Route::get('/','BlogController@index')->name('blog.index');

Route::get('/{id}/show','BlogController@show')->name('blog.show');



?>