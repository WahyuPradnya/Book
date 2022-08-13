<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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


Route::get('/project1', [BookController::class, 'Index1']);
Route::get('/project2', [BookController::class, 'Index2']);
Route::get('/project3', [BookController::class, 'Index3']);



