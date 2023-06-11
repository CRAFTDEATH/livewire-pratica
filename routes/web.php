<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::view('/suppliers','suppliers.index')->name('suppliers.index');
Route::view('/suppliers/create','suppliers.create')->name('suppliers.create');
Route::view('/suppliers/edit','suppliers.edit')->name('suppliers.edit');

Route::view('/products','products.index')->name('products.index');
Route::view('/products/create','products.create')->name('products.create');
Route::view('/products/edit','products.edit')->name('products.edit');

Route::view('/sales','sales.index')->name('sales.index');
Route::view('/sales/create','sales.create')->name('sales.create');
Route::view('/sales/edit','sales.edit')->name('sales.edit');

