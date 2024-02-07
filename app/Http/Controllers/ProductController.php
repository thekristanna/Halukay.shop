<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Kyslik\ColumnSortable\Sortable;


class ProductController extends Controller
{
    use Sortable;

    public function edit_product(Request $r, string $id)
    {
        $product = Product::where('product_id', '=', $id);
        if ($product->seller_id == Session::get('user_id')) {
            $product->update(
                [
                    'name' => $r->input('name'),
                    'price' => $r->input('price'),
                    'category' => $r->input('category'),
                    'condition' => $r->input('condition'),
                    'brand' => $r->input('brand'),
                    'material' => $r->input('material'),
                    'color' => $r->input('color'),
                    'size_fit' => $r->input('size_fit'),
                    'notes' => $r->input('notes'),
                    'product_photo' => $r->input('product_photo'),
                    'nego_status' => $r->input('nego_status'),
                ]
            );

            return redirect('/seller/edit/product/' . $id); //will update redirect
        } else {
            redirect('/login')->with('fail', 'Invalid user logged in.');
        }
    }

    public function edit_product_form(string $id)
    {
        $product = Product::query()
            ->select('*')
            ->where('product_id', '=', $id)
            ->where('seller_id', '=', Session::get('user_id'))
            ->first();

        return view('edit_product', compact('product'));
    }

    public function redirect_heart(string $id)
    {
        Session::put("last_viewed", $id);

        return redirect("/login");
    }

    public function shopper_bag_view()
    {
        return view('shopper_bag');
    }

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

    //completely working ////// 
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
    /////////////////////////////////////

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
