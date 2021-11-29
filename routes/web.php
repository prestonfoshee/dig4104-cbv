<?php

use App\Http\Controllers\CandleController;
use App\Http\Controllers\CartController;
use App\Models\Candle;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/addToCart', [CartController::class, 'add']);
Route::delete('/removeFromCart', [CartController::class, 'remove']);

Route::get('/candles', [CandleController::class, 'index']);
Route::get('/candle/{candle:slug}', [CandleController::class, 'singleCandle']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
