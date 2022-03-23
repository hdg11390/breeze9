<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\FpedController;
use App\Http\Controllers\MpedController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/pedi', function () {
    return view('pedi');
})->middleware(['auth'])->name('pedi');
require __DIR__.'/auth.php';

Route::get('/dogs/index',[DogController::class,'index'])->name('list_dog');
Route::get('/dogs/create',[DogController::class,'create'])->name('create_dog');
Route::get('/dogs/edit/{dog}',[DogController::class, 'edit']);
Route::patch('/dogs/update/{dog}', [DogController::class, 'update'])->name('update_dog');
Route::get('/dogs/show/{dog}',[DogController::class,'show']);
Route::post('/store',[DogController::class,'store']);

Route::get('/fped',[FpedController::class,'index'])->name('fped.index');
Route::get('/fped/create',[FpedController::class,'create'])->name('create_fped');
Route::get('fped/edit/{fped}',[FpedController::class,'edit'])->name('fped.edit');
Route::patch('/dogs/update/{fped}', [FpedController::class, 'update'])->name('fped.update');
Route::get('/fped/show/{fped}',[FpedController::class,'show'])->name('fped.show');
Route::post('/fped/store',[FpedController::class,'store'])->name('fped.store');

Route::get('/mped',[MpedController::class,'index'])->name('mped.index');
Route::get('/mped/create',[MpedController::class,'create'])->name('mped.create');
Route::get('mped/edit/{mped}',[MpedController::class,'edit'])->name('mped.edit');
Route::patch('/dogs/update/{mped}', [MpedController::class, 'update'])->name('mped.update');
Route::get('/mped/show/{mped}',[MpedController::class,'show'])->name('mped.show');
Route::post('/mped/store',[MpedController::class,'store'])->name('mped.store');
