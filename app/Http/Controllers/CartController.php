<?php

namespace App\Http\Controllers;

use App\Models\Candle;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(Cart $cart) {
        if(Auth::check()) {
        $items = $cart->where('user_id', Auth::id())->get();

        return view('cart', [
            'items' => $items
        ]);
    }
    else {
        return view('cart');
    }
        // dd('worked');
    }

    public function add(Request $request) {
        if(Auth::check()) {
            $candle = Cart::where('candle_id', $request->candleId)->first();

            if($candle == null) {
                Cart::create([
                    'user_id' => Auth::id(),
                    'candle_id' => $request->candleId,
                    'name' => $request->candleName,
                    'img_url' => $request->candleImg,
                    'price' => $request->candlePrice,
                    'quantity' => $request->candleQuantity
                ]);

            // $cart = new Cart();

            // $cart->user_id = Auth::id();
            // $cart->candle_id = $request->candleId;
            // $cart->name = $request->candleName;
            // $cart->img_url = $request->candleImg;
            // $cart->price = $request->candlePrice;
            // $cart->quantity = $request->candleQuantity;
            // $cart->save();
            return response()->json([
                'message' => 'Added to cart!'
            ]);
            // return redirect()->route('cart')->with('success', 'Candle added to cart!');
        }
        else {
            return response()->json([
                'message' => 'Candle already in cart'
            ]);
        }
        }
        else {
            return response()->json([
                'message' => 'Please login to add candles to your cart.'
            ]);
        }
    }

    public function remove(Request $request) {
        Cart::where('candle_id', $request->candleId)->delete();
        return redirect()->route('cart')->with('success', 'Candle deleted!');
    }
}
