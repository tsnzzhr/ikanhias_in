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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/detail-invoice', function () {
    return view('invoice_detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/edit_customer', function () {
    return view('edit_customer');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('katalog',[katalog::class, 'show'])