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

Route::post('/produk/create', [CheckoutController::class, 'create_produk']);

Route::get('/', function () {
    return view('index');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/foods', function () {
    return view('foods');
});
Route::get('/category-foods', function () {
    return view('category-foods');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/rizaldi', function () {
    return view('rizaldi');
});
Route::get('/arif', function () {
    return view('arif');
});
Route::get('/admin', function () {
    return view('admin');
});