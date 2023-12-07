<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Contact Us </title>
    <!-- MDB icon -->
    <link rel="icon" href="img/farmer.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body  style="background: linear-gradient(90deg, rgba(44,70,82,1) 0%, rgba(171,217,194,1) 77%); margin: 0; padding: 0; overflow-x: hidden;">

    <div id="wrapper">
        <!-- navbar -->
        <?php
        include_once 'Component/NavBar.php';
        ?>

        <p class="error-message text-danger"></p>
        <!-- container -->
        <?php
        include_once 'Component/ContactForm.php'
        ?>

<!--       Footer-->
        <?php
        include_once 'Component/Footer.php';
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>
    <script src="js/Contact.js"></script>

  </body>
</html>