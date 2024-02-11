<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\OrdersProduct;
use App\Models\Mybag;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Kyslik\ColumnSortable\Sortable;

class OrderController extends Controller
{
    ////_____SHOPPER ORDER SECTION____////-------------will need to consult
    public function shopper_add_order(string $id, request $r)
    {
        $order = new Order;
        $order->collect_op = $r->input('collect_op');
        $order->payment = $r->input('payment');
        $order->seller_id = $id;
        $order->shopper_id = Session::get('user_id');
        $order->status_seller = "Order Submitted";
        $order->status_shopper = "Waiting Confirmation";

        $order->save();

        $avail = Product::query()
            ->select('*')
            ->join('mybag', 'product.product_id', '=', 'mybag.product_id')
            ->where('mybag.seller_id', '=', $id)
            ->where('availability', '=', 'available')
            ->get();

        $order_products = [];
        for ($i = 0; $i < count($avail); $i++) {
            $op = new OrdersProduct;
            $op->order_id = $order->order_id;
            $op->product_id = $avail[$i]->product_id;
            $op->shopper_id = Session::get('user_id');
            $op->save();
            array_push($order_products, $op);
        }

        $delete_bag = Mybag::query()
            ->where('shopper_id', '=', Session::get('user_id'))
            ->where('seller_id', '=', $id)
            ->delete();

        return redirect('/shopper/order');
    }

    public function shopper_current_order()
    {
        $orders = Order::query()
            ->select('orders.order_id', 'status_shopper', 'display_name')
            ->join('orders_product', 'orders.order_id', '=', 'orders_product.order_id')
            ->join('product', 'product.product_id', '=', 'orders_product.product_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('orders.shopper_id', '=', Session::get('user_id'))
            ->groupBy('orders.order_id', 'status_shopper', 'display_name')
            ->get();

        foreach ($orders as $order) {
            $products = OrdersProduct::query()
                ->select('name', 'price', 'product_photo', 'order_id')
                ->join('product', 'orders_product.product_id', '=', 'product.product_id')
                ->where('order_id', '=', $order->order_id)
                ->get();

            $totalPrice = $products->sum('price');

            $order->products = $products;
            $order->totalPrice = $totalPrice;
        }

        return view('shopper_current_order', compact('orders'));
    }


    public function shopper_previous_order()
    {
        $orders = Order::query()
            ->select('orders.order_id', 'status_shopper', 'display_name')
            ->join('orders_product', 'orders.order_id', '=', 'orders_product.order_id')
            ->join('product', 'product.product_id', '=', 'orders_product.product_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('orders.shopper_id', '=', Session::get('user_id'))
            ->groupBy('orders.order_id', 'status_shopper', 'display_name')
            ->get();

        foreach ($orders as $order) {
            $products = OrdersProduct::query()
                ->select('name', 'price', 'product_photo', 'order_id')
                ->join('product', 'orders_product.product_id', '=', 'product.product_id')
                ->where('order_id', '=', $order->order_id)
                ->get();

            $totalPrice = $products->sum('price');

            $order->products = $products;
            $order->totalPrice = $totalPrice;
        }
        
        return view('shopper_previous_order');
    }

    ////_____SELLER ORDER SECTION_____////
    public function seller_current_order_view()
    {
        return view('seller_current_order');
    }

    public function seller_prev_order_view()
    {
        return view('seller_previous_order');
    }
}
