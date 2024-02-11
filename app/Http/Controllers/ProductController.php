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


    public function seller_shop_view_add(string $product_id, $seller_id)
    {

        $cart = new Mybag();
        $cart->shopper_id = Session::get('user_id');
        $cart->product_id = $product_id;
        $cart->seller_id =  $seller_id;
        $cart->save();

        return redirect('/shop/seller/' . $seller_id)->with('success', 'Item was added to cart');
    }

    ////____PUBLIC SHOW SELLER SHOP___////----->will consult (loophole)
    public function seller_shop_view(string $id)
    {
        $product = Product::query()
            ->select('product_id', 'product_photo', 'name', 'price', 'nego_status', 'seller_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('seller_id', '=', $id)
            ->get();

        $seller = User::query()
            ->select('display_name', 'address_citytown')
            ->where('user_id', '=', $id)
            ->first();

        $liked = LikeProduct::query()
            ->select('product_id', 'like_id')
            ->where('shopper_id', '=', Session::get('user_id'))
            ->get();

        return view('shop_by_seller', compact('product', 'seller', 'liked'));
    }

    ////____SHOPPER CHECKOUT____////
    public function checkout_bag(string $id)
    {
        $checkout = Mybag::query()
            ->select('mybag.product_id', 'mybag.seller_id', 'name', 'display_name', 'price', 'product_photo')
            ->join('product', 'mybag.product_id', '=', 'product.product_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('mybag.seller_id', '=', $id)
            ->get();

        $name = User::query()
            ->select('*')
            ->where('user_id', '=', $id)
            ->first();

        return view('checkout_bag', compact('checkout', 'name'));
    }

    public function add_to_bag(string $product_id, string $seller_id)
    {
        $product = Product::query()
            ->select('*')
            ->join('users', 'users.user_id', '=', 'product.user_id')
            ->get()
            ->first();

        $cart = new Mybag();
        $cart->shopper_id = Session::get('user_id');
        $cart->product_id = $product_id;
        $cart->seller_id =  $seller_id;
        $cart->save();

        return redirect('/shop')->with('success', 'Item was added to cart');
    }

    public function redirect_heart(string $id)
    {
        Session::put("last_viewed", $id);

        return redirect("/login");
    }

    public function shopper_bag_view(Request $request)
    {
        $seller = User::query()
            ->select('display_name', 'product.seller_id')
            ->join('mybag', 'mybag.seller_id', 'users.user_id')
            ->join('product', 'product.seller_id', 'mybag.seller_id')
            ->where('mybag.shopper_id', '=', Session::get('user_id'))
            ->groupBy('display_name', 'product.seller_id')
            ->get();

        $product = Product::query()
            ->select('product.product_id', 'name', 'product_photo', 'price', 'mybag.seller_id')
            ->join('mybag', 'mybag.product_id', '=', 'product.product_id')
            ->where('shopper_id', '=', Session::get('user_id'))
            ->get();

        foreach ($product as $bag) {
            $products = Product::query()
                ->select('product.product_id', 'name', 'product_photo', 'price', 'mybag.seller_id')
                ->join('mybag', 'mybag.product_id', '=', 'product.product_id')
                ->where('shopper_id', '=', Session::get('user_id'))
                ->get();


            $totalPrice = $product->sum('price');

            $bag->product = $product;
            $bag->totalPrice = $totalPrice;
        }

        return view('shopper_bag', compact('seller', 'product', 'bag', 'request'));
    }
    // DELETE PRODUCTS FROM BAG

    public function delete_from_bag(string $id)
    {
        $product = Mybag::where('product_id', '=', $id)
            ->delete();


        return redirect('/shopper/my_bag')->with('success', 'Successfully deleted.');
    }

    /////______SHOPPER PRODUCT FUNCTIONS________/////
    /////______SHOPPER LIKES PAGE_____/////
    public function likes_view(Request $request)
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

        return view('like_page', compact('seller', 'product', 'request'));
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

    /////______SHOPPER ADD LIKE IN SHOPPER PAGE_____/////
    public function seller_page_like(string $seller_id, string $product_id)
    {
        $like_product = new LikeProduct;
        $like_product->shopper_id = Session::get('user_id');
        $like_product->seller_id = $seller_id;
        $like_product->product_id = $product_id;

        $like_product->save();

        return redirect('/shop/seller/' . $seller_id);
    }


    /////______SHOPPER REMOVE LIKE IN LIKE PAGE_____/////
    public function delete_like(string $id)
    {
        LikeProduct::where('like_id', '=', $id)->first()
            ->delete();

        return redirect('/shopper/products/likes');
    }

    /////______SHOPPER REMOVE LIKE IN SHOP PAGE_____/////
    public function shop_delete_like(string $id)
    {
        // return $id;
        LikeProduct::where('like_id', '=', $id)
            ->delete();

        return redirect('/shop');
    }

    /////____SHOPPER REMOVE LIKE IN SELLER SHOP____/////
    public function delete_like_shop_product(string $id)
    {
        $seller = LikeProduct::where('like_id', '=', $id)
            ->first();

        LikeProduct::where('like_id', '=', $id)
            ->delete();

        return redirect('/shop/seller/' . $seller->seller_id);
    }

    ////____ADD LIKE IN PRODUCT PAGE___////
    public function add_like_product(string $product_id, string $seller_id)
    {
        $like_product = new LikeProduct;
        $like_product->shopper_id = Session::get('user_id');
        $like_product->seller_id = $seller_id;
        $like_product->product_id = $product_id;

        $like_product->save();

        return redirect('/shop/' . $product_id);
    }

    ////____DELETE LIKE IN PRODUCT PAGE___////
    public function delete_like_product(string $id)
    {
        $product = LikeProduct::where('like_id', '=', $id)
            ->first();

        $like_product = LikeProduct::where('like_id', '=', $id)
            // $product_id = $like_product->product_id;
            ->delete();

        return redirect('/shop/' . $product->product_id);
    }

    /////______SELLER PRODUCT FUNCTIONS________/////
    /////______MY SHOP_____/////
    public function my_shop_view()
    {
        $products = Product::query()
            ->select('*')
            ->where('seller_id', '=', Session::get('user_id'))
            ->get();

        $seller = User::query()
            ->select('first_name', 'last_name', 'product.seller_id')
            ->join('product', 'product.seller_id', 'users.user_id')
            ->where('seller_id', '=', Session::get('user_id'))
            ->first();


        return view('myshop_seller_pov', compact('products', 'seller'));
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

        $liked = LikeProduct::query()
            ->select('product_id', 'like_id')
            ->where('shopper_id', '=', Session::get('user_id'))
            ->get();

        $products = $products
            ->paginate(20);
        $products->appends($r->except('page'));

        return view('all_products', compact('products', 'liked'));
    }

    /////______PUBLIC SIDE FUNCTIONS________/////
    /////______PUBLIC SHOP PAGE________/////
    public function show_product(string $id, Request $request)
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

        $like = LikeProduct::query()
            ->select('product_id', 'like_id')
            ->where('shopper_id', '=', Session::get('user_id'))
            ->get();

        return view('show_product', compact('product', 'info', 'like', 'request'));
    }

    public function show_all_products(Request $request)
    {
        $products = Product::query()
            ->select('*')
            ->where('availability', '=', 'available'); //added show available products only
        if ($request->filled('category')) {
            $category = $request->input('category');
            if ($category == 'All') {
                $products->whereIn('category', ['Clothes', 'Bags', 'Shoes']);
            } else {
                $products->where('category', $category);
            }
        }


        if ($request->filled('sortOptions')) {
            $sortOption = $request->input('sortOptions');
            switch ($sortOption) {
                case 'highToLow':
                    $products->orderBy('price', 'DESC');
                    break;
                case 'lowToHigh':
                    $products->orderBy('price', 'ASC');
                    break;
                case 'aToZ':
                    $products->orderBy('name', 'ASC');
                    break;
                case 'zToA':
                    $products->orderBy('name', 'DESC');
                    break;
                default:
                    break;
            }
        }

        $products = $products
            ->paginate(8);
        $products->appends($request->except('page'));

        $liked = LikeProduct::query()
            ->select('product_id', 'like_id')
            ->where('shopper_id', '=', Session::get('user_id'))
            ->get();



        return view('all_products', compact('products', 'liked', 'request'));
    }
}
