<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class,'index']);

Route::get('/redirects', [HomeController::class,'redirects']);
//

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/all-users', [AdminController::class,'getAllusers'])->name('allusers');

Route::get('/delete-user/{id}', [AdminController::class,'deleteuser'])->name('deleteuser');

Route::post('/edit-user', [AdminController::class,'edituser'])->name('edituser');

Route::get('/food-menu', [AdminController::class,'getMenu'])->name('foodmenu');