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
Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController@index');
        // Hiển thị danh sách khách hàng
  
    Route::get('create', 'CustomerController@create');
  
    Route::post('store', function () {
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    });
  
    Route::get('{id}/show', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
    });
  
    Route::get('{id}/edit', function () {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
    });
  
    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });
  
    Route::delete('{id}', function () {
        // Xóa thông tin dữ liệu khách hàng
    });
  });

Route::prefix('tasks')->group(function () {
    Route::get('/', 'TasksControler@index')->name('tasks.index');
    Route::get('/create', 'TasksControler@create')->name('tasks.create');
    Route::post('/create', 'TasksControler@store')->name('tasks.store');
    Route::get('/delete/{id}', 'TasksControler@delete')->name('tasks.delete');
    Route::get('/{task}', 'TasksControler@show')->name('tasks.show');
    Route::patch('/{task}', 'TasksControler@update')->name('tasks.update');
  });

Route::prefix('product')->group(function(){
    Route::get("/","ProductController@index")->name("product.index");
    Route::get("/create","ProductController@create")->name("product.create");
    Route::get("/delete/{product}","ProductController@delete")->name("product.delete");
    Route::post("/create","ProductController@add")->name("product.add");
    Route::get('/{product}', 'ProductController@edit')->name('product.edit');
    Route::patch('/{product}', 'ProductController@update')->name('product.update');
    
});

Route::prefix('post')->group(function(){
    Route::get("/","PostController@index")->name("post.index");
    Route::get("/create","PostController@create")->name("post.create");
    Route::get("/delete/{post}","PostController@delete")->name("post.delete");
    Route::post("/create","PostController@add")->name("post.add");
    Route::get('/{post}', 'PostController@edit')->name('post.edit');
    Route::patch('/{post}', 'PostController@update')->name('post.update');
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
