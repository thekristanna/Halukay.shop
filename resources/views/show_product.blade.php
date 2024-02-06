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
        <link rel="stylesheet" href="../css/product.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="../img/halukay-favicon.png"
            type="image/x-icon"
        />
        <!-- Page Title -->
        <!-- <title>Halukay</title> -->
    </head>
    
    <body>
        {{-- <div>
        @include ('layouts/navbar_shop_public')
        </div> --}}
        {{-- still needs fixing. separate style for navbar is contradicting other styles in the page --}}
        
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
                    <a href="#"><i class="ri-user-fill"></i>{{ $info -> email_address }}</a>
                    <p><i class="ri-map-pin-fill"></i>{{ $info -> address_citytown }}</p>
                </div>
            </div>
            <!-- details -->
            <div class="product-details">
                <!-- part 1 -->
                <div class="upper-details">
                    <div class="price-and-icons">
                        <p class="price">₱ {{ $product -> price }}</p>
                        <div class="icons">
                            <form action="/redir_login/{{$product -> product_id}}" method="GET">
                            <button class="icon-btn" type="submit">
                                  <i class="ri-heart-3-line heart-icon"></i>
                                 <i class="ri-heart-3-fill heart-icon-fill"></i>
                           
                              </button>
                           </form>
                           <form action="/redir_login/{{$product -> product_id}}" method="GET">
                            <button class="icon-btn">
                                <i class="ri-shopping-bag-line shopping-icon"></i>
                                <i class="ri-shopping-bag-fill shopping-icon-fill"></i>
                            </button>
                        </form>
                        </div>
                        <form action="/redir_login/{{$product -> product_id}}" method="GET" >
                            <button>
                                <a class="checkout" >Checkout Now</a>
                            </button>
                        </form>
                    </div>
                    <p class="product-name">{{$product -> name}}</p>
                    <p class="nego-status">{{$product -> nego_status}}
                        <a href="/login" class="heart-icon">
                            <form action="/redir_login/{{$product -> product_id}}" method="GET" >
                        <button class="icon-btn nego-icon-btn">
                            <i class="ri-discuss-line"></i> 
                            <i class="ri-discuss-fill" id="filled-message"></i>
                        </button>
                            </form>
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
            <button class="next-button">
                <i class="ri ri-arrow-right-circle-line"></i> 
                <i class="ri ri-arrow-right-circle-fill"></i> 
            </button>
       </div>

       {{-- @include('layouts/footer') --}}
    </body>
</html>
