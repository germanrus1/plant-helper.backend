<?php

use App\Http\Controllers\PlantsController;
use App\Http\Controllers\PublicPlantsController;
use App\Http\Controllers\TreeController;
use Illuminate\Support\Facades\Route;

Route::resource('tree', TreeController::class);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/plants/delete/{plant}', [PlantsController::class, 'destroy'])->name('plants.delete');
Route::resource('/admin/plants', PlantsController::class);

Route::resource('/', PublicPlantsController::class);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//
//
//Auth::routes();
//

require __DIR__ . '/auth.php';
