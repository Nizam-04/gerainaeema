<?php
  $data = file_get_contents('data/data.json');
  $products = json_decode($data, true);

  $products = $products["products"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gerainaeema | Exclusive Syar'i</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="ico/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="ico/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="ico/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="ico/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="ico/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="ico/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="ico/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="ico/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="ico/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="ico/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="ico/mstile-310x310.png" />
  </head>
  <body>
    <div id="backdrop"></div>

    <!-- Navbar-->
    <nav class="d-flex justify-content-between align-items-center">
      <div class="logo px-3">
        <img src="img/gerainaeema.png" alt="Gerainaeema">
      </div>
      <ul class="list-unstyled px-lg-3 my-auto">
        <li>
          <a href="#home">Home</a>
        <li>
          <a href="#">Products</a>
        </li>
        <li>
          <a href="#">Other</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <button type="button" class="position-relative bg-transparent border-0">
            <ion-icon name="cart-outline" class="fs-2"></ion-icon>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
              0
            </span>
          </button>
        </li>
      </ul>
      <div class="menu-toggle flex-column justify-content-between px-3 position-relative">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Home Section -->
    <div class="slider" id="home">
      <div class="container">
        <div class="myslider" style="display: block;">
          <img src="img/WhatsApp Image 2022-07-01 at 13.38.22 (1).jpeg" alt="" class="w-100 h-100">
        </div>
        <div class="myslider">
          <img src="img/WhatsApp Image 2022-07-01 at 13.38.23 (1).jpeg" alt="" class="w-100 h-100">
        </div>
        <div class="myslider">
          <img src="img/WhatsApp Image 2022-07-01 at 13.38.23 (2).jpeg" alt="" class="w-100 h-100">
        </div>       
      </div>
      <a class="prev text-decoration-none" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next text-decoration-none" onclick="plusSlides(1)">&#10095;</a>
      
      <div class="dotsbox text-center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
    <!-- Akhir Home Section -->

    <!-- Products Section -->
    <section id="products">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h4 class="mt-5">Popular Products</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/haura.jpeg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Haura Series Set</h5>
                <h5 class="card-title">Rp350.000</h5>
                <a href="#" class="btn border-0 text-white">Add To Cart</a>
                <a href="#" class="btn border-0 text-white">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/ameera.jpeg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Ameera Series Set</h5>
                <h5 class="card-title">Rp190.000</h5>
                <a href="#" class="btn border-0 text-white">Add To Cart</a>
                <a href="#" class="btn border-0 text-white">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/cadar-haura.jpeg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Cadar Haura</h5>
                <h5 class="card-title">Rp15.000</h5>
                <a href="#" class="btn border-0 text-white">Add To Cart</a>
                <a href="#" class="btn border-0 text-white">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Products Section -->

    <!-- JS -->
    <script src="js/script.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.js"></script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
