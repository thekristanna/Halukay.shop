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
    <link rel="stylesheet" href="/css/about.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <!-- <title>Halukay</title> -->
  <body>
    <!-- header -->
    @include('layouts/navbar_about_public')
    <!-- about -->
    <div class="container">
        <h1>About Us</h1>
        <div class="about">
            <p>
                Welcome to <span id="halukay">halukay</span> - Where Preloved Becomes Reloved</p>
            <p>
                At Halukay, our passion is to connect people through sustainable shopping. We've created a unique marketplace for savvy shoppers looking for affordable treasures and for sellers who wish to give their preloved items a new life.</p>
            <p>
                We're more than just a website; we're a community committed to the joy of rediscovering and rehoming. From chic vintage fashion to timeless home goods, Halukay offers a variety of items that cater to every style and need.</p>
            <p>
                Join our mission at Halukay to make shopping a sustainable and delightful adventure. Because here, every item has a story waiting to be continued by you.</p>
        </div>
        <h1>Developers</h1>
        <div class="developers">
            <div class="kristanna">
                <img src="../img/developers/Kristanna.jpeg" id="kristanna">
                <p class="name">Kristanna Agnes</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/thekristanna" target="_blank"><i class="ri-github-fill"></i></a>
                    <a href="https://www.linkedin.com/in/thekristanna" target="_blank"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>
            <div class="dante">
                <img src="../img/developers/Dante.jpeg" id="dante">
                <p class="name">Dante Magbuhos</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/djmagbuhos" target="_blank"><i class="ri-github-fill"></i></a>
                    <a href="https://www.linkedin.com/in/dante-magbuhos-jr-a7baa12b0/" target="_blank"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>
            <div class="paul">
                <img src="../img/developers/Paul.jpeg" id="paul">
                <p class="name">Paul Quiachon</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/Pquiachon"><i class="ri-github-fill" target="_blank"></i></a>
                    <a href="https://www.linkedin.com/in/john-paul-quiachon-b4727a26a/" target="_blank"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>
        </div>
    </div>

      
    </div>
    <!-- footer -->
    {{-- @include('layouts/footer') --}}
  </body>
</html>
