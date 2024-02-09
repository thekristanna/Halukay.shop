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
        <link rel="stylesheet" href="/css/checkout.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="../img/halukay-favicon.png"
            type="image/x-icon"
        />
        {{-- JS --}}
        <script src="/js/checkout.js"></script>
        <!-- Page Title -->
        <!-- <title>Halukay</title> -->
  
          
    </head>
    <body>
        <!-- checkout -->
        <div class="container">
            <div class="bag-buttons">
                <a href="#">Bag</a>
                <a href="#">Previous Orders</a>
                <a href="#">Current Orders</a>
            </div>
            {{-- Removed Order ID    --}}
            <p class="orders-header">
                <i class="ri-wallet-3-fill"></i>Order Summary
            </p>
            <div class="orders">
                <div class="top">
                    <p class="order-id">
                        <span id="order-id"></span>
                    </p>
                    <div class="top-details">
                        <button class="order">Place Order</button>
                    </div>
                </div>
                <div class="bottom-details">
                    <a href="#" class="seller-username"
                        ><p>
                            Seller:<span class="username">{{$name -> display_name}}</span>
                        </p></a
                    >
                    <p>TOTAL: ₱<span class="price co_total"></span></p>
                </div>
                <div class="collection">
                  <p>Collection Options:</p>
                  <div class="delivery">
                      <input type="radio" id="delivery" name="collection" value="delivery" />
                      <label for="delivery">Delivery</label>
                  </div>
                  <div class="pickup">
                      <input type="radio" id="pickup" name="collection" value="pickup" />
                      <label for="pickup">Pick Up</label>
                  </div>
                  <div class="meetup">
                      <input type="radio" id="meetup" name="collection" value="meetup" />
                      <label for="meetup">Meet Up</label>
                  </div>
                </div>       
                <div class="payment">
                  <p>Payment Options:</p>
                  <div class="cash">
                      <input type="radio" id="cash" name="payment" value="cash" />
                      <label for="cash">Cash</label>
                  </div>
                  <div class="gcash">
                      <input type="radio" id="gcash" name="payment" value="gcash" />
                      <label for="gcash">Gcash</label>
                  </div>
                </div>    
                      {{-- Product --}}
                @foreach ($checkout as $c)
                <div class="product">
                    <div class="image">
                        <a href="#" class="product-page"
                            ><img src="/img/products/{{$c -> product_photo}}" alt="{{$c -> name}}" />
                        </a>
                    </div>
                    <div class="item-name">
                        <p>Item</p>
                        <p class="product-name">{{$c -> name}}</p>
                    </div>
                    <div class="item-price">
                        <p>Price</p>
                        <p class="product-price co-price">{{$c -> price}}</p>
                    </div>
                </div>
                @endforeach

                {{-- <div class="product">
                  <div class="image">
                      <a href="#" class="product-page"
                          ><img
                              src="../img/products/Uniqlo Trousers.png"
                              alt="product-name"
                          />
                      </a>
                  </div>
                  <div class="item-name">
                      <p>Item</p>
                      <p class="product-name">Salvatore Ferragamo Dress</p>
                  </div>
                  <div class="item-price">
                      <p>Price</p>
                      <p class="product-price">300</p>
                  </div>
              </div> --}}
            </div>
        </div>
    </body>
</html>
