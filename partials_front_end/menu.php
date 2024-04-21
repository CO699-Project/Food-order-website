<!-- 
    Author:Sudath Nawagamuwage;
    Theme: Spice Ceylon Restaurant;
    Date:15/01/2024     
  -->

<?php include('config/dbconnect.php'); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Spice Ceylon Restaurant Website</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Link Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Link our CSS file -->
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/food_categorie_menu.css">
  </head>
<body>

  <!-- Navbar Section Starts Here -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="images/logo/spicesLogo.jpeg" alt="Restaurant logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo SITEURL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SITEURL; ?>about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SITEURL; ?>foods.php">Food Selection</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="phone fa fa-phone"></i>+94 2531029</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="email fa fa-envelope-o"></i>info@spiceceylon@.lk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SITEURL; ?>menu.php">Food Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SITEURL; ?>login.php">Log In</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo SITEURL; ?>registration.php">Sign Up</a>
          </li>  
        </ul>
      </div>
    
  </nav>
  <!-- Navbar Section End Here -->