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

Route::group(['prefix' => '/'], function () {
    Route::get('', 'HomeController@index');
    Route::get('{slug}', 'PostController@detailPage')->name('page.detail-page');
});
Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    // route index
    Route::get('/', 'PostController@index')->name('index');
    // group route katalog
    Route::group(['prefix' => 'katalog'], function () {
        Route::get('/', 'PostController@indexCatalog')->name('katalog.index');
        Route::get('tambah-informasi', 'PostController@create')->name('katalog.create');
        Route::post('tambah-informasi', 'PostController@store')->name('katalog.store');
        Route::get('edit-informasi/{id}', 'PostController@edit')->name('katalog.edit');
        Route::post('edit-informasi', 'PostController@update')->name('katalog.update');
        Route::get('hapus-informasi', 'PostController@hapus')->name('katalog.hapus');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
