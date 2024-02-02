<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function show_all_products(Request $r)
    {
        $products = Product::query()
            ->select('*');
        if ($r->filled('category')) {
            $products->where('category', '=', $r->input('category'));
        }
        if ($r->filled('nego')) {
            $products->where('nego_status', '=', $r->input('nego'));
        }
        $products = $products
            ->paginate(20);
        $products->appends($r->except('page'));
        return view('all_products', compact('products'));
    }
}
