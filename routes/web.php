<?php

use App\Http\Controllers\FactionController;
use App\Http\Controllers\OperatorClassController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RaceController;
use App\Models\Operator;
use App\Models\OperatorClass;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Auth::routes();

Route::resource('/operator_class', OperatorClassController::class)->middleware('auth');
Route::resource('/operator', OperatorController::class)->middleware('auth');
Route::resource('/faction', FactionController::class)->middleware('auth');
Route::resource('/race', RaceController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
