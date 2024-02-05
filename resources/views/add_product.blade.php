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
        <link rel="stylesheet" href="/css/add_item.css" />
        <!-- Favicon -->
        <link
            rel="icon"
            href="../img/halukay-favicon.png"
            type="image/x-icon"
        />
        <!-- Page Title -->
        <!-- <title>Halukay</title> -->
    </head>
    <body>
        <!-- add item -->
        <div class="container">
            <h1>Add Item</h1>
            <form action="/seller/add_product" id="add_product_form" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="add-form" id="add-item">
                <!-- row1 -->
                <div class="row-one">
                    <input type="text" required id="name" name="name" />
                    <span id="span-name">Name</span>
                    <input type="text" required id="price" name="price" />
                    <span id="span-price">Price</span>
                </div>
                <!-- row2 -->
                <div class="row-two">
                    {{-- <input type="text" required id="category" name="category" />
                    <span id="span-category">Category</span> --}}
                    <select id="category-select" name="category">
                        <option value="" disabled selected>--Please choose an option--</option>
                        <option value="clothes">Clothes</option>
                        <option value="shoes">Shoes</option>
                        <option value="bags">Bags</option>
                    </select>  
                    <input type="text" required id="condition" name="product_condition" />
                    <span id="span-condition">Condition</span>
                    <input type="text" required id="brand" name="brand" />
                    <span id="span-brand">Brand</span>
                </div>
                <!-- row3 -->
                <div class="row-three">
                    <input type="text" required id="material" name="material" />
                    <span id="span-material">Material</span>
                    <input type="text" required id="color" name="color" />
                    <span id="span-color">Color</span>
                    <input type="text" required id="size" name="size_fit" />
                    <span id="span-size">Size & Fit</span>
                </div>
                <!-- row4 -->
                <div class="row-four">
                    <input type="text" required id="notes" name="notes" />
                    <span id="span-notes">Notes</span>
                    <input type="file" required id="upload" value="photo" name="product_photo"/>
                </div>
                <!-- row5 -->
                <div class="row-five">
                    <p>Price:</p>
                    <div class="nego">
                        <input
                            type="radio"
                            id="nego"
                            name="nego_status"
                            value="negotiable"
                        />
                        <label for="nego">Negotiable</label>
                    </div>
                    <div class="non-nego">
                        <input
                            type="radio"
                            id="non-nego"
                            name="nego_status"
                            value="non-negotiable"
                        />
                        <label for="non-nego">Non-negotiable</label>
                    </div>
                </div>

                <!-- add -->
                <button class="add">Add Item</button>
            </div>
            </form>
        </div>
    </body>
</html>
