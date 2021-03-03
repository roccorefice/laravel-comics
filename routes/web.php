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

Route::get('/', 'PageController@index')->name('homepage');
Route::get('guestcomics', 'ComicController@index')->name('guestcomic');
Route::get('guestcomics/{{comic}}', 'ComicController@show');


Auth::routes(['register' => false]);

//Route per Admin

Route::middleware(['auth'])->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('comics', 'ComicController');

});
