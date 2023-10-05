<?php

use App\Http\Controllers\CEORevenueController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', function () {
    return redirect()->route('ceo-revenue.revenue');
});

Route::group(['as' => 'ceo-revenue.'], function () {
    Route::get('revenue', [CEORevenueController::class, 'revenue'])->name('revenue');
    Route::get('revenue-model', [CEORevenueController::class, 'revenueModel'])->name('revenue-model');
    Route::get('sales', [CEORevenueController::class, 'sales'])->name('sales');
    Route::get('cat', [CEORevenueController::class, 'cat'])->name('cat');
    Route::get('non-cat', [CEORevenueController::class, 'nonCat'])->name('non-cat');
    Route::get('study-abroad', [CEORevenueController::class, 'studyAbroad'])->name('study-abroad');
    Route::get('under-grad', [CEORevenueController::class, 'underGrad'])->name('under-grad');
    Route::get('GDPI', [CEORevenueController::class, 'GDPI'])->name('GDPI');
    Route::get('mocks', [CEORevenueController::class, 'mocks'])->name('mocks');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
