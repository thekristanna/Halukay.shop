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
        <link rel="stylesheet" href="/css/shopper_collection_status.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="/img/halukay-favicon.png"
            type="image/x-icon"
        />
        <!-- Page Title -->
        <title>Status | Halukay</title>
    </head>
    <body>
            <!-- header -->
    <header>
        <div class="brand">
          <img src="/img/halukay-logo.png" alt="halukay-logo" id="logo">
          <a href="#" id="brand">halukay.shop</a>
        </div>
        <div class="navbar">
          <a href="home.html" class="active" id="home">Home</a>
          <a href="#"id="about">About</a>
          <a href="#"id="shop">Shop</a>
          <a href="#" class="shopper-icons" id="bag-nav">Bag</a>
          <a href="#" class="shopper-icons" id="likes-nav">Likes</a>
          <a href="#" class="shopper-icons" id="messages-nav">Messages</a>
          <a href="#" class="shopper-icons" id="notifications-nav">Notifications</a>
          <a href="#" class="shopper-icons" id="account-nav">Account</a>
          <a href="#" class="shopper-icons" id="switch-nav">Switch to Seller</a>
          <a href="#" class="shopper-icons" id="logout-nav">Logout</a>
                 
        </div>
        <form class="search">
            <input type="text" id="search-input" placeholder="Search here"/>
            <button type="submit" id="search-button">
              <i class="ri-search-line" id="search-icon"></i>
            </button>
          </form> 
          <div class="profile">
            <div class="header-icons">
                <button>
                    <i class="ri-notification-3-fill"></i>
                </button>
                <button>
                    <i class="ri-discuss-fill"></i>
                </button>
  
                <button>
                    <i class="ri-heart-3-fill"></i>
                </button>
  
                <button>
                    <i class="ri-shopping-bag-fill"></i>
                </button>
            </div>
  
            <div class="profile-name-role">
                <!-- <p class="name">
                   @daibenangelo
                </p> -->
                <!-- <select name="name-dropdown" id="name-dropdown" class="unclickable">
                    <option value="username" disabled selected id="username-nav">@daibenangelo</option>
                    <option value="account">Account</option>
                    <option value="switch">Switch to Seller</option>
                    <option value="about.html">Logout</option>
                </select> -->
                <select name="name-dropdown" id="name-dropdown" class="unclickable">
                  <option value="username" disabled selected id="username-nav">@daibenangelo</option>
                  <option value="account" data-url="account.html">Account</option>
                  <option value="switch" disabled data-url="seller.html">Switch to Seller</option>
                  <option value="about" data-url="about.html">Logout</option>
              </select>
              
              <script>
                document.getElementById("name-dropdown").addEventListener("change", function() {
                    var selectedOption = this.options[this.selectedIndex];
                    var url = selectedOption.getAttribute("data-url");
                    if (url) {
                        window.location.href = url;
                    }
                });
            </script>
              
                <span class="role">Shopper</span>
            </div>
            <img src="/img/users/daiben.png" id="profile-pic" />
        </div>
        <div class="bx bx-menu" id="menu-icon"></div>
      </header>
        <!-- collection status -->
        <div class="container">
            <div class="top-line">
                <p class="status-header"><i class="ri-box-3-line"></i>Collection Status | <span id="collection-method">{{$order -> collect_op}}</span></p>

                <form action="/shopper/order/status/{{$order -> order_id}}" method="POST">
                    @csrf
                    <div class="send-status">
                        <select name="name-dropdown" id="status-dropdown">
                            <option value="select" disabled selected id="select">Select Status</option>
                            <option value="Order Received." id="order-received">Order Received</option>
                            <option value="Rate seller experience" id="rate-seller">Rate Seller</option>
                        </select>
                    <button class="submit">
                        <i class="ri-send-plane-line"></i>
                        <i class="ri-send-plane-fill"></i>
                    </button>
                    </div>
                </form>


            </div>
            <button class="order-id">Order ID: <span id="order-id">{{$order -> order_id}}</span></button>

            <div class="status">
                @foreach($status as $s)
                    <p class="current-status"><span class="date">{{$s -> date_time->format('Y-m-d')}}</span><span class="time">{{($s->date_time)->format('h:i A') }}</span><span class="details">{{$s -> status}}</span></p>
                @endforeach

                @if($rate && $rate->status == "Rate seller experience")
                         <a href="/shopper/rate/seller/{{$seller->seller_id}}/{{$seller->order_id}}"><button class="order-id">Rate Seller</button></a>
                @endif
            </div>


        </div>
 </body>
 </html>