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

    <!-- your bag -->
    <div class="container">
        <div class="bag-buttons">
            <a href="#" id="active">Bag</a>
            <a href="#">Previous Orders</a>
            <a href="#">Current Orders</a>
        </div>
        <p class="orders-header"><i class="ri-shopping-bag-fill"></i>Your Bag</p>
        <div class="orders">
          @if($info)
          
            <div class="top">
             
                <p class="order-id">Order ID:<span id="order-id">1</span></p>
            
                <div class="top-details">
                <button class="checkout">Checkout</button>

                </div>
            </div>
            @foreach($info as $i)
            <div class="bottom-details">
           

                <a href="#" class="seller-username"><p>Seller:<span class="username">{{$i -> email_address}}</span></p></a>
                <p>TOTAL: ₱<span class="price">{{$i -> price}}</span></p>
            </div>
            <div class="product">
                <div class="image">
                    <a href="#" class="product-page"><img src="/img/products/{{$i -> product_photo}}" alt="{{$i -> name}}"> </a>
               </div>
                <div class="item-name">
                    <p>Item</p>
                    <p class="product-name">{{$i -> name}}</p>
                </div>
                <div class="item-price">
                    <p>Price</p>
                    <p class="product-price">{{$i -> price}}</p>
                </div>
                <button class="delete">
                    <i class="ri-delete-bin-line"></i>
                    <i class="ri-delete-bin-fill"></i>
                </button>
            </div>

         @endforeach
         @else
            <h1>NONE</h1>
         @endif
            
        </div>
        
    </div>
    
  </body>
</html>