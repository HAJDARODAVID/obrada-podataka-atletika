<?php

use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\DisciplineController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**
 * Admin-module routes are here!
 */
Route::prefix('admin')
->group(function(){
    Route::controller(DisciplineController::class)
    ->group(function(){
        Route::get('/discipline', 'index');
    });
});

/**
 * User routes
 */
Route::controller(ApplicationFormController::class)
->group(function(){
    Route::get('application', 'index');
});
