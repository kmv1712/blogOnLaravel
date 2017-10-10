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
// Route::get('/delCategorie', 'AdminController@delCategorie');