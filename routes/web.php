<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Codexshaper\WooCommerce\Facades\Order;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\WooCommerceController;

Route::get('/', function () {
    // $orders = Order::all();
    Log::info('WooCommerce webhook received:');
    // return dd($orders);
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::post('order_created', [WooCommerceController::class, 'webhoook'])->name('web.hoook');

