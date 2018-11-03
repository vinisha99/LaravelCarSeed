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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutPageController@about')->name('about');

Route::get('/contact', 'ContactsController@contact')->name('contact');

Route::post('/contact', 'ContactsController@store')->name('contact.store');

Route::get('/thanks/{name}', 'ContactsController@thanks')->name('thanks');