<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/registration', 'Auth\RegisterController@registration')->name('registration');
Route::get('/entry', 'PageController@entry')->name('entry');

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


Route::get('/admin_recipe', 'Admin\RecipeController@recipe')->name('admin_recipe');
Route::get('/recipe_form', 'Admin\RecipeController@recipe_form')->name('recipe_form');
Route::post('/save_recipe', 'Admin\RecipeController@saveRecipe')->name('save_recipe');
Route::get('/recipe_edit/{id}', 'Admin\RecipeController@edit_recipe')->name('edit_recipe');
Route::get('/recipe_delete/{id}', 'Admin\RecipeController@delete_recipe')->name('delete_recipe');

Route::get('/admin_about', 'Admin\AboutController@about')->name('admin_about');
Route::get('/about_form', 'Admin\AboutController@about_form')->name('about_form');
Route::post('/save_about', 'Admin\AboutController@saveAbout')->name('save_about');
Route::get('/about_edit/{id}', 'Admin\AboutController@edit_about')->name('edit_about');
Route::get('/about_delete/{id}', 'Admin\AboutController@delete_about')->name('delete_about');

Route::get('/admin_blog', 'Admin\BlogController@blog')->name('admin_blog');
Route::get('/blog_form', 'Admin\BlogController@blog_form')->name('blog_form');
Route::post('/save_blog', 'Admin\BlogController@saveBlog')->name('save_blog');
Route::get('/blog_edit/{id}', 'Admin\BlogController@edit_blog')->name('edit_blog');
Route::get('/blog_delete/{id}', 'Admin\BlogController@delete_blog')->name('delete_blog');

Route::get('/admin_contact', 'Admin\ContactController@contact')->name('admin_contact');
Route::get('/contact_form', 'Admin\ContactController@contact_form')->name('contact_form');
Route::post('/save_contact', 'Admin\ContactController@saveContact')->name('save_contact');
Route::get('/contact_edit/{id}', 'Admin\ContactController@edit_contact')->name('edit_contact');
Route::get('/contact_delete/{id}', 'Admin\ContactController@delete_contact')->name('delete_contact');
