<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/shop.css">
    <title>Shop</title>
</head>
<body>
  {{-- Tanna will help us fix this... will still redo this due to bootstrap not working well with other styles --}}
  {{-- @include('layouts/navbar_shop_public') --}}
   {{-- Sorting --}}
    <div class="container">
      <div class="container">
        <form action="/shop" method="GET">
            <div class="row mt-4 mb-4 d-flex align-items-center">
                
                <div class="col-lg-4 d-flex">
                    <strong>Filter</strong>
                    <select name="category" class="form-control" id="year_level">
                        <option value="" selected>Any category</option>
                        <option value="Clothes">Clothes</option>
                        <option value="Bags">Bags</option>
                        <option value="Shoes">Shoes</option>
                    </select>
                         <select name="nego" class="form-control" id="gender">
                        <option value="" selected>Any</option>
                        <option value="Negotiable">Negotiable</option>
                        <option value="Non-negotiable">Non-negotiable</option>
                    </select>
                </div>
                <div class="col-lg-1" >
                    <input type="submit" class="btn btn-success" />
                </div>
            </div>
        </form>
    </div>
    {{-- Items --}}
      <div class="row">
        
        <div class="col-12 d-flex justify-content-between flex-wrap">
          @foreach ($products as $p)
          <div class="card">
            <img src="/img/products/{{$p -> product_photo}}" class="card-img-top image" alt="{{$p -> name}}" >
            <div class="card-body">
              <a href="/shop/{{$p -> product_id}}" id="product_name">{{$p -> name}} <br>{{$p -> nego_status}}</a>
            </div>
          </div>
          @endforeach
        </div>
      
      </div>
      {{$products -> links('pagination::bootstrap-5')}}
    </div>
    
    
    
</body>
</html>