<link rel="stylesheet" href="../css/navbar_admin.css" />
<script src="/js/navbar_public.js"></script>
<script src="/js/navbar_shopper_seller.js"></script>
<header>
    <div class="brand">
      <img src="../img/halukay-logo.png" alt="halukay-logo" id="logo">
      <a href="#" id="brand">halukay.shop</a>
    </div>
    <div class="navbar">
      <a href="home.html" class="active" id="home">Home</a>
              <a href="about.html" id="about">About</a>
              <a href="shop.html" id="shop">Shop</a>
              <a href="login.html" id="dash-nav">Dashboard</a>
              <a href="login.html" id="logout-nav">Logout</a>
             
    </div>
    @include('layouts/search')    
    <div class="dashboard"><a href="#" id="dashboard"><i class="ri-dashboard-fill"></i></a>
      <a href="#" id="logout"><i class="ri-logout-box-r-line"></i></a></div>

    <!-- <div class="login"><a href="#" id="login">Login</a></div> -->
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>