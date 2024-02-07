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
        <link rel="stylesheet" href="css/signup.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="../img/halukay-favicon.png"
            type="image/x-icon"
        />
        <script src="js/failmessage.js"></script>
        <!-- Page Title -->
        <!-- <title>Halukay</title> -->
    </head>
    <body>
        @include('layouts/messages2')
        <!-- header -->
        {{-- @if (Session::get('role') == 'seller')
        @include('layouts/navbar_seller')
    @elseif (Session::get('role') == 'shopper')
        @include('layouts/navbar_shopper')
    @else
        @include('layouts/navbar_public')
    @endif --}}
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
            <div><a href="#" id="register">Sign Up</a></div>
            <div class="bx bx-menu" id="menu-icon"></div>
        </header>

        <!-- sign up -->
        <div class="container">
            <h1>Sign Up</h1>
            <form action="/signup" id="signup_form" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="signup-form" id="signup">
                <!-- row1 -->
                <div class="row-one">
                    <input type="text" required id="first-name" name="first_name" value="{{old('first_name')}}"/>
                    <span id="span-first-name">First Name</span>
                    <input type="text" required id="last-name" name="last_name" value="{{old('last_name')}}"/>
                    <span id="span-last-name">Last Name</span>
                    <input type="file" required id="upload" value="photo" name="profile_picture"/>
                    <input type="text" required id="phone-number" name="phone_number" value="{{old('phone_number')}}"/>
                    <span id="span-phone-number">Phone Number</span>
                </div>
                <!-- row2 -->
                <div class="row-two">
                    <input type="text" required id="username" name="username" value="{{old('username')}}"/>
                    <span id="span-username">Username</span>
                    <input type="text" required id="address-street" name="address_street" value="{{old('address_street')}}"/>
                    <span id="span-address-street">Street Address</span>
                </div>
                <!-- row3 -->
                <div class="row-three">
                    <input type="text" required id="email" name="email_address" value="{{old('email_address')}}"/>
                    <span id="span-email">Email Address</span>
                    <input type="text" required id="address-barangay" name="address_barangay" value="{{old('address_barangay')}}"/>
                    <span id="span-address-barangay">Barangay</span>
                    <input type="text" required id="address-city" name="address_citytown" value="{{old('address_citytown')}}"/>
                    <span id="span-address-city">City/Town</span>
                </div>
                <!-- row4 -->
                <div class="row-four">
                    <input type="password" required id="password" name="password"/>
                    <span id="span-password">Password</span>
                    <input type="password" required id="confirm-password" name="con_pw"/>
                    <span id="span-confirm-password">Confirm Password</span>
                    <input type="text" required id="address-province" name="address_province" value="{{old('address_province')}}"/>
                    <span id="span-address-province">Province</span>
                    <input type="text" required id="address-zip" name="address_zip" value="{{old('address_zip')}}"/>
                    <span id="span-address-zip">Zip Code</span>
                </div>
                <!-- row5 -->
                <div class="row-five">
                    <div class="shopper">
                        <input
                            type="radio"
                            id="shopper"
                            name="role"
                            value="shopper"
                        />
                        <label for="shopper">Shopper</label>
                    </div>
                    <div class="seller">
                        <input
                            type="radio"
                            id="seller"
                            name="role"
                            value="seller"
                        />
                        <label for="seller">Seller</label>
                    </div>
                </div>
                <!-- row6 -->
                <div class="row-six">
                    <input type="checkbox" id="terms" name="accept_tc" value="accept_tc">
                    <label for="terms">I agree to the<span id="terms">Terms & Conditions</span></label>
                </div>
                <!-- signup -->
                <input type="submit" class="signup"/>
            </form>
                {{-- <button class="signup">Sign Up</button> --}}
                <div class="login">
                    <p>Already a member? <span><a href="/login" id="login">Login</a></span></p>
                </div>
            </div>
        </div>
        <img src="../img/halukay-logo.png"id="logo-background">
        <!-- footer -->
        {{-- @include('layouts/footer')  --}}
        {{-- padouble check naglalaban ata styles ng footer at signup. thanks --}}
        
    </body>
</html>
