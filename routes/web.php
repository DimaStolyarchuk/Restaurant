<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/recipe', 'PageController@recipe')->name('recipe');

