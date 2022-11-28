<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelTestController;

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

Route::get('/building', [LaravelTestController::class, 'get']);

Route::get('/building/{room}', [LaravelTestController::class, 'index']);