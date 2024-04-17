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


<!-- Food Menu Section Starts Here -->
<section class="food-menu">
  <div class="container-2">
    <h2 class="text-center">Food Menu</h2>
      <div class="food-menu-box">
        <div class="food-menu-img">
            <img src="images/food_images/kottu_roti.jpg" alt="Kottu Roti" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Kottu Roti</h4>
          <p class="food-price">RS.800.00</p>
          <p class="food-detail">
          “Kottu” made with shredded roti,fresh vegetables, with Sri Lankan Herbs and Spices stir fried on Grill mixed with.
          </p>
          <br>
          <a href="order.html" class="btn btn-primary">Order Now</a>
        </div>
      </div>
      <div class="food-menu-box">
      <div class="food-menu-img">
            <img src="images/food_images/nasi_goreng.jpg" alt="Nasi Goreng" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Nasi Goreng</h4>
          <p class="food-price">RS.1000.00</p>
          <p class="food-detail">
          Southeast Asian fried rice dish made with Chicken, Prawns, shredded Vegetables and fried Egg served with Chilli paste
          </p>
          <br>
          <a href="order.html" class="btn btn-primary">Order Now</a>
        </div>
      </div>
      <div class="food-menu-box">
      <div class="food-menu-img">
            <img src="images/food_images/chicken_fried_rice.jpg" alt="Chicken Fried Rice" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Chicken Fried Rice</h4>
          <p class="food-price">RS.900.00</p>
          <p class="food-detail">
          Our chicken fried rice is, mixed with Chicken and veggies served with fried egg roast Chicken drumstick and chili paste.
          </p>
          <br>
          <a href="order.html" class="btn btn-primary">Order Now</a>
        </div>
      </div>
      <div class="food-menu-box">
      <div class="food-menu-img">
            <img src="images/food_images/devilled_mutton.jpg" alt="Devilled Mutton" class="img-responsive img-curve">
        </div>
        <div class="food-menu-desc">
          <h4>Devilled Mutton</h4>
          <p class="food-price">RS.1000.00</p>
          <p class="food-detail">
          Marinated and fried Meat or Sea food with stir-fried onion and mixed Bell peppers, tossed in a tomato based sweet and spicy sauce
          </p>
          <br>
          <a href="order.html" class="btn btn-primary">Order Now</a>
        </div>
      </div>
      <div class="clearmargin">       
      </div>
  </div>        
</section> 
<!-- Food Menu Section Ends Here -->

<?php include('partials_front_end/footer.php')?>