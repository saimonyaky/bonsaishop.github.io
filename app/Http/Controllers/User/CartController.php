<?php

namespace App\Http\Controllers\User;

use App\Cart;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CartController extends ShareController
{
    function order()
    {
        if (!Session::has('Cart')) {
            return view('users.order', ['products' => null]);
        }
        $oldCart = Session::get('Cart');
        $cart = new Cart($oldCart);
        return view('users.order', ['products' => $cart->products, 'totalPrice' => $cart->totalPrice, 'totalStock' => $cart->totalStock]);
    }
    function addCart(Request $request, $slug)
    {
        $product = DB::table('products')->where('slug', $slug)->first();
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $product->id, $request->quanty);
            $request->session()->put('Cart', $newCart);
        }
        return redirect()->route('order');
    }
    function delCart(Request $request, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DelCart($id);
        if (count($newCart->products) > 0)
            $request->session()->put('Cart', $newCart);
        else
            $request->session()->forget('Cart');
        return redirect()->route('order');
    }
}
