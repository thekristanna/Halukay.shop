<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Remix icon -->
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css"
            rel="stylesheet"
        />
        <!-- Box icons -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
        />
        <!-- CSS -->
        <link rel="stylesheet" href="/css/shopper_collection_status.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="/img/halukay-favicon.png"
            type="image/x-icon"
        />
        <!-- Page Title -->
        <title>Status | Halukay</title>
    </head>
    <body>
         <!-- header -->
         @if (Session::get('role') == 'seller')
         @include('layouts/navbar_seller')
     @elseif (Session::get('role') == 'shopper')
         @include('layouts/navbar_shopper')
     @else
         @include('layouts/navbar_public')
     @endif  



        <!-- collection status -->
        <div class="container">
            <div class="top-line">
                <p class="status-header"><i class="ri-box-3-line"></i>Collection Status | <span id="collection-method">{{$order -> collect_op}}</span></p>

                
                <div class="send-status">
                    <form action="/seller/order/status/{{$order -> order_id}}" method="POST">
                        @csrf
                        <select name="name-dropdown" id="name-dropdown" class="unclickable">
                            @if($order->collect_op == "delivery")
                                <option value="select" disabled selected id="select">Select Status</option>
                                <option value="Seller({{$order->display_name}}) confirmed the order." id="confirm-order">Confirm Order</option>
                                <option value="Seller({{$order->display_name}}) is preparing your order." id="preparing">Preparing Order</option>
                                <option value="Order is ready to be shipped" id="ready">Ready to ship</option>
                                <option value="Order is currently is now on delivery" id="delivered">Order in delivery</option>
                                <option value="Seller({{$order->display_name}}) confirmed order is delivered." id="delivered">Order is received</option>
                                <option value="Rate shopper experience" id="rate-shopper">Rate Shopper</option>

                            @elseif($order->collect->op == "pickup")
                                <option value="select" disabled selected id="select">Select Status</option>
                                <option value="Seller({{$order->display_name}}) confirmed the order." id="confirm-order">Confirm Order</option>
                                <option value="Seller({{$order->display_name}}) is preparing your order." id="preparing">Preparing Order</option>
                                <option value="Order is ready for pickup." id="ready">Ready for Meetup with Shopper</option>
                                <option value="Order is delivered." id="delivered">Order has been Collected</option>
                                <option value="Rate shopper experience." id="rate-shopper">Rate Shopper</option>

                            @elseif($order->collect->op == "meetup")
                                <option value="select" disabled selected id="select">Select Status</option>
                                <option value="Seller({{$order->display_name}}) confirmed the order." id="confirm-order">Confirm Order</option>
                                <option value="Seller({{$order->display_name}}) is preparing your order" id="preparing">Preparing Order</option>
                                <option value="Seller({{$order->display_name}}) is now ready for meetup" id="ready">Ready for Meetup with Shopper</option>
                                <option value="Order is delivered." id="delivered">Order has been Collected</option>
                                <option value="Rate shopper experience" id="rate-shopper">Rate Shopper</option>
                            @endif

                        </select>
                        <button class="submit">
                            <i class="ri-send-plane-line"></i>
                            <i class="ri-send-plane-fill"></i>
                        </button>
                    </form>
                    </div>
                </div>
                <button class="order-id">Order ID: <span id="order-id">{{$order -> order_id}}</span></button>

                <div class="status">
                    @foreach($status as $s)
                        <p class="current-status"><span class="date">{{$s -> date_time->format('Y-m-d')}}</span><span class="time">{{($s->date_time)->format('h:i A') }}</span><span class="details">{{$s -> status}}</span></p>
                    @endforeach

                    @if($rate && $rate->status == "Rate shopper experience")
                         <a href="/seller/rate/shopper/{{$shopper->shopper_id}}/{{$shopper->order_id}}"><button class="order-id">Rate</button></a>
                    @endif
                </div> 
            </div>
        </body>
    </html>
    
