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

Route::get('/', 'HomeController@showHome');










// dit zijn test routes
Route::get('/kevin', function () {
    return 'Dit is de pagina van Kevin';
});

Route::get('/producten', 'ProductController@index');
Route::get('/producten/{id}', 'ProductController@index');
Route::get('/admin', 'AdminController@list');

Route::get('/producten/{category}/{id?}','ProductController@showProduct');