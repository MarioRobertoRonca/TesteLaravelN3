<?php

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

use App\Http\Controllers\ReserveController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'welcome'] );
Route::get('/reserves/reserves', [ReserveController::class, 'reserves']);
Route::get('/reserves/create', [ReserveController::class, 'create']);
Route::post('/reserves', [ReserveController::class, 'store']);

