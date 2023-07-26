<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
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

Route::get('/Dashboard_Admin',[DashboardController::class,'index'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/user', function () {
    return view('Dashboard.User.dashboard');
})->middleware(['auth'])->name('dashboard.user');

require __DIR__.'/auth.php';
