<link rel="stylesheet" href="../css/navbar_shopper.css" />
<script src="/js/navbar_shopper_seller.js"></script>
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
      <a href="/shopper/my_bag" class="shopper-icons" id="bag-nav">Bag</a>
      <a href="/shopper/products/likes" class="shopper-icons" id="likes-nav">Likes</a>
      <a href="#" class="shopper-icons" id="messages-nav">Messages</a>
      <a href="/shopper/notifications" class="shopper-icons" id="notifications-nav">Notifications</a>
      <a href="/shopper/my_account" class="shopper-icons" id="account-nav">Account</a>
      <a href="#" class="shopper-icons" id="switch-nav">Switch to Seller</a>
      <a href="/logout" class="shopper-icons" id="logout-nav">Logout</a>
             
    </div>
    @include('layouts/search')    
      <div class="profile">
        <div class="header-icons">
            <button>
                <a href="/shopper/notifications"><i class="ri-notification-3-fill"></i></a>
            </button>
            <button>
                <a href="#"><i class="ri-discuss-fill"></i></a>
            </button>

            <button>
                <a href="/shopper/products/likes"><i class="ri-heart-3-fill"></i></a>
            </button>

            <button>
                <a href="/shopper/my_bag"><i class="ri-shopping-bag-fill"></i></a>
            </button>
        </div>

        <div class="profile-name-role">
         
          <select name="name-dropdown" id="name-dropdown" class="unclickable">
            <option value="username" disabled selected id="username-nav">{{Session::get('display_name')}}</option>
            <option value="account" data-url="/shopper/my_account">Account</option>
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
            <span class="role">{{Session::get('role')}}</span>
        </div>
        <img src="/img/user_profiles/{{Session::get('profile_photo')}}" id="profile-pic" />
    </div>
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>
</body>
</html>