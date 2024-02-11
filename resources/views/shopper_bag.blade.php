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
    <link rel="stylesheet" href="../css/your_bag.css" />
    <!-- Favicon -->
    <link rel="icon" href="../img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
 <title>Bag | Halukay</title>
  </head>
  <body>
      <!-- header -->
  
      @include('layouts/navbar_shopper') 
    <!-- your bag -->
    <div class="container">

      <div class="line">
        <p class="orders-header"><i class="ri-shopping-bag-fill"></i>Your Bag</p>
        <div class="bag-buttons">
            <a href="#" id="active">Bag</a>
            <a href="#">Previous Orders</a>
            <a href="#">Current Orders</a>
        </div>
      </div>
        
        <div class="orders">
            <div class="top">
              <a href="#" class="seller-username"><p>Seller:<span class="username">@daibenangelo</span></p></a>
              <p>TOTAL: ₱<span class="price">200</span></p>
                <div class="top-details">
                <button class="checkout">Checkout</button>

                </div>
            </div>
            
            <div class="product">
                <div class="image">
                    <a href="#" class="product-page"><img src="../img/products/Uniqlo Trousers.png" alt="product-name"> </a>
               </div>
                <div class="item-name">
                    <p>Item</p>
                    <p class="product-name">Salvatore Ferragamo Dress</p>
                </div>
                <div class="item-price">
                    <p>Price</p>
                    <p class="product-price">300</p>
                </div>
                <button class="delete">
                    <i class="ri-delete-bin-line"></i>
                    <i class="ri-delete-bin-fill"></i>
                </button>
            </div>

         
            
        </div>
        
    </div>
    
  </body>
</html>
