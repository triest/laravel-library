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
    })->name('main');

    Route::get('/authors', 'IndexContreller@authors')->name('authors');
    Route::post('/authors', 'IndexContreller@store_author')->name('store_author');

    Route::get('/books', 'IndexContreller@books')->name('books');
    Route::post('/books', 'IndexContreller@store_book')->name('store_book');

    Route::get('/search', 'IndexContreller@Search')->name('search');
    Route::get('/search-book', 'IndexContreller@searchBook')->name('search');

