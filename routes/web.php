<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inventories', [App\Http\Controllers\InventoryController::class, 'index'])->name('inventories.index');
Route::get('/inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
Route::post('/inventories/create', [InventoryController::class, 'store'])->name('inventories.store');
Route::get('/inventories/{inventory}', [InventoryController::class, 'show'])->name('inventories.show');
Route::get('/inventories/{inventory}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');
Route::post('/inventories/{inventory}/edit', [InventoryController::class, 'update'])->name('inventories.update');
Route::get('/inventories/{inventory}/destroy', [InventoryController::class, 'destroy'])->name('inventories.destroy');

Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles/create', [App\Http\Controllers\VehicleController::class, 'create'])->name('vehicles.create');
Route::post('/vehicles/create', [App\Http\Controllers\VehicleController::class, 'store'])->name('vehicles.store');
Route::get('/vehicles/{vehicle}', [App\Http\Controllers\VehicleController::class, 'show'])->name('vehicles.show');
Route::get('/vehicles/{vehicle}/edit', [App\Http\Controllers\VehicleController::class, 'edit'])->name('vehicles.edit');
Route::post('/vehicles/{vehicle}/edit', [App\Http\Controllers\VehicleController::class, 'update'])->name('vehicles.update');
Route::get('/vehicles/{vehicle}/destroy', [App\Http\Controllers\VehicleController::class, 'destroy'])->name('vehicles.destroy');

Route::get('/users_management', [App\Http\Controllers\UserController::class, 'index'])->name('users_management.index');
Route::get('/users_management/create', [App\Http\Controllers\UserController::class, 'create'])->name('users_management.create');
Route::post('/users_management/create', [App\Http\Controllers\UserController::class, 'store'])->name('users_management.store'); // DIUBAH
Route::get('/users_management/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users_management.show');
Route::get('/users_management/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users_management.edit');
Route::post('/users_management/{user}/edit', [App\Http\Controllers\UserController::class, 'update'])->name('users_management.update'); // DIUBAH
Route::get('/users_management/{user}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('users_management.destroy'); // DIUBAH