<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EditCustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index']);

// Customer 

Route::get('/keranjang', [KeranjangController::class, 'index'])->middleware('auth');

Route::get('/invoice', [InvoiceController::class, 'index'])->middleware('auth');

Route::get('/detail-invoice', [InvoiceController::class, 'showDetail'])->middleware('auth');

Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth');

Route::get('/edit_customer', [EditCustomerController::class, 'index'])->middleware('auth');

Route::get('/dashboard_cust', function () {
    return view('dashboard_cust');
});


// Admin

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/transaksi_invoice', function () {
    return view('admin.transaksi');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('katalog',[katalog::class, 'show'])

// Testing

Route::resource('products', ProductController::class);
