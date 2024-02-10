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
    <link rel="stylesheet" href="../css/home.css" />
    <!-- Favicon -->
    <link rel="icon" href="../img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <title>Halukay</title> 
  <body>
    <!-- header -->
    @if (Session::get('role') == 'seller')
        @include('layouts/seller/navbar_home_seller')
    @elseif (Session::get('role') == 'shopper')
        @include('layouts/shopper/navbar_home_shopper')
    @else
        @include('layouts/navbar_home_public')
    @endif  
    <!-- landing -->
    <div class="container">
        <h1 id="main-heading">
            “Rediscover Style: Where<br />Preloved Becomes Reloved.”
        </h1>

        <div class="landing">
            
            <!--photo1 -->
            <div class="landing-image">
                <img src="../img/landing_page/01.png" id="picture-1" />
            </div>
            <!-- photo23 -->
            <div class="double">
                <div class="landing-image">
                    <img src="../img/landing_page/02A.png" id="picture-2" />
                </div>
                <div class="landing-image">
                    <img src="../img/landing_page/02B.png" id="picture-3" />
                </div>
            </div>
            <!-- photo4 -->
            <div class="landing-image">
                <img src="../img/landing_page/03.png" id="picture-4" />
            </div>
            <!-- photo56 -->
            <div class="double">
                <div class="landing-image">
                    <img src="../img/landing_page/04A.png" id="picture-5" />
                </div>
                <div class="landing-image">
                    <img src="../img/landing_page/04B.png" id="picture-6" />
                </div>
            </div>
            <!-- photo7 -->
            <div class="landing-image">
                <img src="../img/landing_page/05.png" id="picture-7" />
            </div>

            <!-- words -->
            <div class="words">
                <p id="preloved">Preloved</p>
                <p id="fresh-finds">Fresh Finds</p>
                <a href="/shop" id="shop-now">Shop Now !</a>
            </div>
        </div>

        <!-- featured -->
        <div class="featured">
            <h1 id="featured">FEATURED</h1>
            <div class="shop">
                <!-- product -->
                <a href="/shop/17" class="product">
                    <div class="image">
                        <img
                            src="../img/products/Tommy Hilfiger Denim Jacket.png"
                            alt="product-id"
                        />
                    </div>
                    <div class="info">
                        <div class="price-buttons">
                            <div class="price"><p id="price">₱ 331</p></div>
                            <div class="icons">
                                <button class="icon-btn">
                                    <i
                                        class="ri-heart-3-line heart-icon"
                                    ></i>
                                    <i
                                        class="ri-heart-3-fill heart-icon-fill"
                                    ></i>
                                </button>
                                <button class="icon-btn">
                                    <i
                                        class="ri-shopping-bag-line shopping-icon"
                                    ></i>
                                    <i
                                        class="ri-shopping-bag-fill shopping-icon-fill"
                                    ></i>
                                </button>
                            </div>
                        </div>
                        <div class="name">
                            <p>Tommy Hilfiger Denim Jacket</p>
                        </div>
                        <div class="nego">
                            <p class="nego-status">
                                Non-negotiable
                                <button class="icon-btn nego-icon-btn non">
                                    <i class="ri-discuss-line"></i>
                                    <i
                                        class="ri-discuss-fill"
                                        id="filled-message"
                                    ></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- product -->
                <a href="/shop/19" class="product">
                    <div class="image">
                        <img
                            src="../img/products/American Eagle Outfitters Shorts.png"
                            alt="product-id"
                        />
                    </div>
                    <div class="info">
                        <div class="price-buttons">
                            <div class="price"><p id="price">₱ 478</p></div>
                            <div class="icons">
                                <button class="icon-btn">
                                    <i
                                        class="ri-heart-3-line heart-icon"
                                    ></i>
                                    <i
                                        class="ri-heart-3-fill heart-icon-fill"
                                    ></i>
                                </button>
                                <button class="icon-btn">
                                    <i
                                        class="ri-shopping-bag-line shopping-icon"
                                    ></i>
                                    <i
                                        class="ri-shopping-bag-fill shopping-icon-fill"
                                    ></i>
                                </button>
                            </div>
                        </div>
                        <div class="name">
                            <p>American Eagle Outfitters Shorts</p>
                        </div>
                        <div class="nego">
                            <p class="nego-status">
                                Non-negotiable
                                <button class="icon-btn nego-icon-btn non">
                                    <i class="ri-discuss-line"></i>
                                    <i
                                        class="ri-discuss-fill"
                                        id="filled-message"
                                    ></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- product -->
                <a href="/shop/39" class="product">
                    <div class="image">
                        <img
                            src="../img/products/Under Armour Sports Shoes.png"
                            alt="product-id"
                        />
                    </div>
                    <div class="info">
                        <div class="price-buttons">
                            <div class="price"><p id="price">₱ 849</p></div>
                            <div class="icons">
                                <button class="icon-btn">
                                    <i
                                        class="ri-heart-3-line heart-icon"
                                    ></i>
                                    <i
                                        class="ri-heart-3-fill heart-icon-fill"
                                    ></i>
                                </button>
                                <button class="icon-btn">
                                    <i
                                        class="ri-shopping-bag-line shopping-icon"
                                    ></i>
                                    <i
                                        class="ri-shopping-bag-fill shopping-icon-fill"
                                    ></i>
                                </button>
                            </div>
                        </div>
                        <div class="name">
                            <p>Under Armour Sports Shoes</p>
                        </div>
                        <div class="nego">
                            <p class="nego-status">
                                Negotiable
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
                </a>
                <!-- product -->
                <a href="/shop/54" class="product">
                    <div class="image">
                        <img
                            src="../img/products/Alexander Wang Bucket Bag.png"
                            alt="product-id"
                        />
                    </div>
                    <div class="info">
                        <div class="price-buttons">
                            <div class="price"><p id="price">₱ 367</p></div>
                            <div class="icons">
                                <button class="icon-btn">
                                    <i
                                        class="ri-heart-3-line heart-icon"
                                    ></i>
                                    <i
                                        class="ri-heart-3-fill heart-icon-fill"
                                    ></i>
                                </button>
                                <button class="icon-btn">
                                    <i
                                        class="ri-shopping-bag-line shopping-icon"
                                    ></i>
                                    <i
                                        class="ri-shopping-bag-fill shopping-icon-fill"
                                    ></i>
                                </button>
                            </div>
                        </div>
                        <div class="name">
                            <p>Alexander Wang Bucket Bag</p>
                        </div>
                        <div class="nego">
                            <p class="nego-status">
                                Non-negotiable
                                <button class="icon-btn nego-icon-btn non">
                                    <i class="ri-discuss-line"></i>
                                    <i
                                        class="ri-discuss-fill"
                                        id="filled-message"
                                    ></i>
                                </button>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- shop or sell -->
        <div class="shopsell">
            <div class="register">
                <h1 id="shopsell">SHOP or SELL</h1>
                <a href="/signup" id="register-now">Register Now</a>
            </div>
            <div class="images">
                <div class="bags">
                    <img src="../img/covers/bags.webp" />
                    <p>#preloved<span>Bags</span></p>
                </div>
                <div class="clothes">
                    <img src="../img/covers/clothes.webp" />
                    <p>#preloved<span>Clothes</span></p>
                </div>
                <div class="shoes">
                    <img src="../img/covers/shoes.webp" />
                    <p>#preloved<span>Shoes</span></p>
                </div>
            </div>
        </div>
        <!-- faqs -->
        <div class="faqs">
            <p class="faqs-header three">Frequently Asked</p>
                <p class="faqs-header four">Questions</p>
            <div class="left">
                <div class="faq">
                    <p class="question">
                        How do I sign up and start selling my preloved
                        items?
                    </p>
                    <p class="answer">
                        To sell on Halukay, simply click the "Sign Up"
                        button, select 'Seller,' and complete your account
                        details. You can then list your items by providing
                        descriptions, conditions, prices, and photos. Each
                        listing is reviewed quickly to ensure it meets our
                        marketplace guidelines before being published.
                    </p>
                </div>
                <div class="faq">
                    <p class="question">
                        As a shopper, how do I purchase items on the
                        website?
                    </p>
                    <p class="answer">
                        To buy on Halukay, find an item you like, add it
                        to your cart, and proceed to checkout. You'll need
                        to sign up for an account if you haven't already,
                        then choose your payment method and provide shipping
                        info. After purchasing, you'll receive an order
                        confirmation and shipping updates to ensure a secure
                        transaction.
                    </p>
                </div>
                <div class="faq">
                    <p class="question">
                        As a shopper, how do I purchase items on the
                        website?
                    </p>
                    <p class="answer">
                        To buy on Halukay, find an item you like, add it
                        to your cart, and proceed to checkout. You'll need
                        to sign up for an account if you haven't already,
                        then choose your payment method and provide shipping
                        info. After purchasing, you'll receive an order
                        confirmation and shipping updates to ensure a secure
                        transaction.
                    </p>
                </div>
            </div>
            <div class="right">
                <p class="faqs-header one">Frequently Asked</p>
                <p class="faqs-header two">Questions</p>
                <p>
                    Got more questions? Feel free to contact us<br />for
                    more information
                </p>
                <a href="/contact" id="contact">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="footer-brand">
            <img
                src="../img/halukay-favicon.png"
                alt="halukay-logo"
                id="footer-logo"
            />
            <a href="/" id="footer-brand">halukay.shop</a>
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
                    <a href="/" id="home">Home</a>
                    <a href="/about" id="about">About</a>
                    <a href="/shop" id="shop">Shop</a>
                    <a href="/contact" id="contact">Contact</a>

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