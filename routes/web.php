<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => '/'], function () {
    Route::get('', function () {
        return view('frontend.index');
    });
    Route::get('contact-us', 'ContactUsController@create')->name('contact.create');
    Route::post('contact-us', 'ContactUsController@store')->name('contact.store');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/lowongan-kerja', 'HomeController@loker')->name('home.loker');
});

Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    // route index
    Route::get('/', 'PostController@index')->name('index');
    // group route katalog
    Route::group(['prefix' => 'katalog'], function () {
        Route::get('tambah-informasi', 'PostController@create')->name('katalog.create');
        Route::post('tambah-informasi', 'PostController@store')->name('katalog.store');
        Route::get('edit-informasi/{id}', 'PostController@edit')->name('katalog.edit');
        Route::post('edit-informasi', 'PostController@update')->name('katalog.update');
        Route::get('hapus-informasi/{id}', 'PostController@hapus')->name('katalog.hapus');
    });

    Route::resource('category', 'CategoryController');
});


// Route untuk frontend
