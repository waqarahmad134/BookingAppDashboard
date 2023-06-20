<?php

use Illuminate\Support\Facades\Route;

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


//Clear Cache facade value:
Route::get('/clear', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('partners', [App\Http\Controllers\HomeController::class, 'partners'])->name('partners');
Route::get('add-partners', [App\Http\Controllers\HomeController::class, 'addPartners'])->name('addPartners');
Route::get('drivers', [App\Http\Controllers\HomeController::class, 'drivers'])->name('drivers');
Route::get('vehicles', [App\Http\Controllers\HomeController::class, 'vehicles'])->name('vehicles');
Route::get('bookings', [App\Http\Controllers\HomeController::class, 'bookings'])->name('bookings');
Route::get('extras', [App\Http\Controllers\HomeController::class, 'extras'])->name('extras');


Route::get('signin', [App\Http\Controllers\HomeController::class, 'signin'])->name('signin');
Route::get('signup', [App\Http\Controllers\HomeController::class, 'signup'])->name('signup');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');



