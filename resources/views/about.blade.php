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
    <link rel="stylesheet" href="/css/about.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <title>About | Halukay</title>
  <body>
    <!-- header -->
    @if (Session::get('role') == 'seller')
        @include('layouts/seller/navbar_home_seller')
    @elseif (Session::get('role') == 'shopper')
        @include('layouts/shopper/navbar_home_shopper')
    @else
        @include('layouts/navbar_about_public')
    @endif
     <!-- about -->
     <div class="container">
        <h1>About Us</h1>
        <div class="about">
            <p>
                Welcome to <span id="halukay">halukay</span> - Where Preloved Becomes Reloved</p>
            <p>
                At Halukay, our passion is to connect people through sustainable shopping. We've created a unique marketplace for savvy shoppers looking for affordable treasures and for sellers who wish to give their preloved items a new life.</p>
            <p>
                We're more than just a website; we're a community committed to the joy of rediscovering and rehoming. From chic vintage fashion to timeless home goods, Halukay offers a variety of items that cater to every style and need.</p>
            <p>
                Join our mission at Halukay to make shopping a sustainable and delightful adventure. Because here, every item has a story waiting to be continued by you.</p>
        </div>
        <h1>Developers</h1>
        <div class="developers">
            <div class="kristanna">
                <img src="../img/developers/Kristanna.jpeg" id="kristanna">
                <p class="name">Kristanna Agnes</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/thekristanna" target="_blank"><i class="ri-github-fill"></i></a>
                    <a href="https://www.linkedin.com/in/thekristanna" target="_blank"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>
            <div class="dante">
                <img src="../img/developers/Dante.jpeg" id="dante">
                <p class="name">Dante Magbuhos</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/djmagbuhos" target="_blank"><i class="ri-github-fill"></i></a>
                    <a href="https://www.linkedin.com/in/dante-magbuhos-jr-a7baa12b0/" target="_blank"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>
            <div class="paul">
                <img src="../img/developers/Paul.jpeg" id="paul">
                <p class="name">Paul Quiachon</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/Pquiachon"><i class="ri-github-fill" target="_blank"></i></a>
                    <a href="https://www.linkedin.com/in/john-paul-quiachon-b4727a26a/" target="_blank"><i class="ri-linkedin-box-fill"></i></a>
                </div>
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