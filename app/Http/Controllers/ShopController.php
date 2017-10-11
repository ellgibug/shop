<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function index2()
    {
        return view('shop.index2');
    }

    public function getProductsFromSection($id)
    {
        $section = Section::find($id);
        return view('shop.products-list', compact('section'));
    }
}
