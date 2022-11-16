<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestQuotationController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\QuotationController;




Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/request', [RequestQuotationController::class, 'store'])->name('request');

Route::get('/request/{id}', [RequestQuotationController::class, 'show'])->name('request.view');

Route::post('/send_quotation', [RequestQuotationController::class, 'edit'])->name('send_quotation');

Route::get('/medicine', [MedicineController::class, 'index'])->name('medicine');

Route::post('/add_drug', [MedicineController::class, 'store'])->name('add_drug');

Route::post('/add_price', [QuotationController::class, 'store'])->name('add_price');

Route::get('/quotation/{id}', [QuotationController::class, 'show'])->name('quotation.view');

Route::post('/accept_quotation', [RequestQuotationController::class, 'accept'])->name('accept_quotation');

Route::post('/reject_quotation', [RequestQuotationController::class, 'delete'])->name('reject_quotation');

Auth::routes();

