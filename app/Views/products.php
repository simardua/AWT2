<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoodBUY-Home</title>
    <link rel = "icon" href="images/favicon.ico" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style2.css">
    <link rel="stylesheet" href="/assets/css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script
      src="https://kit.fontawesome.com/8f27d68390.js"
      crossorigin="anonymous"
    ></script>
  
  </head>
  <body>
  <section>
    <nav class="navbar navbar-expand-md bg-info bg-gradient fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home">
          <img src="images/GOODBUY-logo.png" width="120" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#customercare">24x7 Customer Care</a></li>
                <li><a class="dropdown-item" href="#downloadapp">Download App</a></li>

              </ul>
            </li>
          </ul>
          <?php if (session()->get('isLoggedIn')): ?>
              <div class="dropdown">
  <button class="btn btn-outline-dark ms-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <?= session()->get('firstname') ?>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="/profile">Profile</a></li>
    <li><a class="dropdown-item" href="/logout">Logout</a></li>
  </ul>
</div>
      <?php else: ?>
        <a class="btn btn-outline-dark ms-2" href="/">Login</a>
        <?php endif; ?>
          <form class="d-flex" role="search">
            <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>



           
            
        </div>

        
      </div>
      <div class="cart-box">
        <div class="cart-icon">
          <i class="fas fa-cart-arrow-down fa-2x"></i>
        </div>
        <div class="whole-cart-window hide">
          <h2>Shopping Bag</h2>
          <div class="cart-wrapper">
           
          </div>
          <div class="subtotal">Subtotal: ₹0.00</div>
          <div class="checkout">Checkout</div>
          <div class="view-cart">View Cart</div>
        </div>
      </div>

      
    </nav>
  </section>
    <section class="shop-section">
      <div class="card-wrapper">
        <div data-id="1" class="card-item">
          <img src="images/keyboards/slider-1.webp
          " />
          <div class="details">
            <h3>HP K500F</h3>
            <p>
              <span>
              HP K500F Backlit Membrane Wired Gaming Keyboard</span
              >

              <span class="price">Price: ₹2200</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
        <!-- item 2 -->
        <div data-id="2" class="card-item">
          <img src="images/keyboards/slider-2.webp" />
          <div class="details">
            <h3>Redgear Shadow</h3>
            <p>
              <span>
              Redgear Shadow Blade Mechanical Keyboard 
              </span>

              <span class="price">Price: ₹1899</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>

        <!-- product 3 -->
        <div data-id="3" class="card-item">
          <img src="images/keyboards/slider-3.webp" />
          <div class="details">
            <h3>EvoFox Fireblade</h3>
            <p>
              <span
                >EvoFox Fireblade Wired Gaming Keyboard </span
              >

              <span class="price">Price: ₹2300</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>

        <!-- product 4 -->
        <div data-id="4" class="card-item">
          <img src="images/headphones/slider-1.webp" />
          <div class="details">
            <h3>GS430</h3>
            <p>
              <span>
              SCosmic Byte GS430 Gaming wired over ear Headphone
              </span>

              <span class="price">Price: ₹2699</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
        <!-- product 5 -->
        <div data-id="5" class="card-item">
          <img src="images/headphones/slider-3.webp" />
          <div class="details">
            <h3>Zebronics Jet</h3>
            <p>
              <span
                >Zebronics Jet PRO Premium Gaming Headphone with LED for Headband</span
              >
              <span class="price">Price: ₹2999</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>

        <!-- product 6 -->
        <div data-id="6" class="card-item">
          <img src="images/headphones/slider-4.webp" />
          <div class="details">
            <h3>Cosmic Byte H11</h3>
            <p>
              <span>
              Cosmic Byte H11 Gaming Wired Over-ear Headset
              </span>

              <span class="price">Price: ₹2799</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
        <!-- product 7 -->
        <div data-id="7" class="card-item">
          <img src="images/mouses/slider-1.webp" class="card-img-top" .height="3px"/>
          <div class="details">
            <h3>Recurve 400</h3>
            <p>
              <span>
              Archer Tech Lab Recurve 400 Transparent Wired Gaming Mouse
              </span>

              <span class="price">Price: ₹699</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>

        <!-- product 8 -->
        <div data-id="8" class="card-item">
          <img src="images/monitors/slider-1.webp" />
          <div class="details">
            <h3>Lenovo Q-Series</h3>
            <p>
              <span
                >Lenovo Q-Series 60.5cm (24 Inch) FHD IPS Monitor</span
              >

              <span class="price">Price: ₹1399</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>

        <!-- product 9 -->

        <div data-id="9" class="card-item">
          <img src="images/monitors/slider-2.webp" />
          <div class="details">
            <h3>Acer EK220Q</h3>
            <p>
              <span
                >Acer EK220Q 54.61 cm Full HD VA Panel Backlit LED Monitor</span
              >

              <span class="price">Price: ₹19999</span>
              <span class="add-to-cart-btn">Add To Cart</span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
  </body>
</html>


<br>


<section>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white bg-info">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                good buy
              </h6>
              <p>
                Good Buy Pvt Ltd. is an Indian Company established in 2022 deals for multi-brands computers and laptops accessories.
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p>
                <a class="text-white" href="#">Keyboard</a>
              </p>
              <p>
                <a class="text-white" href="#">Mouse</a>
              </p>
              <p>
                <a class="text-white" href="#">Headphone</a>
              </p>
              <p>
                <a class="text-white" href="#">Monitor</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                policy
              </h6>
              <p>
                <a class="text-white" href="#">Return Policy</a>
              </p>
              <p>
                <a class="text-white" href="#">Security</a>
              </p>
              <p>
                <a class="text-white" href="#">Privacy</a>
              </p>
              <p>
                <a class="text-white" href="#">Terms of use</a>
              </p>
            </div>
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p>Ludhiana 141008, Punjab, India</p>
              <p>info@goodbuy.com</p>
              <p>+91 1234567890</p>
              <p><i class="bi bi-instagram"></i> <i class="bi bi-facebook"></i> @goodbuy_ind</p>
            </div>
            <!-- Grid column -->
          </div>
        </section>
      </div>
    </footer>
    <!-- Footer -->
  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
  </body>
</html>