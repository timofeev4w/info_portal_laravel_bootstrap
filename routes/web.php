<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\GibddController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\PaymentController;

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
Route::post('/', [IndividualController::class, 'redirectToPayment']);

Route::get('company', function () {
    return view('company');
});

Route::get('gibdd', function () {
    return view('gibdd');
});
Route::post('gibdd', [GibddController::class, 'redirectToPayment']);

Route::get('login', [UserController::class, 'loginShow']);
Route::post('login', [UserController::class, 'login']);

Route::get('payment', [PaymentController::class, 'show']);

Route::get('contacts', function () {
    return view('contacts');
});

Route::get('tariffs', function () {
    return view('tariffs');
});

Route::get('payment_methods', function () {
    return view('payment_methods');
});

Route::get('payment_security', function () {
    return view('payment_security');
});

Route::get('goods_return', function () {
    return view('goods_return');
});

Route::get('personal_policy', function () {
    return view('personal_policy');
});

// Route::get('offer', function () {
//     return view('offer');
// });

// Route::get('registration', [UserController::class, 'showRegistration']);
// Route::post('registration', [UserController::class, 'registration']);