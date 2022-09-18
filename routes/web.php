<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\reportController;

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
    return view('login');
});

################## register form ####################
Route::get('check', [ClientController::class, 'check'])->name('check');

Route::post('createUser', [ClientController::class,'store'])->name('createUser');

################## ligin form ####################

Route::get('sign up', [ClientController::class, 'createAcount'])->name('sign up');

################ report ##################
Route::post('storeReport', [reportController::class,'store'])->name('storeReport');

Route::get('showReports', [reportController::class,'show'])->name('showReport');