<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Reports\ProductController;
use App\Http\Controllers\Xendit\QrisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('users', App\Http\Controllers\UsersController::class);
    Route::get('users/{user}/permissions', [App\Http\Controllers\UsersController::class, 'permissions'])->name('users.permissions');
    Route::post('users/{user}/permissions', [App\Http\Controllers\UsersController::class, 'storePermissions'])->name('users.permissions.store');
    Route::resource('/products', App\Http\Controllers\ProductsController::class);

    Route::resource('pos-session', App\Http\Controllers\PosSessionController::class);

    Route::post('/point-of-sales/store', [App\Http\Controllers\PointOfSalesController::class, 'store']);
    Route::post('/point-of-sales/end-session', [App\Http\Controllers\PointOfSalesController::class, 'endSession'])->name('point-of-sales.end-session');
    Route::resource('point-of-sales', App\Http\Controllers\PointOfSalesController::class)->except('store');

    Route::group(['prefix' => 'reports', 'as' => 'reports.'], function () {
        Route::get('periode-pdf', [App\Http\Controllers\Reports\PeriodeController::class, 'downloadPdf'])->name('reports.period.pdf');
        Route::resource('periode', App\Http\Controllers\Reports\PeriodeController::class)->only(['index']);
        Route::get('product-pdf', [ProductController::class, 'downloadPdf'])->name('reports.product.pdf');
        Route::resource('product', ProductController::class)->only(['index']);
    });

    Route::resource('qris', QrisController::class)->only(['store', 'index']);
});

require __DIR__ . '/auth.php';
