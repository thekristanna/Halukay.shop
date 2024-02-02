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
        <link rel="stylesheet" href="../css/login.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="../img/halukay-favicon.png"
            type="image/x-icon"
        />
        <script src="/js/failmessage.js"></script>
        <!-- Page Title -->
        <!-- <title>Halukay</title> -->
       
    </head>
    <body>
        @include('layouts/messages2')
        <!-- header -->
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
                <a href="index.html" class="active" id="home">Home</a>
                <a href="#synrgy" id="about">About</a>
                <a href="#" id="shop">Shop</a>
                <form class="search">
                    <input
                        type="text"
                        id="search-input"
                        placeholder="Search here"
                    />
                    <button type="submit" id="search-button">
                        <i class="ri-search-line" id="search-icon"></i>
                    </button>
                </form>
            </div>
            <div><a href="#" id="register">Login</a></div>
            <div class="bx bx-menu" id="menu-icon"></div>
        </header>

        <!-- login -->
        <div class="container">
            <h1>Login</h1>
            <form action="/login" method="POST">
            @csrf
            <div class="login-form" id="login">
                <div class="username">
                    <i class="ri-user-fill"></i>
                    <input type="text" required id="username" placeholder="Username" name="username">
                </div>
                <div class="password">
                    <i class="ri-lock-fill"></i>
                    <input type="password" required id="password" placeholder="Password" name="password">
                </div>
                <input type="submit" class="login" value="Login"/>
                {{-- <button class="login">Login</button> --}}
            </form>
                <div class="signup">
                    <p>No account yet? <span><a href="/signup" id="signup">Sign Up</a></span></p>
                </div>
            </div>
        </div>
        <img src="../img/halukay-logo.png"id="logo-background">

        <!-- footer -->
    </body>
</html>
