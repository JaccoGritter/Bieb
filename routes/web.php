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

Route::get('/', function(){
    return view('index');
});

Route::get('books/findbooks', 'BookController@findBooks')->name('books.findBooks');
Route::get('books/viewallbooks', 'BookController@viewAllBooks')->name('books.viewallbooks');

Route::get('/books', function(){
    return view('libadmin/adminindex');
});

Route::get('books/create', 'BookController@create')->name('books.create');

Route::get('/books/{book}', 'BookController@show')->name('books.show');
Route::post('/books', 'BookController@store')->name('books.store');

Route::get('/books/{book}/edit', 'BookController@edit')->name('books.edit');
Route::patch('/books/{book}', 'BookController@update')->name('books.update');
Route::delete('/books/{book}', 'BookController@destroy')->name('books.destroy');

Route::get('/users', 'UserController@index')->name('users.index');

Route::get('users/create', 'UserController@create')->name('users.create');

Route::get('/users/{user}', 'UserController@show')->name('users.show');
Route::post('/users', 'UserController@store')->name('users.store');

Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UserController@update')->name('users.update');
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
Route::get('/users/logout', 'UserController@logout')->name('users.logout');

//Route::get('libmember', 'UserController@userLogin')->name('users.userLogin');

Route::get('libmember/showbooktomember/{book}', 'BookController@showBookToMember')->name('books.showbooktomember');

Route::get('libmember/lentbooks', 'UserController@getLentBooks')->name('users.lentbooks');

Route::get('/libmember/lend/{book}', 'BookController@lendBook')->name('books.lend');

Route::get('libmember/nostock', function(){
    return view ('nostock');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
