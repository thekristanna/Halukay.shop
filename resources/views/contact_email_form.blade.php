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
        
  
    <!-- CSS -->
    <link rel="stylesheet" href="../css/contact.css" />
    <!-- Favicon -->
    <link rel="icon" href="../img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <!-- <title>Halukay</title> -->
/>
</head>
<body>
   
     <!-- contact -->
    <div class="container">
        <h1>Contact Us</h1>
        <div class="form-area">
            <div class="form">
                <form action="/contact" method="POST">
                    @csrf
                <p class="headers">What Brings You Here Today?</p>
                <p>Fill us in on your details.</p>
                <!-- row1 -->
                <div class="row-one">
                    <input type="text" required id="first-name" name="first-name"/>
                    <span id="span-first-name">First Name</span>
                    <input type="text" required id="last-name" name="last-name"/>
                    <span id="span-last-name">Last Name</span>
                </div>
                <!-- row2-->
                <div class="row-two">
                    <input type="text" required id="email" name="email"/>
                    <span id="span-email">Email</span>
                    <input type="text" required id="phone" name="phone" />
                    <span id="span-phone">Phone Number</span>
                </div>
                <!-- row3 -->
                <div class="row-three">
                    <input type="text" required id="subject" name="subject" />
                    <span id="span-subject">Subject</span>
                </div>
                <!-- row4 -->
                <div class="row-four">
                    <textarea required id="message" name="message"></textarea>
                    <span id="span-message">Message</span>
                </div>
                <!-- row5 -->
                <div class="row-five">
                    <div class="send">
                        <input type="file" id="upload" value="photo" name="contact_upload"/>
                    </div>
                    <div class="send">
                        <button type="submit">Send</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="contact">
                <p class="headers">Contact<br/>Information</p>
                <p><a href="https://www.google.com/maps" target="_blank"><i class="ri-map-pin-fill"></i></a>Sanchez St.<br/>Brgy. Ctrl, Alt City<br/>93 Elite, Philippines</p>
                <br/>
                <p><a href="tel:+639123456789"><i class="ri-phone-fill"></i></a>+639123456789</p>
                <br/>
                <p><a href="mailto:contact@halukay.com"><i class="ri-mail-fill"></i></a>contact@halukay.com</p>
                <br/>
                <p class="headers">Follow Us</p>
                <div class="icons">
                    <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-circle-fill"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.tiktok.com/" target="_blank"><i class="ri-tiktok-fill"></i></a>
                    <a href="https://www.youtube.com/"><i class="ri-youtube-fill"></i></a>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>
