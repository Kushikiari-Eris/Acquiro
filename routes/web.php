<?php

use App\Http\Controllers\AdminadminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\ProfileController;
use Faker\Guesser\Name;
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

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/points', [PointsController::class, 'index'])->name('points');

Route::get('/home', [AdminController::class, 'index'])->middleware('auth')->name('home');

Route::get('/admin', [AdminadminController::class, 'index'])->middleware(['auth','admin'])->name('admin');
Route::get('/adminUser', [AdminadminController::class, 'adminUser'])->name('adminUser');
Route::get('/adminInbox', [AdminadminController::class, 'adminInbox'])->name('adminInbox');
Route::get('/adminTransaction', [AdminadminController::class, 'adminTransaction'])->name('adminTransaction');

require __DIR__.'/auth.php';
