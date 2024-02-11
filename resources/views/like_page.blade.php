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
    <link rel="stylesheet" href="/css/likes.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
  <title>Likes | Halukay</title>
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
        <p class="orders-header"><i class="ri-heart-3-fill"></i>Likes</p>
        
        @foreach ($seller as $s)
        <div class="orders">
            <div class="bottom-details">
                <a href="#" class="seller-username"><p>Seller:<span class="username">{{$s -> display_name}}</span>
            </div>

            {{-- foreach --}}
            @foreach ($product as $p)
            @if($s -> seller_id == $p -> seller_id)
            <div class="product">
                <div class="image">
                    <a href="#" class="product-page"><img src="/img/products/{{$p -> product_photo}}" alt="product-name"> </a>
               </div>
                <div class="item-name">
                    <p>Item</p>
                    <p class="product-name">{{$p -> name}}</p>
                </div>
                <div class="item-price">
                    <p>Price</p>
                    <p class="product-price">{{$p -> price}}</p>
                </div>
                <form action="/shopper/products/likes/delete/{{$p -> like_id}}" method="POST">
                    @csrf
                    @method('DELETE')
                <button class="delete" type=>
                    <i class="ri-delete-bin-line"></i>
                    <i class="ri-delete-bin-fill"></i>
                </button>
                </form>
                <form action="">
                <button class="icon-btn">
                    <i class="ri-shopping-bag-line shopping-icon"></i>
                    <i class="ri-shopping-bag-fill shopping-icon-fill" id="shop-bag"></i>
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
