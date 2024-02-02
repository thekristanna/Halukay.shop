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
    <!-- <title>Halukay</title> -->
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="brand">
        <img src="../img/halukay-logo.png" alt="halukay-logo" id="logo">
        <a href="#" id="brand">halukay.com</a>
      </div>
      <div class="navbar">
        <a href="index.html" class="active" id="home">Home</a>
        <a href="#synrgy" id="about">About</a>
        <a href="#" id="shop">Shop</a>
        <form class="search">
          <input type="text" id="search-input" placeholder="Search here"/>
          <button type="submit" id="search-button">
            <i class="ri-search-line" id="search-icon"></i>
          </button>
        </form>        
      </div>
      <div><a href="/signup" id="register">Register</a></div>
      <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- landing -->
    <div class="container">
      <h1 id="main-heading">
        “Rediscover Style: Where<br />Preloved Becomes Reloved.”
      </h1>
      <div class="landing">
        <!--photo1 -->
        <div>
          <img src="../img/landing_page/01.png" id="picture-1" />
        </div>
        <!-- photo23 -->
        <div class="double">
          <div>
            <img src="../img/landing_page/02A.png" id="picture-2" />
          </div>
          <div>
            <img src="../img/landing_page/02B.png" id="picture-3" />
          </div>
        </div>
        <!-- photo4 -->
        <div>
          <img src="../img/landing_page/03.png" id="picture-4" />
        </div>
        <!-- photo56 -->
        <div class="double">
          <div>
            <img src="../img/landing_page/04A.png" id="picture-5" />
          </div>
          <div>
            <img src="../img/landing_page/04B.png" id="picture-6" />
          </div>
        </div>
        <!-- photo7 -->
        <div>
          <img src="../img/landing_page/05.png" id="picture-7" />
        </div>

        <!-- words -->
        <div class="words">
          <p id="preloved">Preloved</p>
          <p id="fresh-finds">Fresh Finds</p>
          <a href="#" id="shop-now">Shop Now !</a>
        </div>
      </div>

      <!-- featured -->
      <!-- shop or sell -->
      <!-- faqs -->
      <!-- footer -->
    </div>
  </body>
</html>
