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
      <img src="images/banner/food_banner_10.jpg" alt="food_banner_10" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/banner/food_banner_6.jpg" alt="ood_banner_6" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/banner/food_banner_7.jpg" alt="food_banner_7" class="d-block w-100">
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


<!-- Food Menu Section Starts Here -->
<section class="order-1">
  <div class="container-2">
    <h2 class="text-center text-white">Fill this form to confirm your order.</h2>  
      <form action="#" class="order">
        <fieldset>
            <legend>Selected Food</legend>
              <div class="food-menu-desc">
                <h3>Food Title</h3>
                <p class="food-price">Rs.1000.00</p>

                <div class="order-label">Quantity</div>
                <input type="number" name="qty" class="input-responsive" value="1" required>                
            </div>
        </fieldset>
        <fieldset>
          <legend>Delivery Details</legend>
          <div class="order-label">Full Name :</div>
          <input type="text" name="full-name" placeholder="Spice Ceylon Restaurant Website" class="input-responsive" required>

          <div class="order-label">Phone Number :</div>
          <input type="tel" name="contact" placeholder="E.g.+94 2531029" class="input-responsive" required>

          <div class="order-label">Email :</div>
          <input type="email" name="email" placeholder="E.g. spiceceylon@yahoo.com" class="input-responsive" required>

          <div class="order-label">Address :</div>
          <textarea name="address" rows="10" placeholder="E.g. address" class="input-responsive" required></textarea>

          <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
      </fieldset>  
    </form>
  </div>
</section>
      
  
<!-- Food Menu Section Ends Here -->

<?php include('partials_front_end/footer.php')?>