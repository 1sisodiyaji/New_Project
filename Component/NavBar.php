<?php
?>

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
                    <a class="nav-link " href="../DashBoard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../AboutUs.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../Product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark active " href="../Global.php">Global</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../ContactUs.php">Contact us</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="../Shopping/Cart.php">
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
                        <a class="dropdown-item" href="../Profile/profile_data.html">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="../Profile/Setting.php">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="../index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>