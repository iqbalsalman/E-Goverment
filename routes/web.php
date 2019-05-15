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
Route::get('/','Dashboard\HomeController@index');
Route::get('/about','Dashboard\HomeController@About');
Route::get('/contact','Dashboard\HomeController@Contack');
Route::get('/DataAsset','Dashboard\HomeController@viewAsset');
Route::get('/login','Akun\UsersController@index');
Route::get('/home', 'HomeController@index')->name('home');


/*  Aset  */
Route::post('/insert','Dashboard\AsetController@save_aset');
Route::get('/DataAset','Dashboard\AsetController@aset_all');
Route::get('/aset','Dashboard\AsetController@index');
Route::get('/edit/{id}','Dashboard\AsetController@Edit');
Route::post('/update/{id}','Dashboard\AsetController@update');
Route::get('/delete/{id}','Dashboard\AsetController@delete');