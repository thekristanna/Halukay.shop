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
        <link rel="stylesheet" href="/css/account.css" />
        <!-- Favicon -->
        <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
        <!-- Page Title -->
        <title>My Account | Halukay</title>
    </head>
    <body>
           <!-- header -->
    @if (Session::get('role') == 'seller')
    @include('layouts/navbar_seller')
@elseif (Session::get('role') == 'shopper')
    @include('layouts/navbar_shopper')
@else
    @include('layouts/navbar_public')
@endif  
        <!-- account -->
        <div class="container">
            <div class="profile-user">
                <img src="/img/user_profiles/{{$profile -> profile_photo}}" alt="{{$profile -> first_name}}'s photo"  id="user-photo"/>
            </div>
            <div class="account">
                <div class="details">
                    <p id="first-name">{{$profile -> first_name}}</p>
                    <span id="span-first-name">First Name</span>
                    <p id="last-name">{{$profile -> last_name}}</p>
                    <span id="span-last-name">Last Name</span>
                    <p id="username">{{$profile -> display_name}}</p>
                    <span id="span-username">Display Name</span>
                </div>
                <div class="details">
                    <p id="email">{{$profile -> email_address}}</p>
                    <span id="span-email">Email Address</span>
                    <p id="phone">{{$profile -> phone_number}}</p>
                    <span id="span-phone">Phone Number</span>
                    <!-- role cannot be edited -->
                    <p id="role-account">Shopper</p>
                    <span id="span-role">Role</span>
                </div>
                <div class="details">
                    <p id="address-street">{{$profile -> address_street}}</p>
                    <span id="span-address-street">Street Address</span>
                    <p id="address-barangay">
                        {{$profile -> address_barangay}}
                    </p>
                    <span id="span-address-barangay">Barangay</span>
                    <p id="address-city">{{$profile -> address_citytown}}</p>
                    <span id="span-address-city">City/Town</span>
                </div>
                <div class="details">
                    <p id="address-province">
                        {{$profile -> address_province}}
                    </p>
                    <span id="span-address-province">Province</span>
                    <p id="address-zip">{{$profile -> address_zip}}</p>
                    <span id="span-address-zip">Zip</span>
                    <a href="/shopper/my_account/edit" class="edit"><button id="edit-btn">Edit Account</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
