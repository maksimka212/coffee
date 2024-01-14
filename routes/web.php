<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/orders', [OrdersController::class, 'showOrders'])->middleware(['auth', 'verified'])->name('orders');
Route::get('/orders/{id}', [OrdersController::class, 'showOrder'])->middleware(['auth', 'verified']);
Route::get('/addOrder', function () { return view('addOrder'); });
Route::post('/createOrder', [OrdersController::class, 'store']);

Route::get('/products', function () {
    return view('products');
})->middleware(['auth', 'verified'])->name('products');

Route::get('/job', function () {
    return view('job');
})->middleware(['auth', 'verified'])->name('job');

require __DIR__.'/auth.php';
