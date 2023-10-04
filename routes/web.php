<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Route::get('/ceo-revenue', function () {
    return view('revenue.dashboard');
})->name('ceo-revenue');

Route::get('/sales', function () {
    return view('revenue.sales');
})->name('sales');

Route::get('/cat', function () {
    return view('revenue.cat');
})->name('cat');

Route::get('/dashboard_model', function () {
    return view('revenue.dashboard_model');
});

Route::get('/revenue', function () {
    return view('revenue.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
