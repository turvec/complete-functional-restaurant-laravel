<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChefController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;

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


Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/redirects', [HomeController::class,'redirects']);
//
Route::get('/about', [UserController::class,'showAbout'])->name('about');
Route::get('/food-menu', [UserController::class,'showMenu'])->name('menu');


Route::post('/add-cart/{id}', [UserController::class,'addCart'])->name('add_cart');
Route::get('/delete-cart/{id}', [UserController::class,'deleteCart'])->name('delete_cart');
Route::post('/update-cart/{id}', [UserController::class,'updateCart'])->name('update_cart');
Route::get('/contact-us', [UserController::class,'showContact'])->name('contact');

Route::get('/add-category', [CategoryController::class,'index'])->name('addcategory');
Route::post('/upload-category', [CategoryController::class,'data'])->name('upload-category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/all-users', [AdminController::class,'getAllusers'])->name('allusers');

Route::get('/all-foods', [AdminController::class,'getAllfoods'])->name('allfoods');

Route::get('/delete-user/{id}', [AdminController::class,'deleteUser'])->name('deleteuser');

Route::get('/edit-food/{id}', [AdminController::class,'editFood'])->name('edit_food');

Route::post('/update-food/{id}', [AdminController::class,'updateFood'])->name('update_food');

Route::get('/delete-food/{id}', [AdminController::class,'deleteFood'])->name('deletefood');

Route::get('/add-food', [AdminController::class,'addFood'])->name('addfood');

Route::post('/upload-food', [AdminController::class,'uploadFood'])->name('upload-food');

Route::get('/all-reservation', [AdminController::class,'showReservation'])->name('show-reservation');

Route::get('/delete-reservation/{id}', [AdminController::class,'deleteReservation'])->name('delete-reservation');

Route::get('/add-reviews', [AdminController::class,'addReviews'])->name('add_reviews');

Route::post('/upload-reviews', [AdminController::class,'uploadReviews'])->name('upload_reviews');

Route::get('/all-reviews', [AdminController::class,'showAllReviews'])->name('all_reviews');

Route::get('/delete-review/{id}', [AdminController::class,'deleteReview'])->name('delete_review');

Route::get('/edit-review/{id}', [AdminController::class,'editReview'])->name('edit_review');

Route::post('/update-review/{id}', [AdminController::class,'updateReview'])->name('update_review');

Route::get('/add-chef', [ChefController::class,'addChef'])->name('add_chef');

Route::post('/upload-chef', [ChefController::class,'uploadChef'])->name('upload_chef');

Route::get('/all-chefs', [ChefController::class,'showAllChefs'])->name('all_chefs');

Route::get('/delete-chef/{id}', [ChefController::class,'deleteChef'])->name('delete_chef');

Route::get('/edit-chef/{id}', [ChefController::class,'editChef'])->name('edit_chef');

Route::post('/update-chef/{id}', [ChefController::class,'updateChef'])->name('update_chef');

Route::post('/add-reservation', [ReservationController::class,'addReservation'])->name('add_reservation');

Route::get('/payment/callback', [PaymentController::class, 'paymentCallback'])->name('payment_callback');

Route::middleware(['auth'])->prefix('user')->group(function () {
Route::get('/show-cart', [UserController::class,'showCart'])->name('show_cart');
Route::get('/reservation', [UserController::class,'showReservation'])->name('show_reservation');
Route::post('/send-contact-message', [UserController::class,'sendContact'])->name('send-contact');
Route::post('/make-payment', [PaymentController::class, 'makePayment'])->name('pay');
});
