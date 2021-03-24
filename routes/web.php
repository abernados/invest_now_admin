<?php

use App\Http\Controllers\InvestorController;
use Illuminate\Auth\Events\Verified;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');

    Route::get('/investor/{id}', [InvestorController::class, 'show']);

    Route::get('/todo', function () {
        return view('todo');
    })->name('todo');

    Route::get('/basic-information', function () {
        return view('basic-information');
    })->name('basic-information');

    Route::get('/investment-details', function () {
        return view('investment-details');
    })->name('investment-details');

    Route::get('/payment-information', function () {
        return view('payment-information');
    })->name('payment-information');

    Route::get('/kyc-aml-verification', function () {
        return view('kyc-aml-verification');
    })->name('kyc-aml-verification');

    Route::get('/audit-trail', function () {
        return view('audit-trail');
    })->name('audit-trail');

});
