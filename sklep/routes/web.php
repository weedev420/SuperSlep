<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// routes/web.php

// routes/web.php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');

// routes/web.php



Route::get('/customers/{customerId}/orders', [CustomerController::class, 'showOrders']);



Route::get('/products', [ProductController::class, 'index'])->name('products');


Route::get('/', function () {
    return view('welcome');
});
