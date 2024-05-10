<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/toko',[TokoController::class,'index']);
    Route::get('/toko/create',[TokoController::class,'create']);
    Route::post('/toko/store',[TokoController::class,'store']);
    Route::get('/toko/{toko:idBarang}',[TokoController::class,'getToko']);
    Route::put('/toko/{toko:idBarang}',[TokoController::class,'update']);
    Route::delete('/toko/{toko:idBarang}',[TokoController::class,'destroy']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
