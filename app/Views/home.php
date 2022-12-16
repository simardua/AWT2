<!doctype html>
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
        <a class="navbar-brand" href="#home">
          <img src="images/GOODBUY-logo.png" width="120" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products">Products</a>
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
            <br>
          
          <form class="d-flex" role="search">
            <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>



           
           
        </div>
<div></div>
        
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


  <section id="home" class="home pt-5 overflow-hidden">
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/headphones/headphone-home.jpg" class="rounded mx-auto d-block" >
          <div class="carousel-caption d-none d-md-block">
            <h1 class="text-dark">UPTO 30% OFF</h1>
            <p class="text-secondary">Upto 30% off on headphones of selected brands</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/keyboards/keyboard-1.jpg" class="rounded mx-auto d-block" >
          <div class="carousel-caption d-none d-md-block">
            <h1 class="text-dark">UPTO 45% OFF </h1>
            <p class="text-secondary">Upto 45% off on Keyboards of selected brands</p>
          </div>
        </div>
        </div>
      </div>
      <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <br>
  <br>
  <hr>


<!--Keyboards card slider -->
<h2 style="text-indent: 70px;">Featured Keyboards <a href="#" style="font-size: 20px;">more</a></h2>
<br>
  <section>
    <div id="carouselKeyboardControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="cards-wrapper">
          <a href="#" class="custom-card">
          <div class="card" style=" margin-left: 130px;">
            <img src="images/keyboards/slider-1.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹2200</h5>
              <p class="card-text">HP K500F Backlit Membrane Wired Gaming Keyboard with Mixed Color Lighting</p>
            </a>
            </div>
          </div>
          <a href="#" class="custom-card">
          <div class="card" >
            <img src="images/keyboards/slider-2.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹1899</h5>
              <p class="card-text">Redgear Shadow Blade Mechanical Keyboard with Drive Customization, Spectrum LED Lights</p>
            </div>
          </div>
        </a>
        <a href="#" class="custom-card">
          <div class="card" style=" margin-right: 130px;">
            <img src="images/keyboards/slider-3.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹2300</h5>
              <p class="card-text">EvoFox Fireblade Wired Gaming Keyboard with Multiple Lightning Effects I Compact TKL Design I LED Backlit </p>
            </div>
          </div>
        </div>
        </div>
      </a>
      
        <div class="carousel-item">
        <div class="cards-wrapper">
          <a href="#" class="custom-card">
          <div class="card" style=" margin-left: 130px;">
            <img src="images/keyboards/slider-4.webp" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">₹2900</h5>
              <p class="card-text">Offbeat® - 2.4Ghz Wireless 19 Anti-Ghost Keys Tru-RGB Backlit 87 Keys Rechargeable Wireless Gaming Keyboard</p>
            </div>
          </div>
        </a>
        <a href="#" class="custom-card">
          <div class="card" >
            <img src="images/keyboards/slider-5.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹1600</h5>
              <p class="card-text">HP K300 Backlit Membrane Wired Gaming Keyboard with Mixed Color Lighting, 4 LED Indicators</p>
            </div>
          </div>
        </a>
        <a href="#" class="custom-card">
          <div class="card" style=" margin-right: 130px;">
            <img src="images/keyboards/slider-6.webp" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">₹1400</h5>
              <p class="card-text">MEETION MT-K9320 Wired Gaming Keyboard, Water-Resistant Design</p>
            </div>
          </div>
        </a>
        </div>
        </div>
      </div>
      
      <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselKeyboardControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselKeyboardControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


  <br>
  <br>
  <hr>


  <!--mouse card slider-->
  <h2 style="text-indent: 70px;">Featured Mouses <a href="#" style="font-size: 20px;">more</a></h2>

  <section>
    <div id="carouselMouseControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="cards-wrapper">
          <a href="#" class="custom-card">
          <div class="card" style=" margin-left: 130px;">
            <img src="images/mouses/slider-1.webp" class="card-img-top" .height="3px">
            <div class="card-body">
              <h5 class="card-title">₹699</h5>
              <p class="card-text">Archer Tech Lab Recurve 400 Transparent Wired Gaming Mouse with Adjustable 12000 dpi
              </p>
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" >
            <img src="images/mouses/slider-2.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹899</h5>
              <p class="card-text">HP G360 RGB Backlighting USB Wired Gaming Mouse with 6 Programmable Buttons</p>
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" style=" margin-right: 130px;">
            <img src="images/mouses/slider-3.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹799</h5>
              <p class="card-text">Redgear A-15 Wired Gaming Mouse with Upto 6400 DPI</p>
            </div>
          </div>
        </div>
        </div>
        </a>

        
        <div class="carousel-item">
        <div class="cards-wrapper">
          <a href="#" class="custom-card">
          <div class="card" style=" margin-left: 130px;">
            <img src="images/mouses/slider-4.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹499</h5>
              <p class="card-text">SAnt Esports GM320 RGB Optical Wired Gaming Mouse</p>
            </div>
          </div>
        </a>
          <a href="#" class="custom-card">
          <div class="card" >
            <img src="images/mouses/slider-5.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹459</h5>
              <p class="card-text">HP G360 RGB Backlighting USB Wired Gaming Mouse with 6 Programmable Buttons</p>
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" style=" margin-right: 130px;">
            <img src="images/mouses/slider-6.webp" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">₹850</h5>
              <p class="card-text">Redgear A-20 Wired Gaming Mouse with Upto 6400 DPI</p>
            </div>
          </div>
          </a>
        </div>
        </div>
      </div>
      
      <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselMouseControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselMouseControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <br>
  <br>
  <hr>


  <!--headphone card slider-->
