<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart()
    {
        $cartItems = Cart::instance('shopping')->content();

        return view ('cart.cart', compact('cartItems'));
    }

    public function wishlist()
    {
        $cartItems = Cart::instance('wishlist')->content();

        return view ('cart.wishlist', compact('cartItems'));
    }

    public function addProductToCart(Request $request, $id)
    {
        if ($request->has('amount')){
            $amount = $request->amount;
        } else {
            $amount = 1;
        }

        $product = Product::find($id);

        Cart::instance('shopping')->add($id, $product->name, $amount, $product->price);

        return back();
    }

    public function addProductToWishlist(Request $request, $id)
    {
        $product = Product::find($id);

        Cart::instance('wishlist')->add($id, $product->name, 1, $product->price);

        return back();
    }


    public function updateCart(Request $request, $id)
    {
        Cart::instance('shopping')->update($id, $request->amount);

        return back();
    }

//    public function updateWishlist(Request $request, $id)
//    {
//        Cart::instance('wishlist')->update($id, $request->amount);
//
//        return back();
//    }


    public function deleteProductFromCart($id)
    {
        Cart::instance('shopping')->remove($id);

        return back();
    }

    public function deleteProductFromWishlist($id)
    {
        Cart::instance('wishlist')->remove($id);

        return back();
    }
}
