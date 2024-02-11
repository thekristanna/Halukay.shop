<link rel="stylesheet" href="/css/navbar_seller.css" />
<script src="/js/navbar_shopper_seller.js"></script>
<script src="/js/navbar_public.js"></script>
<header>
    <div class="brand">
      <img src="/img/halukay-logo.png" alt="halukay-logo" id="logo">
      <a href="#" id="brand">halukay.shop</a>
    </div>
    <div class="navbar">
      <a href="/" id="home">Home</a>
      <a href="/about" class="active" id="about">About</a>
      <a href="/shop" id="shop">Shop</a>
      <a href="/seller/my_shop" class="shopper-icons" id="messages-nav">My Shop</a>
      <a href="/seller/add_product" class="shopper-icons" id="add-nav">Add Product</a>
      <a href="#" class="shopper-icons" id="messages-nav">Messages</a>
      <a href="/seller/notifications" class="shopper-icons" id="notifications-nav">Notifications</a>
      <a href="/seller/my_account" class="shopper-icons" id="account-nav">My Account</a>
      <a href="#" class="shopper-icons" id="switch-nav">Switch to Shopper</a>
      <a href="/logout" class="shopper-icons" id="logout-nav">Logout</a>
             
    </div>
    @include('layouts/search')    
    <div class="profile">
      <div class="header-icons">
          <button>
              <a href="/seller/notifications"><i class="ri-notification-3-fill">{{Session::get('notification_count')}}</i></a>
          </button>
          <button>
              <a href="#"><i class="ri-discuss-fill"></i></a>
          </button>

          <button>
            <a href="/seller/add_product"><i class="ri-add-circle-fill"></i></a>
          </button>

          <button>
            <a href="/seller/my_shop"><i class="ri-store-3-fill"></i></a>
          </button>
      </div>

        <div class="profile-name-role">
          <select name="name-dropdown" id="name-dropdown" class="unclickable">
            <option value="username" disabled selected id="username-nav">{{Session::get('display_name')}}</option>
            <option value="account" data-url="/seller/my_account">My Account</option>
            <option value="switch" disabled data-url="#">Switch to Shopper</option>
            <option value="about" data-url="/logout">Logout</option>
        </select>
        {{-- script for select:start --}}
        <script>
          document.getElementById("name-dropdown").addEventListener("change", function() {
              var selectedOption = this.options[this.selectedIndex];
              var url = selectedOption.getAttribute("data-url");
              if (url) {
                  window.location.href = url;
              }
          });
        </script>
         {{-- script for select:end --}}
            <span class="role">Seller</span>
        </div>
        <img src="/img/user_profiles/{{Session::get('profile_photo')}}" id="profile-pic" />
    </div>
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>