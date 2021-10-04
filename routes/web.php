<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PackageController::class, 'index'])->name('index');

Route::get('/{package}/add', [\App\Http\Controllers\FishController::class, 'add'])->name('add');
Route::post('/{package}/add', [\App\Http\Controllers\FishController::class, 'create']);

Route::get('/print/{id}', [\App\Http\Controllers\PackageController::class, 'printPackage'])->name('print');
Route::get('/test/{lang}/{id}', [\App\Http\Controllers\PackageController::class, 'printTest'])->name('test');
Route::get('/wordbank/{id}', [\App\Http\Controllers\PackageController::class, 'showWordbank'])->name('wordbank');
Route::post('/', [\App\Http\Controllers\PackageController::class, 'createPackage'])->name('create');
