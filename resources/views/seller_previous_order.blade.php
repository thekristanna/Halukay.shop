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
    <link rel="stylesheet" href="/css/seller_previous_orders.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
<title>Previous Orders | Halukay</title>
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
    <!-- previous orders -->
    <div class="container">
        <div class="line">
            <p class="orders-header"><i class="ri-shopping-bag-fill"></i>Previous</p>
            <div class="bag-buttons">
                <a href="/shopper/my_bag">Bag</a>
                <a href="/seller/previous_orders" id="active">Previous Orders</a>
                <a href="/seller/current_orders">Current Orders</a>
            </div>
          </div>

        {{-- For each seller --}}
        @foreach ($orders as $o)
            <div class="orders">
                <div class="top">
                    <p class="order-id">Order ID:<span id="order-id">{{$o->order_id}}</span></p>
                    <div class="top-details">
                        <button class="collection-status">View Status Details</button>
                        <p class="order-status">{{$o->status_shopper}}</p>
                    </div>
                </div>
                <div class="bottom-details">
                    <p>Seller:<span class="username">{{$o->display_name}}</span></p>
                    <p>TOTAL: ₱<span class="price order_total_{{$o->order_id}}">{{$o->totalPrice}}</span></p>
                </div>

                {{-- For each product associated with the current order --}}
                @foreach ($o->products as $product)
                    <div class="product">
                        <div class="image">
                            <img src="/img/products/{{$product->product_photo}}" alt="{{$product->name}}">
                        </div>
                        <div class="item-name">
                            <p>Item</p>
                            <p class="product-name">{{$product->name}}</p>
                        </div>
                        <div class="item-price">
                            <p>Price</p>
                            <p class="product-price order_price_{{$product->order_id}}">{{$product->price}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        
    </div>
  </body>
</html>
