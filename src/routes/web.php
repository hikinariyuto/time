<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [TimeController::class, 'index']);

Route::post('/time/timein',[TimeController::class,'timein']);
Route::post('/time/timeout',[TimeController::class,'timeout']);

Route::post('/time/breakin',[TimeController::class,'breakin']);
Route::post('/time/breakout',[TimeController::class,'breakout']);

Route::get('/attendance', [TimeController::class, 'attendance']);


