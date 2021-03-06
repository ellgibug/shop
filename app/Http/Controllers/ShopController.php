<?php

namespace App\Http\Controllers;

use App\Product;
use App\Section;
use Illuminate\Pagination\Paginator;
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

    public function getProductsFromSection($id, Request $request)
    {
        $section = Section::find($id);

        $products = $section->products->where('feature', null);

        if ($request->has('minPrice') && $request->minPrice != '') {
            $products = $products->where('price', '>',  $request->minPrice);
        }

        if ($request->has('maxPrice') && $request->maxPrice != '') {
            $products = $products->where('price', '<',  $request->maxPrice);
        }

        if ($request->has('isAvailable') && $request->isAvailable == 1) {
            $products = $products->where('availability',  1);
        }

        if ($request->has('sortBy')) {
            if($request->sortBy == 2) {
                $products = $products->sortBy('price');
            }
            if($request->sortBy == 3) {
                $products = $products->sortByDesc('price');
            }
        }

        $products = $products->paginate(8)->appends([
            'minPrice' => $request->minPrice,
            'maxPrice' => $request->maxPrice,
            'isAvailable' => $request->isAvailable,
            'sortBy' => $request->sortBy
        ]);

        return view('shop.products-list', compact('section', 'products'));
    }

    public function getSingleProduct($id)
    {
        $product = Product::find($id);

        return view ('shop.product-single', compact('product'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $products = Product::search($search)->get();

//        $products = Product::search($search)->where('feature', '>', 0);

        /*
         * дублирование. плохо
         */

        if ($request->has('minPrice') && $request->minPrice != '') {
            $products = $products->where('price', '>',  $request->minPrice);
        }

        if ($request->has('maxPrice') && $request->maxPrice != '') {
            $products = $products->where('price', '<',  $request->maxPrice);
        }

        if ($request->has('isAvailable') && $request->isAvailable == 1) {
            $products = $products->where('availability',  1);
        }

        if ($request->has('sortBy')) {
            if($request->sortBy == 2) {
                $products = $products->sortBy('price');
            }
            if($request->sortBy == 3) {
                $products = $products->sortByDesc('price');
            }
        }

        $products = $products->paginate(8)->appends([
            'search' => $search,
            'minPrice' => $request->minPrice,
            'maxPrice' => $request->maxPrice,
            'isAvailable' => $request->isAvailable,
            'sortBy' => $request->sortBy
        ]);

        return view ('shop.search', compact('products', 'search'));
    }

    public function getAjax(Request $request)
    {
        dd($request->all());
    }




}
