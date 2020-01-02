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
    return view('index');
});

Route::get('/kid', function () {
    return view('kid');
});
Route::get('/man', function () {
    return view('man');
});

Route::get('/woman', function () {
    return view('woman');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/accessory', function () {
    return view('accessory');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