<h2 style="text-indent: 70px;">Featured Headphones <a href="#" style="font-size: 20px;">more</a></h2>
  <section>
    <div id="carouselHeadphonesControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="cards-wrapper">
          <a href="#" class="custom-card">
          <div class="card" style=" margin-left: 130px;">
            <img src="images/headphones/slider-1.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹2699</h5>
              <p class="card-text">SCosmic Byte GS430 Gaming wired over ear Headphone</p>
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" >
            <img src="images/headphones/slider-2.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹3399</h5>
              <p class="card-text">SCosmic Byte GS430 Gaming wired over ear Headphone</p>
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" style=" margin-right: 130px;">
            <img src="images/headphones/slider-3.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹2999</h5>
              <p class="card-text">Zebronics Jet PRO Premium Gaming Headphone with LED for Headband</p>
            </div>
          </div>
          </a>
        </div>
        </div>

        
        <div class="carousel-item">
        <div class="cards-wrapper">
          <a href="#" class="custom-card">
          <div class="card" style=" margin-left: 130px;">
            <img src="images/headphones/slider-4.webp" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">₹2799</h5>
              <p class="card-text">Cosmic Byte H11 Gaming Wired Over-ear Headset</p>
            </div>
          </div>
        </a>
        <a href="#" class="custom-card">
          <div class="card" >
            <img src="images/headphones/slider-5.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹2899</h5>
              <p class="card-text">Ant Esports H530 Wired Over Ear Headphones with mic</p>
            </div>
          </div>
        </a>
        <a href="#" class="custom-card">
          <div class="card" style=" margin-right: 130px;">
            <img src="images/headphones/slider-6.webp" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">₹1999</h5>
              <p class="card-text">boAt Immortal IM1000D Dual Channel Wired On Ear Gaming Headphones</p>
            </div>
          </div>
        </a>
        </div>
        </div>
      </div>
      
      <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselHeadphonesControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselHeadphonesControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

<br>
  <br>
  <hr>
  


<!--monitor card slider-->
  <h2 style="text-indent: 70px;">Featured Monitors <a href="#" style="font-size: 20px;">more</a></h2>

  <section>
    <div id="carouselMonitorControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="cards-wrapper">
          <a href="#" class="custom-card">
          <div class="card" style=" margin-left: 130px;">
            <img src="images/monitors/slider-1.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹1399</h5>
              <p class="card-text">Lenovo Q-Series 60.5cm (24 Inch) FHD IPS Monitor</p>
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" >
            <img src="images/monitors/slider-2.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹19999</h5>
              <p class="card-text">Acer EK220Q 54.61 cm Full HD VA Panel Backlit LED Monitor
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" style=" margin-right: 130px;">
            <img src="images/monitors/slider-3.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹9899</h5>
              <p class="card-text">Samsung 24-inch(60.46cm) FHD Monitor</p>
            </div>
          </div>
          </a>
        </div>
        </div>


        <div class="carousel-item">
        <div class="cards-wrapper">
          <a href="#" class="custom-card">
          <div class="card" style=" margin-left: 130px;">
            <img src="images/monitors/slider-4.webp" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">₹10999</h5>
              <p class="card-text">ZEBRONICS Zeb-V19Hd 18.5 Inch (46.99 cm) Led Monitor</p>
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" >
            <img src="images/monitors/slider-5.webp" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">₹9999</h5>
              <p class="card-text">HP M22f 21.5-inch(54.6 cm) FHD Monitor Eye Safe Certified</p>
            </div>
          </div>
          </a>
          <a href="#" class="custom-card">
          <div class="card" style=" margin-right: 130px;">
            <img src="images/monitors/slider-6.webp" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">₹14999</h5>
              <p class="card-text">Samsung Lc24F390Fhwxxl 23.5 Inch (59.8 cm) Curved Led</p>
            </div>
          </div>
          </a>
        </div>
        </div>
      </div>
      
      <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselMonitorControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselMonitorControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>





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