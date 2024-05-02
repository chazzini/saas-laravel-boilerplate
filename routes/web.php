<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::group([
    'prefix' => '/account',
    'middleware' => ['auth'],
    'as' => 'account.',
], function () {
    Route::get('/', [App\Http\Controllers\Account\AccountController::class, 'index'])->name('index');
    Route::get('/profile', [App\Http\Controllers\Account\ProfileController::class, 'index'])->name('profile.index');

    Route::get('/password', [App\Http\Controllers\Account\PasswordController::class, 'index'])->name('password.index');
    Route::post('/password', [App\Http\Controllers\Account\PasswordController::class, 'store'])->name('password.store');
});
