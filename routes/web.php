<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/','PageController@posts');

//Slug me permite colocar en la URL el texto de Leer Más. Así Route::get('/blog/{post:slug}','PageController@post')
Route::get('/blog/{post}','PageController@post')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'Backend\PostController')
    ->middleware('auth')
    ->except('show');

