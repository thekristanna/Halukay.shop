<link rel="stylesheet" href="../css/navbar_login.css" />
<script src="/js/navbar_public.js"></script>
<header>
  <div class="brand">
    <img src="../img/halukay-logo.png" alt="halukay-logo" id="logo">
    <a href="#" id="brand">halukay.shop</a>
  </div>
  <div class="navbar">
    <a href="/" id="home">Home</a>
            <a href="/about" id="about">About</a>
            <a href="/shop" id="shop">Shop</a>
            <a href="/signup" id="login-nav">Sign Up</a>
  </div>
  @include('layouts/search')     
  <div class="login"><a href="/signup" id="signup-navbar">Sign Up</a></div>
  <div class="bx bx-menu" id="menu-icon"></div>
</header>