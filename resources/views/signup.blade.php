<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    @include('layouts/messages')
    <div class="container">
        <h1 class="text-center">Sign Up</h1>
        <form action="/signup" method="POST" enctype="multipart/form-data">
            @csrf
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="First Name"/><br />
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name"/><br />
            <input type="file" class="form-control" name="profile_picture" />
            <br />
            <label>Email Address</label>
            <input type="email" class="form-control" name="email_address" placeholder="Email Address"/><br />
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username"/><br />
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password"/><br />
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="con_pw" placeholder="Confirm Password"/><br />
            <label>Phone number</label>
            <input type="number" class="form-control" name="phone_number" placeholder="Phone Number"/><br />
            <label>Street</label>
            <input type="text" class="form-control" name="address_street" placeholder="Street Address"/><br />
            <label>Barangay</label>
            <input type="text" class="form-control" name="address_barangay" placeholder="Barangay"/><br />
            <label>City</label>
            <input type="text" class="form-control" name="address_citytown" placeholder="City/Town"/><br />
            <label>Province</label>
            <input type="text" class="form-control" name="address_province" placeholder="Province"/><br />
            <label>Zip Code</label>
            <input type="text" class="form-control" name="address_zip" placeholder="Zip Code"/><br />
            <h3>Role</h3>
            <input type="radio" name="role" value="shopper"><label for="role">Shopper</label>
            <input type="radio" name="role" value="seller"><label for="role">Seller</label>
            <br />
            <input type="checkbox" name="accept_tc" value="accept_tc">
            <label for="accept_tc">I agree to the terms and conditions.</label>
            <br />
            <input type="submit" class="btn btn-success" />
        </form>
        <br />
    </div>


</body>
</html>