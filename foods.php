<?php include('partials_front_end/menu.php')?>

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

 <!-- Carousel Slider Start Here -->

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
      <h2 class="text-center">Foods</h2>

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


<?php include('partials_front_end/footer.php')?>
