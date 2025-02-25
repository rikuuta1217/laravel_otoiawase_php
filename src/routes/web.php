<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BunbouguController;

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
Route::middleware('auth')->group(function () {Route::get('/bunbougus',[BunbouguController::class, 'index'])->name('index');
});
Route::get('/bunbougus/create',[BunbouguController::class,'create'])->name('bunbougus.create');
Route::post('/bunbougus/store',[BunbouguController::class,'store'])->name('bunbougus.store');
Route::get('/bunbougus/edit/{bunbougu}',[BunbouguController::class,'edit'])->name('bunbougu.edit');
Route::put('/bunbougus/edit/{bunbougu}',[BunbouguController::class,'update'])->name('bunbougu.update');
Route::get('/bunbougus/show/{bunbougu}',[BunbouguController::class,'show'])->name('bunbougu.show');
Route::delete('/bunbougus/destroy/{bunbougu}',[BunbouguController::class,'destroy'])->name('bunbougu.destroy');