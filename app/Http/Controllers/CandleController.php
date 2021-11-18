<?php

namespace App\Http\Controllers;

use App\Models\Candle;
use Illuminate\Http\Request;

class CandleController extends Controller
{
    public function index() {
        return view('candles', [
            'candles' => Candle::all()
        ]);
    }

    public function singleCandle(Candle $candle) {
        return view('candle', [
            'candle' => $candle
        ]);
    }
}
