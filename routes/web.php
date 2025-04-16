<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\HutangController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
Route::get('/hutang', [HutangController::class, 'index'])->name('hutang.index');




