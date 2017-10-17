<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('orders.checkout');
    }

    public function success()
    {
        Cart::destroy();
        return view('orders.success');
    }
}
