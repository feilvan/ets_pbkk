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

# Route::post('/produk/create', [CheckoutController::class, 'create_produk']);

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

Route::get('/rizaldi', function () {
    return view('rizaldi');
});
Route::get('/arif', function () {
    return view('arif');
});
Route::get('/admin', function () {
    return view('admin');
});
Auth::routes();
Route::get('/add-categories', function () {
    return view('add-categories');
});
Route::get('/add-foods', function () {
    return view('add-foods');
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-categories', [App\Http\Controllers\CategoryController::class, 'create']);
Route::get('/category/edit/{category}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::post('/create-category', [App\Http\Controllers\CategoryController::class, 'store']);
Route::post('/update-category', [App\Http\Controllers\CategoryController::class, 'update']);
Route::get('/category/destroy/{category}', [App\Http\Controllers\CategoryController::class, 'destroy']);


Route::get('/add-foods', [App\Http\Controllers\FoodController::class, 'create']);
Route::get('/food/edit/{food}', [App\Http\Controllers\FoodController::class, 'edit']);
Route::post('/create-food', [App\Http\Controllers\FoodController::class, 'store']);
Route::post('/update-food', [App\Http\Controllers\FoodController::class, 'update']);
Route::get('/food/destroy/{food}', [App\Http\Controllers\FoodController::class, 'destroy']);


// Route::resource('/test', [App\Http\Controllers\CategoryController::class, 'index']);