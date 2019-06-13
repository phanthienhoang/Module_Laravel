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


    Route::get('/trangchu','NewController@index')->name('news.index');
    Route::get('/index','PageController@index')->name('page.index');
    Route::get('/create','PageController@create')->name('page.create');
    Route::get("/index/delete/{id}","PageController@delete")->name('page.delete');
    Route::get('/search', 'PageController@search')->name('page.search');
    Route::get('/index/{tour}', 'PageController@edit')->name('page.edit');
    Route::get('/book/{tour}', 'PageController@settour')->name('page.settour');
    Route::post('/addtour', 'PageController@addtour')->name('page.addtour');
    // Route::get('/{product?}','ProductController@fillproduct')->name('product.fillproduct');
    Route::post("/create","PageController@add")->name("page.add");
    Route::patch('/index/{tour}/edit','PageController@update')->name('page.update');



Auth::routes();
Route::get('/chitiet', 'DetailtourController@index')->name('detail');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sendmail','SendEmailController@index')->name('send');
Route::post('/sendmail/send','SendEmailController@sendmail')->name('sendmail');