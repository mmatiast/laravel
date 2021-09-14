<?php


Route::view('/', 'home')->name('home'); 
Route::view('/about', 'about')->name('about');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio/{id}', 'PortfolioController@show')->name('portfolio.show');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store');


