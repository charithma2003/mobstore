<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MobStore</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="style.css ">


  <link rel="stylesheet" href="style.css">
  <!-------------------------Font Awesome Icons --------------->
  <script src="https://kit.fontawesome.com/dad03e859c.js" crossorigin="anonymous"></script>
  <!----------x---------------Font Awesome Icons --------x------->

  <!----------x---------------Google font --------x------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Berkshire+Swash&family=Comic+Neue:wght@700&family=Gentium+Book+Plus:wght@400;700&family=Lato:ital,wght@0,400;0,700;0,900;1,700&family=Lexend+Deca:wght@500&family=Lexend:wght@500&family=Montserrat:wght@500&family=Open+Sans:wght@500;800&family=Roboto:wght@100;400&family=Sue+Ellen+Francisco&family=Work+Sans:wght@400;700;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900;&display:swap">
  <!----------x---------------Google font --------x----------------->

</head>

<body>

  <?php
  include "header.php";
  ?>

  <section id="header">
    <h6>MobStore.lk<a href="#"><img src="resources/logo.png" style="height: 50px; width: 60px;"></a></h6>
    <div class="row">
      <div class="col-12">
        <div class="input-group mb-3">
          <input type="text" class="form-control col-12" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <span class="input-group-text" id="basic-addon2">Search</span>
        </div>
      </div>
    </div>

    <div>
      <ul id="navbar">
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="cart.html" id="lg-bag"><i class="fal fa-shopping-bag"></i></a>
          <span class="quantity">0</span>
        </li>
        <li><a href="#" id="close" <i class="far fa-times"></i></a></li>
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.html"><i class="fal fa-shopping-bag"></i>
        <span class="quantity">0</span>
      </a>
      <i id="bar" class="fas fa-outdent"></i>
    </div>
  </section>

  <section id="hero">
    <h4>Trade-in-fair</h4>
    <h2>Super value deals</h2>
    <h1>On all Products</h1>
    <p>Save more with coupons and up to 70% off!</p>
    <button>Shop Now</button>

  </section>

  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="resources/iphone-15-pro-ultra.jpg" alt="">
      <a href="#">
        <h6>Iphone</h6>
      </a>
    </div>

    <div class="fe-box">
      <img src="resources/poco.jpg" alt="">
      <a href="#">
        <h6>POCO</h6>
      </a>
    </div>

    <div class="fe-box">
      <img src="resources/mi.jpg" alt="">
      <a href="#">
        <h6>Redmi</h6>
      </a>
    </div>

    <div class="fe-box">
      <img src="resources/Samsung-Logo.png" alt="">
      <h6>Samsung</h6>
    </div>

    <div class="fe-box">
      <img src="resources/oppo.png" alt="">
      <h6>Oppo</h6>
    </div>

    <div class="fe-box">
      <img src="resources/Huawei-Logo.png" alt="">
      <h6>Huawei</h6>
    </div>

  </section>

  <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Best Collection</p>
    <div class="pro-container">
      <div class="pro">
        <img src="resources/Samsung Galaxy A14.jpg" alt="">
        <div class="des">
          <span>Samsung</span>
          <h5>Samsung Galaxy A14 </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR: 150,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>

      <!--products listing  -->
      <div class="pro">
        <img src="resources/g1.jpg" alt="">
        <div class="des">
          <span>Samsung</span>
          <h5>Galaxy Z Flip</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR: 200,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="resources/Xiaomi Redmi A2.jpg" alt="">
        <div class="des">
          <span>Redmi</span>
          <h5>Redmi A02</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR 70,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="resources/Samsung Galaxy A53.jpg" alt="">
        <div class="des">
          <span>Samsung</span>
          <h5>Samsung Galaxy A53</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR 40,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>



      <!-- <div class="pro">
        <img src="https://i.postimg.cc/q7FLrhx6/f5.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Purple Flowering Tshirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="https://i.postimg.cc/L86BZByZ/f7.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Short Knicker </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="https://i.postimg.cc/zDxJ2f0H/f6.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>2 in 1 Double Routed</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="https://i.postimg.cc/x8qcBrpP/n6.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Ash Short</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>

    </div> -->
  </section>

  <section id="banner" class="section-m1">
    <h4> Repair Service</h4>
    <h2>Up to <span>70% off </span> - All Phones and Accessories</h2>
    <button class="btn normal">Explore more</button>
  </section>

  <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
      <div class="pro">
        <img src="resources/Xiaomi Redmi Note 12.jpg" alt="">
        <div class="des">
          <span>Xiaomi</span>
          <h5>Xiaomi Redmi Note 12</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR 45,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="resources/Xiaomi Redmi Note 12.jpg" alt="">
        <div class="des">
          <span>Xiaomi</span>
          <h5>Xiaomi Redmi Note 12</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR 45,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="resources/Xiaomi Redmi Note 12.jpg" alt="">
        <div class="des">
          <span>Xiaomi</span>
          <h5>Xiaomi Redmi Note 12</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR 45,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="resources/Xiaomi Redmi Note 12.jpg" alt="">
        <div class="des">
          <span>Xiaomi</span>
          <h5>Xiaomi Redmi Note 12</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR 45,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="resources/Xiaomi Redmi Note 12.jpg" alt="">
        <div class="des">
          <span>Xiaomi</span>
          <h5>Xiaomi Redmi Note 12</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>LKR 45,000</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>



      <!-- <div class="pro">
        <img src="https://i.postimg.cc/X7r8NsGQ/n7.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Short Knicker </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="https://i.postimg.cc/JhrH0hYM/n8.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>2 in 1 Double Routed</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="https://i.postimg.cc/2Sq4mytJ/f8.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Ash Short</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href=""><i class="fal fa-shopping-cart cart"></i></a>
      </div>

    </div> -->
  </section>

  <section id="sm-banner" class="section-p1">
    <div class="banner-box">
      <h4>crazy deals</h4>
      <h2>buy 1 get 1 free</h2>
      <span>The best classic dress is on sales at cara</span>
      <button class="btn white">Learn More</button>

    </div>

    <div class="banner-box banner-box2">
      <h4>spring/summer</h4>
      <h2>upcoming season</h2>
      <span>The best classic dress is on sales at cara</span>
      <button class="btn white">Collection</button>

    </div>

  </section>

  <section id="banner3" class="section-p1">
    <div class="banner-box">

      <h2>SEASONAL SALES</h2>
      <h3>Winter Collection -50% OFF</h3>

    </div>

    <div class="banner-box banner-img2">

      <h2>SEASONAL SALES</h2>
      <h3>Winter Collection -50% OFF</h3>

    </div>

    <div class="banner-box banner-img3">

      <h2>SEASONAL SALES</h2>
      <h3>Winter Collection -50% OFF</h3>

    </div>

  </section>

  <section id="newsletter" class="section-p1">
    <div class="newstext">
      <h4>Sign Up for Newsletters</h4>
      <p>Get Email updates about our latest shop and <span> special offers.</span> </p>
    </div>
    <div class="form">
      <input type="text" placeholder="Your email address">
      <button class="btn normal">Sign Up</button>
    </div>

    </div>

  </section>

  <footer class="section-p1">

    <div class="col">
      <a href="#"><img class="logo" src="resources/logo.png" style="width: 50px;"></a>
      <h4>Contact</h4>
      <p><strong>Address:<strong>349, Boralesgamuwa</p>
      <p><strong>Phone:</strong>0112549598 , 0112549599</p>
      <p><strong>Hours:</strong>10.00 - 18.00, Mon - Sat</p>
      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-pinterest-p"></i>
        </div>
      </div>
    </div>

    <div class="sec">
      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Condition</a>
        <a href="#">Contact Us</a>
      </div>

      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Account</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track my Order</a>
        <a href="#">Help</a>

      </div>

      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>

        <div class="row">
          <img src="https://i.postimg.cc/Y2s5mLdR/app.jpg" alt="">
          <img src="https://i.postimg.cc/7YvyWTS6/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="https://i.postimg.cc/kgfzqVRW/pay.png" alt="">
      </div>
    </div>

    <div class="coypright">
      <p> © 2023 All rights reserved!  </p>
    </div>

  </footer>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <script src="script.js"></script>
</body>

</html>