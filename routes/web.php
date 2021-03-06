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

Route::get('/', 'PageController@index');
// Route::get('addUserQuestion', 'PageController@index');
Route::get('/addUserQuestion', 'UserFormController@index');
Route::get('/sendQuestion', 'SendController@index');
Route::get('/sendAdmin', 'SendAdminController@index');
Route::get('/addAdmin', 'AdminController@add');
Route::get('/editAdmin', 'AdminController@edit');
Route::get('/getListQuestion', 'AdminController@getListQuestion');
Route::get('/addCateg', 'AdminController@addCateg');
Route::get('/delCateg', 'AdminController@delCateg');
Route::get('/addAnswer', 'AdminController@addAnswer');
Route::get('/getQuestion', 'AdminController@getQuestion');
Route::get('/delQuestion', 'AdminController@delQuestion');
Route::get('/hideQuestion', 'AdminController@hideQuestion');
Route::get('/publish', 'AdminController@publish');
Route::get('/saveEditQuestion', 'AdminController@saveEditQuestion');
// Route::get('/delCategorie', 'AdminController@delCategorie');
