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
    Route::get('admin/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:driver'])->group(function () {
    Route::get('driver/dashboard', [driverController::class, 'index'])->name('driver.dashboard');
});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
});
  