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

//Route::get('/', 'BookController@index');

Route::get('/', function(){
    return view('index');
});

Route::get('books/findbooks', 'BookController@findBooks')->name('books.findBooks');
Route::get('books/viewallbooks', 'BookController@viewAllBooks')->name('books.viewallbooks');

// Route::resource('books', 'BookController');

Route::get('/books', function(){
    return view('libadmin/adminindex');
});

Route::get('books/create', 'BookController@create')->name('books.create');

Route::get('/books/{book}', 'BookController@show')->name('books.show');
Route::post('/books', 'BookController@store')->name('books.store');

Route::get('/books/{book}/edit', 'BookController@edit')->name('books.edit');
Route::patch('/books/{book}', 'BookController@update')->name('books.update');
Route::delete('/books/{book}', 'BookController@destroy')->name('books.destroy');

Route::get('/libmember/lend/{book}', 'BookController@lendBook')->name('books.lend');

Route::resource('members', 'MembersController');
Route::get('libmember/', 'MembersController@memberLogin')->name('members.memberLogin');
Route::get('libmember/showbooktomember/{book}', 'BookController@showBookToMember')->name('books.showbooktomember');

Route::get('libmember/lentbooks', 'MembersController@getLentBooks')->name('members.lentbooks');

Route::get('libmember/nostock', function(){
    return view ('nostock');
});