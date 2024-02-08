<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
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
        
  
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/shop.css">

    <!-- Favicon -->
    <link
    rel="icon"
    href="../img/halukay-favicon.png"
    type="image/x-icon"
/>

   
</head>
<body>
  @if (Session::get('role') == 'seller')
        @include('layouts/seller/navbar_home_seller')
        <link rel="stylesheet" href="/css/navbar_seller.css" />
    @elseif (Session::get('role') == 'shopper')
        @include('layouts/shopper/navbar_home_shopper')
        <link rel="stylesheet" href="/css/navbar_shopper.css" />
    @else
        @include('layouts/navbar_home_public')
        <link rel="stylesheet" href="/css/navbar_public.css" />
    @endif
 
   {{-- Sorting --}}
   <div class="container">
    <form action="/shop" method="GET">
    <div class="filter-buttons">
        <button name="category" value="Clothes">Clothes</button>
        <button name="category" value="Shoes">Shoes</button>
        <button name="category" value="Bags">Bags</button>
    </div>
  </form>
    <div class="shop">
    {{-- Items --}}
    @foreach ($products as $p)
    <div class="product">
      
      <div class="image">
          <img
              src="/img/products/{{$p -> product_photo}}"
              alt="{{$p -> name}}"
          />
      </div>
      <div class="info">
          <div class="price-buttons">
              <div class="price"><p id="price">₱ {{ $p -> price }}</p></div>
              <div class="icons">
                <span hidden>{{$found = false}}</span>
                @if (Session::get('role') == 'shopper')
                    @foreach ($liked as $l)
                        @if ($p -> product_id == $l -> product_id)
                        <span hidden>{{$found = true}}</span>
                        @endif
                    @endforeach
                    @if ($found)
                        <form action="/shopper/products/likes/delete/{{$l -> like_id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="icon-btn" type="submit">
                                <i class="ri-heart-3-fill heart-icon-fill" id="liked_heart"></i>
                            </button>
                        </form>
                    @else
                        <form action="/shopper/products/likes/{{$p -> product_id}}/{{$p -> seller_id}}"         method="POST">
                            @csrf
                            <button class="icon-btn" type="submit">
                                <i class="ri-heart-3-line heart-icon"></i>
                                <i
                                class="ri-heart-3-fill heart-icon-fill"
                                ></i>
                            </button>
                        </form>
                    @endif
                @else
                        <form action="/redir_login/{{$p -> product_id}}" method="GET">
                            <button class="icon-btn">
                                <i class="ri-heart-3-line heart-icon"></i>
                                <i
                                    class="ri-heart-3-fill heart-icon-fill"
                                ></i>
                            </button>
                        </form>
                @endif


                @if (Session::get('role') == 'shopper')
                <form action="/shopper/my_bag/{{$p -> product_id}}" method="POST">
                    @csrf
                              <button class="icon-btn" type="submit">
                                <i
                                    class="ri-shopping-bag-line shopping-icon"
                                ></i>
                                <i
                                    class="ri-shopping-bag-fill shopping-icon-fill"
                                ></i>
                            </button>
                            </form>
                            @else
                            <form action="/redir_login/{{$p -> product_id}}" method="GET">
                  <button class="icon-btn">
                      <i
                          class="ri-shopping-bag-line shopping-icon"
                      ></i>
                      <i
                          class="ri-shopping-bag-fill shopping-icon-fill"
                      ></i>
                  </button>
                </form>
                @endif



              </div>
          </div>
          <div class="name">
            <a href="/shop/{{$p -> product_id}}" id="product_name">
              <p>{{$p -> name}} </p>
          </div>
          <div class="nego">
              <p class="nego-status">
                {{$p -> nego_status}}
                @if (Session::get('role') == 'shopper')
                            <form action="/redir_shopper_bag/{{$p -> product_id}}" method="GET">
                              <button class="icon-btn nego-icon-btn">
                                <i class="ri-discuss-line"></i>
                                <i
                                    class="ri-discuss-fill"
                                    id="filled-message"
                                ></i>
                            </button>
                            </form>
                            @else
                            <form action="/redir_login/{{$p -> product_id}}" method="GET">
                  <button class="icon-btn nego-icon-btn">
                      <i class="ri-discuss-line"></i>
                      <i
                          class="ri-discuss-fill"
                          id="filled-message"
                      ></i>
                  </button>
                </form>
                @endif
              </p>
          </div> 
        </a>
      </div>
  </div>
  @endforeach
    </div>
   </div>
  
    
    
    
</body>
</html>

