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
    <link rel="stylesheet" href="/css/shopper_current_orders.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <!-- <title>Halukay</title> -->
  </head>
  <body>

    <!-- current orders -->
    <div class="container">
        <div class="bag-buttons">
            <a href="#">Bag</a>
            <a href="#">Previous Orders</a>
            <a href="#" id="active">Current Orders</a>
        </div>
        <p class="orders-header"><i class="ri-shopping-bag-fill"></i>Current Orders</p>
        <div class="orders">
            <div class="top">
                <p class="order-id">Order ID:<span id="order-id">3124</span></p>
            
                <div class="top-details">
                <button class="collection-status">View Status Details</button>
                <p class="order-status">Order Completed</p>
                </div>
            </div>
            <div class="bottom-details">
                <p>Seller:<span class="username">@daibenangelo</span></p>
                <p>TOTAL: ₱<span class="price">200</span></p>
            </div>
            <div class="product">
                <div class="image">
                    <img src="../img/products/Uniqlo Trousers.png" alt="product-name">
                </div>
                <div class="item-name">
                    <p>Item</p>
                    <p class="product-name">Uniqlo Trousers</p>
                </div>
                <div class="item-price">
                    <p>Price</p>
                    <p class="product-price">300</p>
                </div>
            </div>
            <div class="product">
                <div class="image">
                    <img src="../img/products/Uniqlo Trousers.png" alt="product-name">
                </div>
                <div class="item-name">
                    <p>Item</p>
                    <p class="product-name">Uniqlo Trousers</p>
                </div>
                <div class="item-price">
                    <p>Price</p>
                    <p class="product-price">300</p>
                </div>
            </div>
        </div>
        
    </div>
  </body>
</html>
