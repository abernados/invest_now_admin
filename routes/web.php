<?php

use App\Http\Controllers\InvestorController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\GetInvestors;
use App\Http\Livewire\PaymentInformation;
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
    return redirect()->route('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

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

    Route::get('/payment-information', PaymentInformation::class)->name('payment-information');

    Route::get('/kyc-aml-verification', GetInvestors::class)->name('kyc-aml-verification');

    Route::get('/audit-trail', function () {
        return view('audit-trail');
    })->name('audit-trail');
});
