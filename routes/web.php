<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClaraController;
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

Route::get('/home', [ClaraController::class, 'index'] );
Route::get('/biodata', [ClaraController::class, 'biodata']);
Route::get('/contact', [ClaraController::class, 'contact']);




