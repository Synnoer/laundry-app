<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', [DashboardController::class, 'home'])
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/admin/userlist', [AdminController::class, 'userlist'])->name('admin.userlist');
    Route::patch('/admin/updatemembership', [AdminController::class, 'updateMembership'])->name('admin.updateMembership');
    Route::delete('/admin/deleteuser/{user}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::get('/admin/orderlist', [AdminController::class, 'orderlist'])->name('admin.orderlist');
    Route::patch('/admin/nextstatus/{order}', [AdminController::class, 'nextStatus'])->name('admin.nextStatus');
    Route::get('/admin/editdatabase', [AdminController::class, 'editdatabase'])->name('admin.editdatabase');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'home'])->name('dashboard');
    Route::get('/ongoing/{order}',[DashboardController::class, 'ongoing'])->name('ongoing');
    Route::delete('/ongoing/cancelorder/{order}', [DashboardController::class, 'cancelOrder'])->name('cancelOrder');
    Route::get('/notification', [DashboardController::class, 'notification'])->name('notification');
    Route::get('/about', [DashboardController::class, 'about'])->name('about');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/add', [OrderController::class, 'add'])->name('order.add');
    Route::get('/order/checkout', [OrderController::class, 'detail'])->name('order.checkout');
    Route::post('/orderstore', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/member', [MembershipController::class, 'index'])->name('membership.index');
    Route::get('/member/silver', [MembershipController::class, 'silver'])->name('membership.silver');
    Route::get('/member/gold', [MembershipController::class, 'gold'])->name('membership.gold');
    Route::get('/member/platinum', [MembershipController::class, 'platinum'])->name('membership.platinum');
    Route::get('/profile', [ProfileController::class, 'review'])->name('profile.review');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/editpw',[ProfileController::class, 'editpw'])->name('profile.editpw');
    Route::patch('/profile/updatepw',[ProfileController::class, 'updatepw'])->name('profile.updatepw');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/offline', function () {
    return view('modules/laravelpwa/offline');
});

require __DIR__.'/auth.php';
