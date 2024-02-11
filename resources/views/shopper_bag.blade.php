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
    <link rel="stylesheet" href="/css/your_bag.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <!-- <title>Halukay</title> -->
  </head>
  <body>
      <!-- header -->
      @if (Session::get('role') == 'seller')
      @include('layouts/navbar_seller')
  @elseif (Session::get('role') == 'shopper')
      @include('layouts/navbar_shopper')
  @endif 
    <!-- your bag -->
    <div class="container">
        <div class="bag-buttons">
            <a href="#" id="active">Bag</a>
            <a href="#">Previous Orders</a>
            <a href="#">Current Orders</a>
        </div>
        <p class="orders-header"><i class="ri-shopping-bag-fill"></i>Your Bag</p>
        @foreach($seller as $s)
        <div class="orders">
         
            <div class="top">
                {{-- Removed Order ID --}}
                <p class="order-id"><span id="order-id"></span></p> 
            
                <div class="top-details">
                <a href="/shopper/checkout/{{$s -> seller_id}}"><button class="checkout">Checkout</button></a>

                </div>
            </div>
           
            <div class="bottom-details">
           

                <a href="#" class="seller-username"><p>Seller:<span class="username">{{$s -> display_name}}</span></p></a>
                <p>TOTAL: ₱<span class="price"></span></p>
            </div>
            @foreach($product as $p)
            @if($s -> seller_id == $p -> seller_id)
            
            <div class="product">
                <div class="image">
                    <a href="#" class="product-page"><img src="/img/products/{{$p -> product_photo}}" alt="{{$p -> name}}"> </a>
               </div>
                <div class="item-name">
                    <p>Item</p>
                    <p class="product-name">{{$p -> name}}</p>
                </div>
                <div class="item-price">
                    <p>Price</p>
                    <p class="product-price">{{$p -> price}}</p>
                </div>
                <form action="/shopper/my_bag/{{$p -> product_id}}" method="POST">
                  @csrf
                  @method ('DELETE')
                <button class="delete" type="submit">
                    <i class="ri-delete-bin-line"></i>
                    <i class="ri-delete-bin-fill"></i>
                </button>
              </form>
            </div>
            @endif
         @endforeach
        </div>
        @endforeach
    </div>
    
  </body>
</html>