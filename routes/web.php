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
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/editor', 'EditorController@index')->name('editor');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/{id}', 'AdminController@edit')->name('edit');
Route::put('/admin/{id}', 'AdminController@update')->name('update');

Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('/post', 'postController')->only(['index','create','store','show','edit','update','destroy']);


