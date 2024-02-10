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
            <form action="/shopper/add/order/{{$name -> user_id}}" method="POST">
            @csrf
            <div class="orders">
                <div class="top">
                    <p class="order-id">
                        <span id="order-id"></span>
                    </p>
                    <div class="top-details">
                        
                            <button class="order" type="submit">Place Order</button>
                        
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

                <p id="delivery-details">Delivery Details</p>
                <div class="address">
                        <span id="delivery-add">Address:</span>
                        <span id="add-street">{{$name -> address_street}}</span>
                        <span class="comma-space">,</span>
                        <span id="add-barangay">{{$name -> address_barangay}}</span>
                        <span class="comma-space">,</span>
                        <span id="add-city">{{$name -> address_citytown}}</span>
                        <span class="comma-space">,</span>
                        <span id="add-province">{{$name -> province}}</span>
                  </div>
                  <div class="name">
                        <span id="name">Name:</span>
                        <span id="user-name">{{$name -> first_name}} {{$name -> last_name}}</span>
                  </div>
                  <div class="contact">
                        <span id="contact">Contact:</span>
                        <span id="phone">{{$name -> phone_number}}</span>
                  </div>

                <div class="collection">
                  <p>Collection Options:</p>
                  <div class="delivery">
                      <input type="radio" id="delivery" name="collect_op" value="delivery" />
                      <label for="delivery">Delivery</label>
                  </div>
                  <div class="pickup">
                      <input type="radio" id="pickup" name="collect_op" value="pickup" />
                      <label for="pickup">Pick Up</label>
                  </div>
                  <div class="meetup">
                      <input type="radio" id="meetup" name="collect_op" value="meetup" />
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
                        <p class="product-price co-price" name="price">{{$c -> price}}</p>
                    </div>
                </div>
                @endforeach
                {{-- End of Product --}}
            </div>
            </form>
        </div>

        {{-- Footer --}}
        <link rel="stylesheet" href="../css/footer.css" />
        <footer>
            <div class="footer-brand">
                <img
                    src="../img/halukay-favicon.png"
                    alt="halukay-logo"
                    id="footer-logo"
                />
                <a href="#" id="footer-brand">halukay.shop</a>
            </div>
            <div class="footer-proper">
                <div class="subscription">
                    <p>
                        Stay in the loop and sign up for halukay<br />recommendations
                        from featured items
                    </p>
                    <input type="text" placeholder="Enter Email" id="email" /><i class="ri-arrow-right-line"></i>
                </div>
                <div class="wrapper">
                    <div class="company">
                        <p>Halukay</p>
                        <a href="home.html" id="home">Home</a>
                        <a href="about.html" id="about">About</a>
                        <a href="shop.html" id="shop">Shop</a>
                        <a href="contact.html" id="contact">Contact</a>

                    </div>
                    <div class="support">
                        <p>Support</p>
                        <a href="../pdfs/community_guidelines.pdf" download="community_guidelines.pdf" target="_blank" id="community">Community Guidelines</a>
                        <a href="../pdfs/terms_conditions.pdf" download="terms_conditions.pdf" target="_blank" id="terms">Terms & Conditions</a>
                        <a href="../pdfs/privacy_policy.pdf" download="privacy_policy.pdf" target="_blank" id="privacy">Privacy Policy</a>
                        <a href="../pdfs/faqs.pdf" download="faqs.pdf" target="_blank" id="faqs">FAQs</a>
                    </div>
                    <div class="socials">
                        <p>Socials</p>
                        <a href="https://www.facebook.com/" target="_blank" id="facebook">Facebook</a>
                        <a href="https://www.instagram.com/" target="_blank" id="instagram">Instagram</a>
                        <a href="https://www.tiktok.com/" target="_blank" id="tiktok">Tiktok</a>
                        <a href="https://www.youtube.com/" target="_blank" id="youtube">Youtube</a>
                    </div>
                </div>
            </div>    
        </footer>
        
    </body>
</html>
