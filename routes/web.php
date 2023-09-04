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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Route for to dashbord for both Admin and Customer (ps: IF statement is at DashboardController)
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

Route::resource('/themeparks', '\App\Http\Controllers\ThemeparksController');
Route::resource('/customers', '\App\Http\Controllers\CustomersController');
Route::resource('/bookings', '\App\Http\Controllers\BookingsController');
Route::resource('/reserve', '\App\Http\Controllers\ReserveController');
Route::resource('/profile', '\App\Http\Controllers\ProfileController');
Route::resource('/custProfile', '\App\Http\Controllers\CustProfileController');

require __DIR__.'/auth.php';
