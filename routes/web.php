<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\driver\driverController;
use App\Http\Controllers\client\clientController;


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
    return view('index');
});

Route::get('/dashboard', [clientController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
    

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/driver', [adminController::class, 'index'])->name('admin.driver');
    Route::get('admin/client', [adminController::class, 'index'])->name('admin.client');
    Route::get('admin/reservation', [adminController::class, 'index'])->name('admin.reservation');
    Route::get('admin/createUser', [adminController::class, 'create'])->name('admin.createUser');
    Route::post('admin/driver', [adminController::class, 'store'])->name('admin.storeUser');
    Route::get('admin/{user}/edit', [adminController::class, 'edit'])->name('admin.editUser');
    Route::post('admin/{user}/update', [adminController::class, 'update'])->name('admin.updateUser');
    Route::post('admin/{user}/destroy', [adminController::class, 'destroy'])->name('admin.destroyUser');
});

Route::middleware(['auth', 'role:driver'])->group(function () {
    Route::get('driver/history', [driverController::class, 'index'])->name('driver.history');
    Route::get('driver/create', [driverController::class, 'create'])->name('driver.create');
    Route::post('driver/store', [driverController::class, 'store'])->name('driver.store');
    Route::get('driver/payment', [driverController::class, 'payment'])->name('driver.payment');
    Route::post('driver/paymentupdate', [driverController::class, 'paymentupdate'])->name('driver.paymentupdate');
    Route::get('driver/availability', [driverController::class, 'availability'])->name('driver.availability');
    Route::post('driver/updateAvailability', [driverController::class, 'updateAvailability'])->name('driver.updateAvailability');

});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('client/home', [ClientController::class, 'index'])->name('client.home');
    Route::get('client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('client/', [ClientController::class, 'store'])->name('client.store');
    Route::get('client/history', [ClientController::class, 'history'])->name('client.history');
    Route::get('client/review', [ClientController::class, 'review'])->name('client.review');
    Route::get('/search', [clientController::class, 'showSearchForm'])->name('client.search');
});
  