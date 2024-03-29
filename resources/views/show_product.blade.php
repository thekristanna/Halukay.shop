<!DOCTYPE html>
<html lang="en">
    <head>
        
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
        <link rel="stylesheet" href="/css/product.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="/img/halukay-favicon.png"
            type="image/x-icon"
        />
       
       
        <!-- Page Title -->
        <!-- <title>Halukay</title> -->
    </head>
    
    <body>
     <!-- header -->
     @if (Session::get('role') == 'seller')
     @include('layouts/navbar_shop_seller')
 @elseif (Session::get('role') == 'shopper')
     @include('layouts/navbar_shop_shopper')
 @else
     @include('layouts/navbar_shop_public')
 @endif  
       
       <!-- product -->
       <div class="container ">  
        
        
            <!-- button -->
            <button class="previous-button">
                <i class="ri ri-arrow-left-circle-line"></i> 
                <i class="ri ri-arrow-left-circle-fill"></i> 
            </button>
            <!-- image -->
            <div class="product-image">
                <img src="/img/products/{{ $product->product_photo }}" id="product-image">
                <div class="seller-details">
                    <a href="/shop/seller/{{$info -> seller_id}}"><i class="ri-user-fill"></i>{{ $info->display_name }}</a>
                    <p><i class="ri-map-pin-fill"></i>{{ $info->address_citytown }}</p>
                </div>
            </div>
            <!-- details -->
            <div class="product-details">
                <!-- part 1 -->
                <div class="upper-details">
                    <div class="price-and-icons">
                        <p class="price">₱ {{ $product -> price }}</p>

                        <div class="icons">

                            {{-- LIKE --}}
                            <span hidden>{{$found = false}}</span>
                            @if (Session::get('role') == 'shopper')
                                @foreach($like as $l)
                                    @if ($product -> product_id == $l -> product_id)
                                    <span hidden id="like_id_hide">{{$found = $l -> like_id}}</span>
                                    @endif
                                @endforeach 
                                @if($found)
                                <form action="/shopper/product/unlike/{{$found}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="icon-btn" type="submit">
                                    <i class="ri-heart-3-fill heart-icon-fill" id="liked_heart"></i>
                                    </button>
                                </form>
                                <span hidden>{{$found = false}}</span>
                                @else
                            {{-- ADD LIKE --}}
                                <form action="/shopper/product/{{$product -> product_id}}/like/{{$product -> seller_id}}" method="POST">
                                    @csrf
                                    <button class="icon-btn" type="submit">
                                        <i class="ri-heart-3-line heart-icon"></i>
                                    <i class="ri-heart-3-fill heart-icon-fill"></i>
                                    </button>
                                </form>
                                @endif

                            @else
                            <form action="/redir_login/{{$product -> product_id}}" method="GET">
                            <button class="icon-btn" type="submit">
                                  <i class="ri-heart-3-line heart-icon"></i>
                                 <i class="ri-heart-3-fill heart-icon-fill"></i>
                              </button>
                           </form>
                           @endif

                           {{-- ADD TO BAG --}}
                           @if (Session::get('role') == 'shopper')
                            <form action="/shopper/my_bag/{{$product -> product_id}}/{{$info -> seller_id}}" method="POST">
                                @csrf
                                <button class="icon-btn" type="submit">
                                    <i class="ri-shopping-bag-line shopping-icon"></i>
                                    <i class="ri-shopping-bag-fill shopping-icon-fill"></i>
                                </button>
                            </form>
                            @else
                            <form action="/redir_login/{{$product -> product_id}}" method="GET">
                            <button class="icon-btn">
                                <i class="ri-shopping-bag-line shopping-icon"></i>
                                <i class="ri-shopping-bag-fill shopping-icon-fill"></i>
                            </button>
                        </form>
                        @endif
                        </div>
                        @if (Session::get('role') == 'shopper')
                        <form action="/redir_shopper_checkout/{{$product -> product_id}}" method="GET">
                            <button class="checkout">
                                <a>Checkout Now</a>
                            </button>
                        </form>
                        @else
                            <form action="/redir_login/{{$product -> product_id}}" method="GET">
                            <button class="checkout">
                                <a>Checkout Now</a>
                            </button>

                        </form>
                        @endif
                    </div>
                    <p class="product-name">{{$product -> name}}</p>
                    <p class="nego-status">{{$product -> nego_status}}<button class="icon-btn nego-icon-btn">
                                    <i class="ri-discuss-line"></i> 
                                    <i class="ri-discuss-fill" id="filled-message"></i>
                                </button>
                        <a href="/login" class="heart-icon">
                        @if (Session::get('role') == 'shopper')
                            <form action="/redir_shopper_checkout/{{$product -> product_id}}" method="GET">
                        @else
                            <form action="/redir_login/{{$product -> product_id}}" method="GET">
                                
                            </form>
                            @endif
                        </a>
                    </p>
                </div>
                <hr/>
                <!-- part 2 -->
                <div class="lower-details">
                    <h1 class="description">Description:</h1>
                    <p><span>Condition</span>{{$product -> product_condition}}</p><br/>
                    <p><span>Brand</span>{{$product -> brand}}</p><br/>
                    <p><span>Material</span>{{$product -> material}}</p><br/>
                    <p><span>Color</span>{{$product -> color}}</p><br/>
                    <p><span>Size & Fit</span>{{$product -> size_fit}}</p><br/>
                    <p><span>Note</span>{{$product -> notes}}</p><br/>
                </div>
            </div>
            <!-- button -->
            <a href="#"><button class="next-button">
                <i class="ri ri-arrow-right-circle-line"></i> 
                <i class="ri ri-arrow-right-circle-fill"></i> 
            </button></a>
       </div>

       {{-- @include('layouts/footer') --}}
    </body>
</html>
