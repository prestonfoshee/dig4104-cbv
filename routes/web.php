<?php

use App\Models\Candle;
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

Route::get('/cart', function () {
    return view('cart');
});

// Route::get('/candle', function () {
//     return view('candle');
// });


Route::get('/candles', function () {
    return view('candles', [
        'candles' => Candle::all()
    ]);
});

Route::get('/candle/{candle}', function ($id) {
    return view('candle', [
        'candle' => Candle::findOrFail($id)
    ]);
});
