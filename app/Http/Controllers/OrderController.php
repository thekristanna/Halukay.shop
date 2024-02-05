<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Kyslik\ColumnSortable\Sortable;

class OrderController extends Controller
{
    public function seller_current_order_view()
    {
        return view('seller_current_order');
    }

    public function seller_prev_order_view()
    {
        return view('seller_previous_order');
    }

    public function current_order_view()
    {
        return view('shopper_current_order');
    }

    public function previous_order_view()
    {
        return view('shopper_previous_order');
    }
}
