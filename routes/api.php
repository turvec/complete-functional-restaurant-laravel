<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers', [ApiController::class,'customers']);
Route::get('/food', [ApiController::class,'food']);
Route::get('/cart', [ApiController::class,'cart']);
Route::get('/categories', [ApiController::class,'categories']);
Route::get('/chefs', [ApiController::class,'chefs']);
Route::get('/reservations', [ApiController::class,'reservations']);
Route::get('/events', [ApiController::class,'events']);
Route::get('/reviews', [ApiController::class,'reviews']);


