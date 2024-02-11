<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\OrdersProduct;
use App\Models\Mybag;
use App\Models\OrderStatus;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Kyslik\ColumnSortable\Sortable;

class OrderController extends Controller
{
    ////_____SHOPPER ORDER SECTION____////
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

        $orderstatus = new OrderStatus;
        $orderstatus->order_id = $order->order_id;
        $orderstatus->status = "Order is submitted. Awaiting for seller's response.";

        $orderstatus->save();

        $delete_bag = Mybag::query()
            ->where('shopper_id', '=', Session::get('user_id'))
            ->where('seller_id', '=', $id)
            ->delete();

        return redirect('/shopper/order');
    }

    public function shopper_current_order()
    {
        $orders = Order::query()
            ->select('orders.order_id', 'status_shopper', 'display_name', 'status_shopper')
            ->join('orders_product', 'orders.order_id', '=', 'orders_product.order_id')
            ->join('product', 'product.product_id', '=', 'orders_product.product_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('orders.shopper_id', '=', Session::get('user_id'))
            ->where('status_shopper', '!=', 'Order Complete')
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
            ->where('status_shopper', '=', 'Order Complete')
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

        return view('shopper_previous_order', compact('orders'));
    }

    ////_____UPDATE ORDER STATUS SHOPPER_____////
    public function edit_shopper_order_status(string $id, Request $r)
    {
        $status = new OrderStatus;
        $status->order_id = $id;
        $status->status = $r->input('name-dropdown');

        $status->save();

        return redirect('/shopper/order/status/' . $id);
    }

    ////_____UPDATE ORDER STATUS SELLER_____////
    public function edit_seller_order_status(string $id, Request $r)
    {
        $status = new OrderStatus;
        $status->order_id = $id;
        $status->status = $r->input('name-dropdown');

        $status->save();

        return redirect('/seller/order/status/' . $id);
    }

    ////_____SHOPPER ORDER STATUS_____/////
    public function shopper_order_status(string $id)
    {
        $order = Order::query()
            ->select('order_id', 'collect_op', 'display_name')
            ->join('product', 'orders.seller_id', '=', 'product.seller_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('order_id', '=', $id)
            ->where('orders.shopper_id', '=', Session::get('user_id'))
            ->get()
            ->first();

        $status = OrderStatus::query()
            ->select('status', 'date_time', 'order_id')
            ->where('order_status.order_id', '=', $id)
            ->orderBy('order_id')
            ->get();

        return view('shopper_order_status', compact('order', 'status'));
    }

    ////_____SELLER ORDER STATUS_____/////
    public function seller_order_status(string $id)
    {
        $order = Order::query()
            ->select('order_id', 'collect_op', 'display_name')
            ->join('product', 'orders.seller_id', '=', 'product.seller_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('order_id', '=', $id)
            ->where('orders.seller_id', '=', Session::get('user_id'))
            ->get()
            ->first();

        $status = OrderStatus::query()
            ->select('status', 'date_time')
            ->where('order_status.order_id', '=', $id)
            ->orderBy('date_time')
            ->get();

        $rate = OrderStatus::query()
            ->select('status')
            ->where('order_id', '=', $id)
            ->where('status', '=', 'Rate shopper experience')
            ->get()
            ->first();

        $shopper = Order::query()
            ->select('shopper_id', 'order_id')
            ->where('order_id', '=', $id)
            ->first();

        return view('seller_order_status', compact('order', 'status', 'rate', 'shopper'));
    }

    ////_____SELLER ORDER SECTION_____////
    public function seller_current_order_view()
    {
        $orders = Order::query()
            ->select('orders.order_id', 'status_seller', 'display_name')
            ->join('orders_product', 'orders.order_id', '=', 'orders_product.order_id')
            ->join('product', 'product.product_id', '=', 'orders_product.product_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('orders.seller_id', '=', Session::get('user_id'))
            ->where('status_seller', '!=', 'Order Complete')
            ->groupBy('orders.order_id', 'status_seller', 'display_name')
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

        return view('seller_current_order', compact('orders'));
    }

    public function seller_prev_order_view()
    {
        $orders = Order::query()
            ->select('orders.order_id', 'status_seller', 'display_name')
            ->join('orders_product', 'orders.order_id', '=', 'orders_product.order_id')
            ->join('product', 'product.product_id', '=', 'orders_product.product_id')
            ->join('users', 'product.user_id', '=', 'users.user_id')
            ->where('orders.seller_id', '=', Session::get('user_id'))
            ->where('status_seller', '=', 'Order Complete')
            ->groupBy('orders.order_id', 'status_seller', 'display_name')
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

        return view('seller_previous_order', compact('orders'));
    }
}
