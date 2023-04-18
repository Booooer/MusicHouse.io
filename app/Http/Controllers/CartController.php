<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function show(){
        $cart = DB::table('carts')->where('session_id',session()->getId())->get();
        $cartSum = 0;

        foreach($cart as $item){
            $cartSum += $item->price * $item->count;
        }

        return view('cart',['cart' => $cart, 'cartSum' => $cartSum]);
    }

    public function add(Request $request){
        $cart = DB::table('carts')
            ->where('product_id',$request->id)
            ->where('session_id',session()->getId())
            ->first();
        $product = DB::table('product')->where("id",$request->id)->first();

        if (!empty($cart)){
            DB::table('carts')
            ->where('product_id',$request->id)
            ->where('session_id',session()->getId())
            ->update(['count' => ++$cart->count]);

            return redirect()->route('cart');
        }

        $cart = Cart::create([
            "product_id" => $product->id,
            "title" => $product->title,
            "price" => $product->price,
            "count" => 1,
            "session_id" => session()->getId(),
        ]);

        return back();
    }
}
