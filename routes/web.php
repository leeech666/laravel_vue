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
    return view('home');
});

//Route::get('/home', function () {
//    return view('home');
//});

Route::get('/home', function () {
    return view('login_status');
});

Route::get('/resume1', function () {
    return view('resume1',['data'=>'Welcome to My Resume Page']);
});

Route::get('/index', function () {
    return view('index',['data'=>'Hello world']);
});
Route::get('/welcome1', function () {
    return view('welcome1');
});
Route::get('/vue_router1', function () {
    return view('vue_router1');
});

Route::get('/login_status', function () {
  return view('login_status');
});


Auth::routes();

//Route::get('/login_status', 'HomeController@index')->name('login_status');
