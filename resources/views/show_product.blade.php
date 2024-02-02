<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Shop</title>
</head>
<body>
    <div class="container">
         <div class="row mt-5">
             <div class="col-lg-5">
                 <img src="/img/products/{{ $product->product_photo }}" class="img-fluid" id="product" alt="{{ $product->name }}"><br><p class="mt-2 ms-3 mb-0">Seller: <a href="/profile/daibenangelo">@daibenangelo</a>
                 </p> 
                </div> 
                <div class="col-lg-7"> 
                    <div class="card per_product"> 
                        <div class="card-body-info"> 
                            <h1 id="price">₱ {{ $product -> price }}</h1> <br>
                            <h4 class="fs-5">{{$product -> name}}</h4>
                            <h4 class="fs-5">{{$product -> nego_status}}</h4>
                            <hr>
                            <h6 class="fs-5">Description:</h6>
                            <p>Condition: {{$product -> product_condition}}</p>
                            <p>Brand: {{$product -> brand}}</p>
                            <p>Material: {{$product -> material}}</p>
                            <p>Size & Fit: {{$product -> size_fit}}</p>
                            <p>Notes: {{$product -> notes}}</p>
                        </div> 
                    </div> 
                </div> 
            </div> 
             
    </div> 
</div>
</body>
</html>

