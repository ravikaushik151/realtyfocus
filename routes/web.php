<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::post('/searchresult', 'HomeController@searchresult');
Route::post('/indexajax', 'HomeController@indexajax');
Route::get('/projects/{id}', 'HomeController@projects');
Route::post('/projectsPost', 'HomeController@projectsPost');
Route::get('/about', 'HomeController@about');
Route::get('/dataAjax', 'HomeController@dataAjax');
Route::get('/buy', 'HomeController@buy');
Route::post('/buy', 'HomeController@buyPost');
Route::get('/sell', 'HomeController@sell');
Route::post('/sell', 'HomeController@sellPost');
Route::get('/rent', 'HomeController@rent');
Route::post('/rent', 'HomeController@rentPost');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@contactPost');
Route::get('/project', 'HomeController@project');
//Route::get('/builder', 'HomeController@builder');
Route::get('/builders/{id}', 'HomeController@builders');
Route::get('/builder', 'HomeController@builder');
Route::post('/sendMail', 'HomeController@sendMail');
Route::get('/blog', 'HomeController@blog');
Route::get('/blogs/{id}', 'HomeController@blogs');