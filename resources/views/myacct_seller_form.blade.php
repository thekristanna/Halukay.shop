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
    <link rel="stylesheet" href="/css/account_edit.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <!-- <title>Halukay</title> -->
  </head>
  <body>

    <!-- edit account -->
    <div class="container">
        <form action="/seller/my_account/edit" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="profile">
            <img src="/img/user_profiles/{{$profile -> profile_photo}}" alt="{{$profile -> first_name}}'s photo">
            <button type="submit">Save Edit</button>
        </div>
        <div class="account">
            <div class="details">
                <input type="text" id="first-name" name="first_name" value="{{$profile -> first_name}}"/><span id="span-first-name">First Name</span>
                <input type="text" id="last-name" name="last_name" value="{{$profile -> last_name}}"/><span id="span-last-name">Last Name</span>
                <input type="text" id="username" name="username" value="Will change"/><span id="span-username">Username</span>
            </div>
            <div class="details">
                   <input type="email" id="email" name="email_address" value="{{$profile -> email_address}}"/><span id="span-email">Email Address</span>
                   <input type="text" id="phone" name="phone_number" value="{{$profile -> phone_number}}"><span id="span-phone">Phone Number</span>
                   <input type="text" id="password" name="password" value="Edit form"/><span id="span-password">Password</span>
            </div>
            <div class="details">
                   <input type="text" id="address-street" name="address_street" value="{{$profile -> address_street}}"/><span id="span-address-street">Street Address</span>
                   <input type="text" id="address-barangay" name="address_barangay" value="{{$profile -> address_barangay}}"/><span id="span-address-barangay">Barangay</span>
                   <input type="text" id="address-city" name="address_citytown" value="{{$profile -> address_citytown}}"/><span id="span-address-city">City/Town</span>
            </div>
            <div class="details">
                   <input type="text" id="address-province" name="address_province" value="{{$profile -> address_province}}"/><span id="span-address-province">Province</span>
                   <input type="text" id="address-zip" name="address_zip" value="{{$profile -> address_zip}}"/><span id="span-address-zip">Zip</span>
                <!-- role cannot be edited -->
                <p id="role">Seller</p><span id="span-role">Role</span>
            </div>
        </div>
    </form>
    </div>
</body>
</html>