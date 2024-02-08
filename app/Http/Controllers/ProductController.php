<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\LikeProduct;
use App\Models\User;
use App\Models\Mybag;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


use Kyslik\ColumnSortable\Sortable;


class ProductController extends Controller
{
    use Sortable;
    public function add_to_bag(string $id)
    {
        $product = Product::query()
            ->select('*')
            ->join('users', 'users.user_id', '=', 'product.user_id')
            ->get()
            ->first();

        $cart = new Mybag();
        $cart->shopper_id = Session::get('user_id');
        $cart->product_id = $id;
        $cart->seller_id =  $id;
        $cart->save();

        return redirect('/shop')->with('success', 'Item was added to cart');
    }

    public function redirect_heart(string $id)
    {
        Session::put("last_viewed", $id);

        return redirect("/login");
    }

    public function shopper_bag_view()
    {
        $shopper_id = Session::get('user_id');

        // Fetch product information for products in the shopper's bag
        $info = Product::query()
            ->select('product.*', 'users.email_address', 'users.address_citytown')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->join('mybag', 'mybag.product_id', '=', 'product.product_id')
            ->where('mybag.shopper_id', '=', $shopper_id)
            ->get();

        $by_seller = $info
            ->groupBy('seller_id');




        return view('shopper_bag', compact('info', 'by_seller'));
    }

    /////______SHOPPER PRODUCT FUNCTIONS________/////
    /////______SHOPPER LIKES PAGE_____/////
    public function likes_view()
    {
        $seller = User::query()
            ->select('display_name', 'product.seller_id')
            ->join('product', 'users.user_id', '=', 'product.user_id')
            ->join('like_products', 'like_products.product_id', '=', 'product.product_id')
            ->where('like_products.shopper_id', '=', Session::get('user_id'))
            ->groupBy('display_name', 'product.seller_id')
            ->get();

        $product = Product::query()
            ->select('product.product_id', 'name', 'product_photo', 'price', 'product.seller_id', 'like_id')
            ->join('like_products', 'like_products.product_id', '=', 'product.product_id')
            ->where('shopper_id', '=', Session::get('user_id'))
            ->get();

        return view('like_page', compact('seller', 'product'));
    }

    /////______SHOPPER ADD LIKE_____/////
    public function add_like(string $product_id, string $seller_id)
    {
        $like_product = new LikeProduct;
        $like_product->shopper_id = Session::get('user_id');
        $like_product->seller_id = $seller_id;
        $like_product->product_id = $product_id;

        $like_product->save();

        return redirect('/shop');
    }

    /////______SHOPPER REMOVE LIKE_____/////
    public function delete_like(string $id)
    {
        LikeProduct::where('like_id', '=', $id)->first()
            ->delete();

        return redirect('/shopper/products/likes');
    }

    /////______SELLER PRODUCT FUNCTIONS________/////
    /////______MY SHOP_____/////
    public function my_shop_view()
    {
        $products = Product::query()
            ->select('*')
            ->where('seller_id', '=', Session::get('user_id'))
            ->get();

        return view('myshop_seller_pov', compact('products'));
    }

    /////______ADD PRODUCT________/////
    public function add_product(Request $r)
    {
        $product = Product::query()
            ->select('*')
            ->join('users', 'users.user_id', '=', 'product.user_id') //added user_id in the product table
            ->get();

        $product = new Product;
        $product->name = $r->input('name');
        $product->price = $r->input('price');
        $product->category = $r->input('category');
        $product->nego_status = $r->input('nego_status');
        $product->seller_id = Session::get('user_id');
        $product->user_id = Session::get('user_id');
        $product->availability = 'available';
        $product->product_condition = $r->input('product_condition');
        $product->brand = $r->input('brand');
        $product->material = $r->input('material');
        $product->color = $r->input('color');
        $product->size_fit = $r->input('size_fit');
        $product->notes = $r->input('notes');
        $product->nego_status = $r->input('nego_status');
        if ($r->file('product_photo')) {
            $file = $r->file('product_photo');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $product->product_photo = $filename;
        }
        $product->save();

        return redirect("/shop/" . $product->product_id); //will change to product page seller POV
    }

    public function add_product_view()
    {
        return view('add_product');
    }

    /////______EDIT PRODUCT_____/////
    public function edit_product_form(string $id)
    {
        $product = Product::query()
            ->select('*')
            ->where('product_id', '=', $id)
            ->where('seller_id', '=', Session::get('user_id'))
            ->first();

        return view('edit_product', compact('product'));
    }

    public function edit_product(Request $r, string $id)
    {
        $product = Product::where('product_id', $id)->first();
        if ($product && $product->seller_id == Session::get('user_id')) {
            $updateData = [
                'name' => $r->input('name'),
                'price' => $r->input('price'),
                'category' => $r->input('category'),
                'condition' => $r->input('condition'),
                'brand' => $r->input('brand'),
                'material' => $r->input('material'),
                'color' => $r->input('color'),
                'size_fit' => $r->input('size_fit'),
                'notes' => $r->input('notes'),
                'nego_status' => $r->input('nego_status'),
            ];

            if ($r->input('product_photo') !== null) {
                $updateData['product_photo'] = $r->input('product_photo');
            }

            $product->update($updateData);

            return redirect('/seller/edit/product/' . $id);
        } else {
            return redirect('/login')->with('fail', 'Invalid user logged in.');
        }
    }

    /////______DELETE PRODUCT_____/////
    public function delete_product(string $id)
    {
        $product = Product::where('product_id', '=', $id)->first();
        if ($product && $product->seller_id == Session::get('user_id')) {
            $product->delete();

            return redirect('/seller/my_shop');
        } else {
            return redirect('/login')->with('fail', 'Invalid user logged in.');
        }
    }

    /////______NAVBAR FUNCTIONS________/////
    /////___SEARCH BAR LAYOUT___/////
    public function search_product(Request $r)
    {
        $products = Product::query()
            ->select('name', 'price', 'nego_status', 'category', 'product_photo');

        if ($r->filled("search")) {
            $products->where(function ($query) use ($r) {
                $query->where('name', 'LIKE', '%' . $r->input('search') . '%')
                    ->orWhere('category', 'LIKE', '%' . $r->input('search') . '%');
            });
        }

        $products = $products
            ->sortable()->paginate(20);
        $products->appends($r->except('page'));

        return view('all_products', compact('products'));
    }

    /////______PUBLIC SIDE FUNCTIONS________/////
    /////______PUBLIC SHOP PAGE________/////
    public function show_product(string $id)
    {
        $info = Product::query()
            ->select('*')
            ->join('users', 'users.user_id', '=', 'product.user_id')
            ->get()
            ->first();
        $product = Product::query()
            ->select('*')
            ->where('product_id', '=', $id)
            ->get()
            ->first();


        return view('show_product', compact('product', 'info'));
    }

    public function show_all_products(Request $r)
    {
        $products = Product::query()
            ->select('*')
            ->where('availability', '=', 'available'); //added show available products only
        if ($r->filled('category')) {
            $products->where('category', '=', $r->input('category'));
        }

        $products = $products
            ->paginate(20);
        $products->appends($r->except('page'));

        return view('all_products', compact('products'));
    }
}
