<link rel="stylesheet" href="css/navbar_shopper.css" />
<header>
    <div class="brand">
        <img
            src="../img/halukay-logo.png"
            alt="halukay-logo"
            id="logo"
        />
        <a href="#" id="brand">halukay.com</a>
    </div>
    <div class="navbar">
        <a href="/" class="active" id="home">Home</a>
        <a href="/about" id="about">About</a>
        <a href="/shop" id="shop">Shop</a>
        @include('layouts/search')    
    </div>
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
            <p class="name">
                <button id="dropdown">
                    <i class="ri-arrow-down-s-fill"></i></button
                >Daiben Sanchez
            </p>
            <span class="role">Shopper</span>
        </div>
        <img src="../img/users/daiben.png" id="profile-pic" />
    </div>
    <div class="bx bx-menu" id="menu-icon"></div>
</header>