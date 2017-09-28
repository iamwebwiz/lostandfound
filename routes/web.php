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

Route::post('/registerUser', 'UserController@userRegistration');
Route::get('/logout', 'UserController@userLogout');

// User dashboard routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/items', 'ItemsController@showPostedItems')->name('posteditems');
Route::get('/items/new', 'ItemsController@newItem')->name('newitem');
Route::post('/items/new', 'ItemsController@postNewItem')->name('postnewitem');
Route::get('/items/{id}/edit', 'ItemsController@editItem')->name('edititem');
Route::get('/items/{id}/delete', 'ItemsController@deleteItem')->name('delete_item');
