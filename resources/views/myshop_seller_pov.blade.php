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
        <link rel="stylesheet" href="/css/seller_pov_shop.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="/img/halukay-favicon.png"
            type="image/x-icon"
        />
        <script src="/js/deleteproduct.js"></script>
        <!-- Page Title -->
        <!-- <title>Halukay</title> -->
    </head>
    <body>
        <!-- seller shop pov -->
        <div class="container">
            <p class="orders-header"><i class="ri-store-3-fill"></i>Your Shop | <span id="username">@daibenangelo</span></p>
            <div class="shop">
                <!-- product  -->
                @foreach ($products as $p)
                <div class="product">
                    <div class="image">
                        <img
                            src="/img/products/{{$p -> product_photo}}"
                            alt="{{$p -> name}}"
                        />
                    </div>
                    <div class="info">
                        <div class="price-buttons">
                            <div class="price"><p id="price">₱ {{$p -> price}}</p></div>
                            <div class="icons">
                                <a href="/seller/edit/product/{{$p -> product_id}}">
                                <button class="icon-btn">
                                    <i class="ri-file-edit-line"></i>
                                    <i class="ri-file-edit-fill"></i>
                                </button>
                                </a>
                                <form action="/seller/delete/product/{{$p -> product_id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button class="icon-btn delete_button" id="delete_button">
                                    <i class="ri-delete-bin-line"></i>
                                    <i class="ri-delete-bin-fill"></i>
                                </button>
                                </form>
                            </div>
                        </div>
                        <div class="name">
                            <p>{{$p -> name}}</p>
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
                <!-- product  -->
            </div>
        </div>
    </body>
</html>
