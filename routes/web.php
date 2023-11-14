<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testong;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('layouts.app');
// })->name('home');

Route::get('/',[PageController::class, 'home']);

Route::get('/home',[PageController::class, 'home']) ->name('home');

Route::get('/mhs',[PageController::class,'mahasiswa']) ->name('mhs');






