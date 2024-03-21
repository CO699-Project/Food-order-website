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
  <link rel="stylesheet" href="css/header.css">
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
            <a class="nav-link" href="#">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Foods</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="phone fa fa-phone"></i>+94 2531029</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="email fa fa-envelope-o"></i>spiceceylon@yahoo.com</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="login">Log In</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#" id="signup">Sign up</a>
          </li>  
        </ul>
      </div>
    
  </nav>
  
  <!-- Navbar Section End Here -->

 <!-- Food Search Section Starts Here -->
 <section class="food-search text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <form>
          <div class="p-1 bg-light shadow-sm">
            <div class="input-group">
              <input type="search" name="search" placeholder="Search for Food.." required class="form-control">
              <div class="input-group-append">
                <div class="btn-group">
                  <button type="button" class="btn btn-outline-secondary" data-toggle="true" aria-expanded="false">
                    Search
                  </button>
                </div>
              </div>              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
 </section>

 <!-- Food Search Section End Here -->

 !-- Carousel Slider Start Here -->

<div id="carouseldemo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner/food_banner_10.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/banner/food_banner_6.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/banner/food_banner_7.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouseldemo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#dcarouseldemo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<!-- Carousel Slider End Here -->

<!-- Food Categories Section Starts Here -->
<section class="categories">
  <div class="container-2">
      <h2 class="text-center">Categories</h2>

      <a href="#">  
      <div class="box-3 float-container" >
         <img src="images/food_images/kottu_roti.jpg" alt="Kottu Roti" class="img-responsive img-curve">

         <h3 class="float-text text-white">Kottu Roti</h3>
      </div>
      </a>

      <a href="#">
      <div class="box-3 float-container">
          <img src="images/food_images/nasi_goreng.jpg" alt="Nasi Goreng" class="img-responsive img-curve">
         
         <h3 class="float-text text-white">Nasi Goreng</h3>
      </div>
      </a>

      <a href="#">
      <div class="box-3 float-container">
      <img src="images/food_images/chicken_fried_rice.jpg" alt="Chicken Fried Rice" class="img-responsive img-curve">
         
         <h3 class="float-text text-white">Chicken Fried Rice</h3>
      </div>
      </a>

      <div class="clearmargin">       
      </div>
  </div>        
</section> 
<!-- Food Categories Section Ends Here -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>