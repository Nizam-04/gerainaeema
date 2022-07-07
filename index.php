<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gerainaeema | Exclusive Syar'i</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />

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
          <a href="index.php">Home</a>
        <li>
        <li>
          <a href="products.php">Products</a>
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
          <img src="img/haura.jpeg" alt="" class="w-100 h-100">
        </div>
        <div class="myslider">
          <img src="img/ameera.jpeg" alt="" class="w-100 h-100">
        </div>
        <div class="myslider">
          <img src="img/cadar-haura.jpeg" alt="" class="w-100 h-100">
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
            <h4 class="mt-5 mb-5">Popular Products</h4>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4" style="margin-bottom: 60px;">
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
          <div class="col-md-4" style="margin-bottom: 60px;">
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
          <div class="col-md-4" style="margin-bottom: 60px;">
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

    <!-- Testimony -->
    <section id="testimony">
      <div class="container">
        <h6 class="text-center pt-5 fw-light">Testimony</h6>
        <h4 class="text-center fw-bold mb-5">Happy Clients</h4>
        <div class="testimony text-center">
          <img src="https://cf.shopee.co.id/file/82b03085c9d4981b59ba83ec0debc697_tn" class="d-block mx-auto">
          <h6>i*****i, Via <a href="https://shopee.co.id/READY-HAURA-SERIES-SET-i.38109918.6340931988?sp_atk=137f1c94-9272-401b-86ef-f0f236afea44&xptdk=137f1c94-9272-401b-86ef-f0f236afea44" class="text-decoration-none" style="color: #d1c286;">Shopee</a></h6>
          <p>Alhamdulillah paketnya sdh nyampe, cmn 3 hari aja nyampe Sulawesi, gamisnyaa lucu :") <br> Kakak adminnya jg baik sekali responnya🥰🥺 Syukron katsiron yaa🙏😊</p>
        </div>
      </div>     
    </section>
    <!-- Akhir Testimony -->

    <!-- JS -->
    <script src="js/script.js"></script>
    
    <!-- PopperJs -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
