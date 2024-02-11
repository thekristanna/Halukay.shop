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
        <link rel="stylesheet" href="../css/shop.css" />
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
        <!-- header -->
        @if (Session::get('role') == 'seller')
        @include('layouts/navbar_shop_seller')
    @elseif (Session::get('role') == 'shopper')
        @include('layouts/navbar_shop_shopper')
    @else
        @include('layouts/navbar_shop_public')
    @endif  

        <!-- shop -->
        <div class="container">
            <div class="filter-buttons">
                <form action="/shop" method="GET">
                <div class="left">
                    <button name="category" value="All">All</button>
                    <button name="category" value="Clothes">Clothes</button>
                    <button name="category" value="Shoes">Shoes</button>
                    <button name="category" value="Bags">Bags</button>
                </div>
            </form>
            <form action="/shop" method="GET">
                <div class="right">
                    <button type="submit" name="sortOptions" value="highToLow">Price: High to Low</button>
                    <button type="submit" name="sortOptions" value="lowToHigh">Price: Low to High</button>
                    <button type="submit" name="sortOptions" value="aToZ">A to Z</button>
                    <button type="submit" name="sortOptions" value="zToA">Z to A</button>
                </div>
            </form>
            </div>
            <div class="shop">
                <!-- product  -->
                @foreach ($products as $p)
                <a href="/shop/{{$p -> product_id}}" id="product_name">
                <div class="product">
                    <div class="image">
                        <img
                            src="../img/products/{{$p -> product_photo}}"
                            alt="{{$p -> name}}"
                        />
                    </div>
                    <div class="info">
                        <div class="price-buttons">
                            <div class="price"><p id="price">₱ {{ $p -> price }}</p></div>
                            <div class="icons">

                                {{-- HEART ICON FUNCTION --}}

                                <span hidden>{{$found = false}}</span>
                                @if (Session::get('role') == 'shopper')
                                    @foreach ($liked as $l)
                                        @if ($p -> product_id == $l -> product_id)
                                        <span id="hide_like_id" hidden>{{$found = $l -> like_id}}</span>
                                        @endif
                                    @endforeach

                                    @if ($found)
                                     <form action="/shopper/products/unlike/{{$found}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="icon-btn" type="submit">
                                            <i class="ri-heart-3-fill heart-icon-fill" id="shop_liked"></i>
                                        </button>
                                    </form>
                                    <span hidden>{{$found = false}}</span>

                                @else
                                     <form action="/shopper/products/likes/{{$p -> product_id}}/{{$p -> seller_id}}" method="POST">
                                         @csrf
                                             <button class="icon-btn" type="submit">
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

                               

                                {{-- SHOPPING ICON FUNCTION --}}

                                @if (Session::get('role') == 'shopper')
                                <form action="/shopper/my_bag/{{$p -> product_id}}/{{$p -> seller_id}}" method="POST">
                                             @csrf
                                              <button class="icon-btn" type="submit">
                                                <i class="ri-shopping-bag-line shopping-icon"></i>
                                                    <i class="ri-shopping-bag-fill shopping-icon-fill"></i>
                                                </button>
                                            </form>
                                            @else
                                            <form action="/redir_login/{{$p -> product_id}}" method="GET">
                                  <button class="icon-btn">
                                      <i
                                          class="ri-shopping-bag-line shopping-icon"
                                      ></i>
                                      <i
                                          class="ri-shopping-bag-fill shopping-icon-fill"
                                      ></i>
                                  </button>
                                </form>
                                @endif

                            </div>
                        </div>
                        <div class="name-product">
                            <p>{{$p -> name}}</p>
                        </div>
                        <div class="nego">
                            <p class="nego-status">
                                {{$p -> nego_status}}
                                @if (Session::get('role') == 'shopper')
                                            <form action="/redir_shopper_bag/{{$p -> product_id}}" method="GET">
                                              <button class="icon-btn nego-icon-btn">
                                                <i class="ri-discuss-line"></i>
                                                <i
                                                    class="ri-discuss-fill"
                                                    id="filled-message"
                                                ></i>
                                            </button>
                                            </form>
                                            @else
                                            <form action="/redir_login/{{$p -> product_id}}" method="GET">
                                  <button class="icon-btn nego-icon-btn">
                                      <i class="ri-discuss-line"></i>
                                      <i
                                          class="ri-discuss-fill"
                                          id="filled-message"
                                      ></i>
                                  </button>
                                </form>
                                @endif
                        </div>
                    </div>
                </div>
               </a>
             @endforeach
             
            </div>
          
        </div>
        {{$products -> links('pagination::default')}}
    <!-- footer -->
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