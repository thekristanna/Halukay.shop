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
        <link rel="stylesheet" href="/css/shop_by_seller.css" />
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
        <!-- shop by seller -->
        <div class="container">
            <p class="orders-header"><i class="ri-store-3-fill"></i><a href="" id="username">{{$seller -> display_name}}</a>|<span>{{$seller -> address_citytown}}</span></p>
            <div class="shop">

                @foreach ($product as $p)
                <!-- product  -->
                <div class="product">
                    <div class="image">
                        <a href="/shop/{{$p -> product_id}}">
                        <img
                            src="/img/products/{{$p -> product_photo}}"
                            alt="product-id"
                        />
                        </a>
                    </div>
                    <div class="info">
                        <div class="price-buttons">
                            <div class="price"><p id="price">₱ {{$p -> price}}</p></div>
                            <div class="icons">
                            <span hidden>{{$found = false}}</span>
                            @if (Session::get('role') == 'shopper')
                                @foreach ($liked as $l)
                                    @if ($p -> product_id == $l -> product_id)
                                        <span hidden id="shop_like_id">{{$found = $l -> like_id}}</span>
                                    @endif
                                @endforeach
                                @if ($found)
                                {{-- LIKE PRODUCT --}}
                                    <form action="/shopper/shop/seller/unlike/{{$found}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="icon-btn">
                                            <i class="ri-heart-3-fill heart-icon-fill" id="shop_like"></i>
                                        </button>
                                    </form>
                                    <span hidden>{{$found = false}}</span>
                                @else
                                    <form action="/shopper/shop/seller/{{$p -> seller_id}}/like/{{$p -> product_id}}" method="POST">
                                    @csrf
                                    <button class="icon-btn">
                                        <i class="ri-heart-3-line heart-icon"></i>
                                        <i
                                            class="ri-heart-3-fill heart-icon-fill"
                                        ></i>
                                    </button>
                                    </form>
                                @endif
                            @else
                                <form action="/redir_login/{{$p -> product_id}}" method="GET">
                                    <button class="icon-btn">
                                        <i class="ri-heart-3-line heart-icon"></i>
                                        <i
                                            class="ri-heart-3-fill heart-icon-fill"
                                        ></i>
                                    </button>
                                </form>
                            @endif
                                {{-- ADD TO BAG --}}
                                @if (Session::get('role') == 'shopper')
                                <form action="/shop/seller/{{$p -> product_id}}/{{$p -> seller_id}}" method="POST">
                                    @csrf
                                    <button class="icon-btn" type="submit">
                                        <i class="ri-shopping-bag-line shopping-icon"></i>
                                        <i class="ri-shopping-bag-fill shopping-icon-fill"></i>
                                    </button>
                                </form>
                                @else
                                <form action="/redir_login/{{$p-> product_id}}" method="GET">
                                <button class="icon-btn">
                                    <i class="ri-shopping-bag-line shopping-icon"></i>
                                    <i class="ri-shopping-bag-fill shopping-icon-fill"></i>
                                </button>
                            </form>
                            @endif

                            </div>
                        </div>
                        <div class="name">
                            <a href="/shop/{{$p -> product_id}}"><p>{{$p -> name}}</p></a>
                        </div>
                        <div class="nego">
                            <p class="nego-status">
                                {{$p -> nego_status}}
                                <button class="icon-btn nego-icon-btn">
                                    <i class="ri-discuss-line"></i>
                                    <i
                                        class="ri-discuss-fill"
                                        id="filled-message"
                                    ></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- end of product --}}
            </div>
        </div>
    </body>
</html>