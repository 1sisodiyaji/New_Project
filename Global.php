<?php
include 'dbConnect.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="/css/mdb.min.css" />
  <link rel="shortcut icon" href="./img/farmer.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <title> Global - Kishan-Mitra</title>
</head>

<body>
  <div id="wrapper" style="background: linear-gradient(90deg, rgba(44,70,82,1) 0%, rgba(171,217,194,1) 77%);">

    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light">
          <!-- Container wrapper -->
          <div class="container-fluid">
              <!-- Toggle button -->
              <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                      aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </button>

              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Navbar brand -->
                  <a class="navbar-brand mt-2 mt-lg-0 text-dark" href="/DashBoard.php">
                      <img src="./img/farmer.png"  alt="Kishan Logo" loading="lazy" height="15px"/>
                  </a>
                  <!-- Left links -->
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                      <li class="nav-item">
                          <a class="nav-link " href="DashBoard.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-dark" href="AboutUs.php">About Us</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-dark" href="Product.php">Product</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-dark active " href="Global.php">Global</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-dark" href="ContactUs.php">Contact us</a>
                      </li>
                  </ul>
                  <!-- Left links -->
              </div>
              <!-- Collapsible wrapper -->

              <!-- Right elements -->
              <div class="d-flex align-items-center">
                  <!-- Icon -->
                  <a class="text-reset me-3" href="/Shopping/index.php">
                      <i class="fi fi-sr-shopping-cart"></i>
                  </a>

                  <!-- Notifications -->
                  <div class="dropdown">
                      <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                         data-mdb-toggle="dropdown" aria-expanded="false">
                          <i class="fi fi-sr-bell"></i>
                          <span class="badge rounded-pill badge-notification bg-danger">1</span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                          <li>
                              <a class="dropdown-item" href="#">Govt.news</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#">Govt Schemes</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#">Upcoming news...</a>
                          </li>
                      </ul>
                  </div>

                  <!-- Avatar -->
                  <div class="dropdown">
                      <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar"
                         role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
                               alt="Black and White Portrait of a Man" loading="lazy" />
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                          <li>
                              <a class="dropdown-item" href="/Profile/profile_data.html">My profile</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="/Profile/Setting.php">Settings</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="index.php">Logout</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <!-- Right elements -->
          </div>
          <!-- Container wrapper -->
      </nav>

    <!-- main content -->
    <section>
      <div class=" container-fluid  mx-auto bg-secondary w-100  ">
        <!-- search box -->
        <div class="w-75 mx-auto py-3">
          <div class="input-group">
            <div class="form-outline border border-dark ">
              <input type="search" id="SearchItem" class="form-control" placeholder="Search Your item here..." />
            </div>
            <button type="button" onclick="search()" class="btn btn-primary text-white" data-mdb-toggle="modal" data-mdb-target="#SearchModal">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>


        <!-- Search  Modal -->
        <div class="modal top fade" id="SearchModal" tabindex="-1" aria-labelledby="SearchModalLabel"
          aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
          <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content rounded-8"
              style="background: linear-gradient(90deg, rgba(44,70,82,1) 0%, rgba(171,217,194,1) 77%);">
              <div class="modal-header  border-bottom-0">
                <h5 class="modal-title text-light" id="SearchModalLabel">Price:-</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p id="error-message"></p>
                <h2 id="display1"></h2>
                <h2 id="display2"></h2>
              </div>

            </div>
          </div>
        </div>

        <!-- cards  -->
        <div class="container-fluid py-5" style="padding: 0;margin: 0;top:100px;">

          <div class="row  d-flex justify-content-around ">

            <div class="col-lg-4 col-md-6 col-12 ">
              <div class="card m-2 mt-3  border border-danger" style="background-color: antiquewhite;">
                <div class="card-body text-center">
                  <h5 class="card-title " id="Wheat">Wheat</h5>
                  <p class="card-text text-success" style="font-size: 2rem;">₹ 25 / Kg</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 ">
              <div class="card m-2 mt-3  border border-danger" style="background-color: antiquewhite;">
                <div class="card-body text-center">
                  <h5 class="card-title " id="Wheat">Rice</h5>
                  <p class="card-text text-success" style="font-size: 2rem;">₹ 32 / Kg</p>
                </div>
              </div>
            </div>


            <div class="col-lg-4 col-md-6 col-12 ">
              <div class="card m-2 mt-3  border border-danger" style="background-color: antiquewhite;">
                <div class="card-body text-center">
                  <h5 class="card-title " id="Wheat">Chana</h5>
                  <p class="card-text text-success" style="font-size: 2rem;">₹ 96 / Kg</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 ">
              <div class="card m-2 mt-3  border border-danger" style="background-color: antiquewhite;">
                <div class="card-body text-center">
                  <h5 class="card-title " id="Wheat">Dal</h5>
                  <p class="card-text text-success" style="font-size: 2rem;">₹ 46 / Kg</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 ">
              <div class="card m-2 mt-3  border border-danger" style="background-color: antiquewhite;">
                <div class="card-body text-center">
                  <h5 class="card-title " id="Wheat">Onion</h5>
                  <p class="card-text text-success" style="font-size: 2rem;">₹ 25 / Kg</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 ">
              <div class="card m-2 mt-3  border border-danger" style="background-color: antiquewhite;">
                <div class="card-body text-center">
                  <h5 class="card-title " id="Wheat">Apple</h5>
                  <p class="card-text text-success" style="font-size: 2rem;">₹ 220 / Kg</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <h2 class="text-center bold bg-success text-danger">Some Helpful Tips and Tricks to Grow your Business</h2>
      <!-- Helping & news reagrding price related to market  -->
      <div class="container-fluid py-4 bg-secondary">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="ratio ratio-16x9 m-1">
              <iframe height="315" src="https://www.youtube.com/embed/Qkeo-OCX0Io?si=abK0UfDaBbZl36gQ&amp;start=1"
                title="YouTube video player"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12  ">
            <div class="ratio ratio-16x9 m-1">
              <iframe height="315" src="https://www.youtube.com/embed/RCqf4NzdbFI?si=sT-pquiXI0ENc4i4"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12  ">
            <div class="ratio ratio-16x9 m-1">
              <iframe height="315" src="https://www.youtube.com/embed/4sHoUFQTskM?si=spRPj9RVsBvDl9rj&amp;start=1"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Kishan-Mitra
              </h6>
              <p>
                Our Company will help you every possible way as we can by providing digital features like real time
                market pricing , weather condition in your area logistic trade and an ecommerce platform for products
                and many more...
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Urea</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Fertilisers</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Seeds</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Pesticides</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Logistic</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Aurangabad , Bihar India</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                637golusisngh@gmail.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 91 6371790702</p>

            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Kishan-Mitra.com</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/mdb.min.js"></script>
  <script src="./js/Global.js"></script>

</body>

</html>