<?php

use App\Http\Controllers\Vendor\InvoiceController;
use App\Http\Livewire\Vendor\AddProduct;
use App\Http\Livewire\Vendor\Auth\Authentication;
use App\Http\Livewire\Vendor\Auth\ChangePassword;
use App\Http\Livewire\Vendor\Auth\Dashboard;
use App\Http\Livewire\Vendor\Auth\Login;
use App\Http\Livewire\Vendor\Order;
use App\Http\Livewire\Vendor\Product;
use App\Http\Livewire\Vendor\UpdateProduct;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest:vendor'])->group(function () {
    Route::prefix('vendors')->group(function () {
        Route::get('/account', Authentication::class)->name('vendor.auth');
        Route::get('/login', Login::class)->name('vendor.login');
    });
});

Route::middleware(['auth:vendor'])->group(function () {
    Route::prefix('vendors')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('vendor.dashboard');
        Route::get('/products', Product::class)->name('vendor.products');
        Route::get('/add/products', AddProduct::class)->name('vendor.add-products');
        Route::get('/edit/products/{id}', UpdateProduct::class)->name('vendor.update-products');
        Route::get('/order', Order::class)->name('vendor.order');
        Route::get('/generate/invoice/{id}', [InvoiceController::class,'generateInvoice'])->name('vendor.index');
        Route::get('/change/password', ChangePassword::class)->name('vendor.change-password');
    });
});
