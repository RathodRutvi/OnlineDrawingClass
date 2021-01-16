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

Route::get('/master','ClassController@master');
Route::get('/home','ClassController@home')->name('home');
Route::get('/activity','ClassController@activity')->name('activity');
Route::get('/gallery','ClassController@gallery')->name('gallery');
Route::get('/warilyart','ClassController@warilyart')->name('warilyart');
Route::get('/gallery_sketches','ClassController@gallery_sketches')->name('gallery_sketches');
Route::get('/registration','ClassController@registration')->name('registration');
Route::get('/login','ClassController@login')->name('login');
Route::post('/store','StudentsController@store')->name('store');
Route::get('/index','StudentsController@index')->name('index');
Route::get('/form','ClassController@form')->name('form');
Route::get('/table','ClassController@form')->name('table');
Route::get('/adminhome','ClassController@form')->name('adminhome');

