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
//Route::get('/adminwarily','ClassController@adminwarily')->name('adminwarily');
Route::get('/gallery_sketches','ClassController@gallery_sketches')->name('gallery_sketches');
Route::get('/registration','ClassController@registration')->name('registration');
Route::get('/login','ClassController@login')->name('login');
Route::get('/studentsworks','ClassController@works')->name('studentsworks');
Route::post('/store','StudentsController@store')->name('store');
Route::get('/index','StudentsController@index')->name('index');
Route::get('/view','StudentsController@index')->name('view');
Route::get('/warilymoduladd','WarilyArtModuleController@index')->name('warilymoduladd');
Route::post('/addstore','WarilyArtModuleController@store')->name('addstore');
Route::post('/warilyart','ClassController@warilyart')->name('warilyart');
Route::post('/submit_warily_work','StudentsController@submit_warily_work')->name('submit_warily_work');

