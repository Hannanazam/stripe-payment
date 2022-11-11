<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;

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
    return view('field-trans.form1');
})->name('form_field');
// Route::view('/form','field-trans.form1');

  
// Route::get('form/id', [StripePaymentController::class, 'stripe'])->name('form');
Route::get('form/id', [StripePaymentController::class, 'stripe'])->name('form');
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
Route::post('generate_link', [StripePaymentController::class, 'generate_link'])->name('generate_link');
