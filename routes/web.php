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
Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'viewHome'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\MainController::class, 'viewDashboard'])->name('dashboard')->middleware('auth');

// Class
Route::prefix('class')->name('class-')->group(function() {
    Route::get('list',[App\Http\Controllers\AdminController::class, 'viewListClass'])->name('view-list')->middleware('auth');
    Route::get('create',[App\Http\Controllers\AdminController::class, 'viewCreateClass'])->name('view-create')->middleware('auth');
    Route::get('create/post',[App\Http\Controllers\AdminController::class, 'createClass'])->name('create')->middleware('auth');
    Route::get('student/{class}',[App\Http\Controllers\AdminController::class, 'viewClassStudent'])->name('view-student')->middleware('auth');
});

Route::prefix('student')->name('student-')->group(function() {
    Route::get('list',[App\Http\Controllers\AdminController::class, 'viewListStudent'])->name('view-list')->middleware('auth');
    Route::get('create',[App\Http\Controllers\AdminController::class, 'viewCreateStudent'])->name('view-create')->middleware('auth');
    Route::get('create/post',[App\Http\Controllers\AdminController::class, 'createStudent'])->name('create')->middleware('auth');
});