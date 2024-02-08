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
    <link rel="stylesheet" href="/css/edit_item.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <!-- <title>Halukay</title> -->
  </head>
  <body>
    <!-- edit item -->
    <div class="container">
      <h1>Edit Item</h1>
      <form action="/seller/edit/product/{{$product -> product_id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="edit-form" id="edit-item">
        <!-- row1 -->
        <div class="row-one">
          <input type="text" required id="name" name="name" value="{{$product -> name}}"/>
          <span id="span-name">Name</span>
          <input type="text" required id="price" name="price" value="{{$product -> price}}"/>
          <span id="span-price">Price</span>
        </div>
        <!-- row2 -->
        <div class="row-two">
          <span id="span-category">Category</span>
          <div class="category"> <select id="category-select" name="category">
              <option value="{{$product -> category}}" selected>{{$product -> category}}</option>
              <option value="" disabled>---------</option>
              <option value="clothes">Clothes</option>
              <option value="shoes">Shoes</option>
              <option value="bags">Bags</option>
              </select>
          </div>

          <input type="text" required id="condition" name="condition" value="{{$product -> product_condition}}"/>
          <span id="span-condition">Condition</span>
          <input type="text" required id="brand" name="brand" value="{{$product -> brand}}"/>
          <span id="span-brand">Brand</span>
        </div>
        <!-- row3 -->
        <div class="row-three">
          <input type="text" required id="material" name="material" value="{{$product -> material}}"/>
          <span id="span-material">Material</span>
          <input type="text" required id="color" name="color" value="{{$product -> color}}"/>
          <span id="span-color">Color</span>
          <input type="text" required id="size" name="size_fit" value="{{$product -> size_fit}}"/>
          <span id="span-size">Size & Fit</span>
        </div>
        <!-- row4 -->
        <div class="row-four">
          <input type="text" required id="notes" name="notes" value="{{$product -> notes}}"/>
          <span id="span-notes">Notes</span>
          <input type="file" id="upload" name="product_photo" value="{{$product -> product_photo}}"/>
        </div>
        <!-- row5 -->
        <div class="row-five">
          <p>Price:</p>
          <div class="nego">
            <input type="radio" id="nego" name="nego_status" value="Negotiable" />
            <label for="nego">Negotiable</label>
          </div>
          <div class="non-nego">
            <input type="radio" id="non-nego" name="nego_status" value="non-nego" />
            <label for="non-nego">Non-negotiable</label>
          </div>
        </div>

        <!-- add -->
        <button class="edit">Edit Item</button>
      </div>
      </form>
    </div>
  </body>
</html>
