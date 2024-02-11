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

                <form action="/shopper/order/status/{{$order -> order_id}}" method="POST">
                    @csrf
                    <div class="send-status">
                        <select name="name-dropdown" id="status-dropdown">
                            <option value="select" disabled selected id="select">Select Status</option>
                            <option value="Order Received." id="order-received">Order Received</option>
                            <option value="Rate seller experience" id="rate-seller">Rate Seller</option>
                        </select>
                    <button class="submit">
                        <i class="ri-send-plane-line"></i>
                        <i class="ri-send-plane-fill"></i>
                    </button>
                    </div>
                </form>


            </div>
            <button class="order-id">Order ID: <span id="order-id">{{$order -> order_id}}</span></button>

            <div class="status">
                @foreach($status as $s)
                    <p class="current-status"><span class="date">{{$s -> date_time->format('Y-m-d')}}</span><span class="time">{{($s->date_time)->format('h:i A') }}</span><span class="details">{{$s -> status}}</span></p>
                @endforeach

                @if($rate && $rate->status == "Rate seller experience")
                         <a href="/shopper/rate/seller/{{$seller->seller_id}}/{{$seller->order_id}}"><button class="order-id">Rate Seller</button></a>
                @endif
            </div>


        </div>
 </body>
 </html>