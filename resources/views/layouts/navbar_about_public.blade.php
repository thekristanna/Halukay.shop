<link rel="stylesheet" href="../css/navbar_public.css" />
<script src="/js/navbar_public.js"></script>
<header>
  <div class="brand">
    <img src="../img/halukay-logo.png" alt="halukay-logo" id="logo">
    <a href="#" id="brand">halukay.shop</a>
  </div>
  <div class="navbar">
    <a href="/" id="home">Home</a>
            <a href="/about" class="active" id="about">About</a>
            <a href="/shop" id="shop">Shop</a>
            <a href="/login" id="login-nav">Login</a>
  </div>
  @include('layouts/search')     
  <div class="login"><a href="/login" id="login">Login</a></div>
  <div class="bx bx-menu" id="menu-icon"></div>
</header>