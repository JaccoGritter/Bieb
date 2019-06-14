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

Route::get('libmember/', 'MembersController@memberLogin')->name('members.memberLogin');
//Route::get('libmember/memberindex/', 'MembersController@memberIndex')->name('members.memberIndex');

Route::resource('books', 'BookController');
Route::resource('members', 'MembersController');