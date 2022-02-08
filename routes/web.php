<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Transporter\DashboardController as TransporterDashboardController;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'verified', 'web', 'admin']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('routes', RouteController::class);
    Route::resource('services', ServiceController::class);
});


Route::group(['as' => 'transporter.', 'prefix' => 'transporter', 'namespace' => 'App\Http\Controllers\Transporter', 'middleware' => ['auth', 'verified', 'web', 'transporter']], function () {
    Route::get('dashboard', [TransporterDashboardController::class, 'index'])->name('dashboard');
    Route::resource('bids', BidController::class);
});



Route::group(['as' => 'customer.', 'prefix' => 'customer', 'namespace' => 'App\Http\Controllers\Customer', 'middleware' => ['auth', 'verified', 'web', 'customer']], function () {
    Route::get('dashboard', [CustomerDashboardController::class, 'index'])->name('dashboard');
    Route::resource('deliveries', DeliveryController::class);
    Route::patch('cancel-delivery/{id}', [App\Http\Controllers\Customer\DeliveryController::class, 'cancelDelivery'])->name('cancel-delivery');
});
