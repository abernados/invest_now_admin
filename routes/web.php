<?php

use App\Http\Livewire\Info;
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

    Route::get('/info', Info::class);

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/todo', function () {
        return view('todo');
    })->name('todo');
});
