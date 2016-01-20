<?php


Route::get('/', 'startup@index');

Route::post('survey/save', 'startup@save');

Route::group(['middleware' => ['web']], function () {
    
});
