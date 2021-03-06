<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardAdm;
use App\Http\Controllers\DashboardCust;
use App\Http\Controllers\EditCustomerController;
use App\Http\Controllers\EditPass;
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

Route::get('/search', [HomeController::class, 'search']);

Route::get('/sort', [HomeController::class, 'sort']);

Route::get('/keranjang', [KeranjangController::class, 'index'])->middleware('auth');

Route::post('/keranjang/{id}', [KeranjangController::class, 'addProduct'])->middleware('auth');

Route::delete('/keranjang/{id}', [KeranjangController::class, 'remove'])->middleware('auth');

Route::get('/invoice', [InvoiceController::class, 'index'])->middleware('auth');

Route::get('/detail-invoice/{id}', [InvoiceController::class, 'showDetail'])->middleware('auth');

Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth');

Route::post('/checkoutGuys', [CheckoutController::class, 'checkoutGuys'])->middleware('auth');

Route::get('/dashboard_cust', [DashboardCust::class, 'index'])->middleware('auth');

Route::put('/edit_customer/edit_pass/{id}', [EditPass::class, 'update'])->middleware('auth');

Route::get('/dashboard', [DashboardAdm::class, 'index'])->middleware('auth');

Route::get('/transaksi_invoice', [DashboardAdm::class, 'viewTransaksi'])->middleware('auth');

Route::get('/invoice_proses', function () {
    return view('admin.pesanan');
})->middleware('auth');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('katalog',[katalog::class, 'show'])

// Testing

Route::resource('products', ProductController::class)->middleware('auth');

Route::resource('edit_customer', EditCustomerController::class)->middleware('auth');