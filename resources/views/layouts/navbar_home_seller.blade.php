<link rel="stylesheet" href="../css/navbar_seller.css" />
<script src="/js/navbar_shopper_seller.js"></script>
<header>
    <div class="brand">
      <img src="../img/halukay-logo.png" alt="halukay-logo" id="logo">
      <a href="#" id="brand">halukay.shop</a>
    </div>
    <div class="navbar">
      <a href="home.html" class="active" id="home">Home</a>
      <a href="#"id="about">About</a>
      <a href="#"id="shop">Shop</a>
      <a href="#" class="shopper-icons" id="bag-nav">Bag</a>
      <a href="#" class="shopper-icons" id="add-nav">Add Product</a>
      <a href="#" class="shopper-icons" id="messages-nav">Messages</a>
      <a href="#" class="shopper-icons" id="notifications-nav">Notifications</a>
      <a href="#" class="shopper-icons" id="account-nav">Account</a>
      <a href="#" class="shopper-icons" id="switch-nav">Switch to Shopper</a>
      <a href="#" class="shopper-icons" id="logout-nav">Logout</a>
             
    </div>
    @include('layouts/search')    
      <div class="profile">
        <div class="header-icons">
            <button>
                <i class="ri-notification-3-fill"></i>
            </button>
            <button>
                <i class="ri-discuss-fill"></i>
            </button>

            <button>
              <i class="ri-add-circle-fill"></i>
            </button>

            <button>
              <i class="ri-store-3-fill"></i>
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
            <option value="switch" disabled data-url="/">Switch to Seller</option>
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
        <img src="../img/users/daiben.png" id="profile-pic" />
    </div>
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>