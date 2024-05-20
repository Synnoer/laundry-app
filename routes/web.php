<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/notification', [DashboardController::class, 'notification'])->name('notification');
    Route::get('/about', [DashboardController::class, 'about'])->name('about');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/add', [OrderController::class, 'add'])->name('order.add');
    Route::get('/order/checkout', [OrderController::class, 'detail'])->name('order.checkout');
    Route::get('/member', [MembershipController::class, 'index'])->name('membership.index');
    Route::get('/member/silver', [MembershipController::class, 'silver'])->name('membership.silver');
    Route::get('/member/gold', [MembershipController::class, 'gold'])->name('membership.gold');
    Route::get('/member/platinum', [MembershipController::class, 'platinum'])->name('membership.platinum');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
