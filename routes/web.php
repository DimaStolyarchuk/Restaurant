<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/recipe', 'PageController@recipe')->name('recipe');


Route::get('/admin_index', 'admin\HomeController@index')->name('admin_index');
Route::get('/admin_index_form', 'admin\IndexController@index_form')->name('index_form');




Route::get('/admin_about', 'admin\HomeController@about')->name('admin_about');
Route::get('/admin_blog', 'admin\HomeController@blog')->name('admin_blog');
Route::get('/admin_contact', 'admin\HomeController@contact')->name('admin_contact');
Route::get('/admin_recipe', 'admin\HomeController@recipe')->name('admin_recipe');
