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

Auth::routes();

Route::resource('schedules', 'App\Http\Controllers\ScheduleController');
Route::get('/home', [App\Http\Controllers\StaticController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\StaticController::class, 'blog'])->name('blog');
Route::get('/booking', [App\Http\Controllers\StaticController::class, 'booking'])->name('booking');
Route::get('/listings', [App\Http\Controllers\StaticController::class, 'listings'])->name('listings');
Route::get('/contact', [App\Http\Controllers\StaticController::class, 'contact'])->name('contact');
