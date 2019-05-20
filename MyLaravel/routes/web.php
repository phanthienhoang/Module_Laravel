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


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::get('/a', function () {
    return view('Calculator.view');
});

Route::post('/a', function(Illuminate\Http\Request $request){
    $descripton = $request->descripton;
    $price = $request->price;
    $percent = $request->percent;
    $amount =  $price *  $percent * 0.1;
    return view('Calculator.display-discount', compact(['descripton', 'price', 'percent', 'amount']));
});
     
//  thư viện 
Route::get('/translate', function () {
    return view('dictionary.v_dictionary');
});

Route::post('/translate', function(Illuminate\Http\Request $request){
    $array=array(
        'hello' => 'xin chào',
        'love' => 'yêu',
        'hate' => 'ghét',
        'function' => 'hàm' ,
        'dictionary' => 'từ điển',
        'libary' => 'thư viện',
        'bye' => 'tạm biệt'
    );
    foreach($array as $key=>$value){
        if($request->input == $key){
            return view('dictionary.v_translate', compact(['value','key']));
        }
    }
      return "đang cập nhập";
    
});

