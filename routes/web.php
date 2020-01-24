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


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('contact/submit', 'ContactController@submit')->name('contact-form-submit');


// dit zijn test routes
/*
Route::get('/kevin', function () {
    return 'Dit is de pagina van Kevin';
});

Route::get('/producten', 'ProductController@index');
Route::get('/producten/{id}', 'ProductController@index');
Route::get('/admin', 'AdminController@list');

Route::get('/producten/{category}/{id?}','ProductController@showProduct');
*/
