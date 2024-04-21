<!-- 
    Author:Sudath Nawagamuwage;
    Theme: Spice Ceylon Restaurant;
    Date:15/01/2024    
-->

<?php include('partials_front_end/menu.php')?>
 <!-- Food Search Section Starts Here -->
 <section class="food-search text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <form action=" <?php echo SITEURL; ?>menu-search.php" method="POST">>
          <div class="p-1 bg-light shadow-sm">
            <div class="input-group">
              <input type="search" name="search" placeholder="Search for Food.." required class="form-control">
              <input type="submit" name="submit" value="Search" class="btn btn-primary">
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

<!-- About us Section Start Here -->
<section class="order-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                    <h2 class="text-center mb-4">About Spice Ceylon Restaurant</h2>
                    <p>Welcome to Spice Ceylon Restaurant! Located in Colombo, Sri Lanka, we pride ourselves on serving delicious and authentic cuisine in a warm and welcoming atmosphere. Our menu features a variety of dishes crafted from fresh, locally-sourced ingredients, ensuring a flavorful dining experience for every guest.</p>
                    <p>For reservations or inquiries, please don't hesitate to contact us using the information below. We look forward to serving you soon!</p>
                    <div class="contact-info mt-4">
                        <h4>Contact Information:</h4>
                        <p><strong>Address:</strong> 123 Main Street, Cityville, State, Zip</p>
                        <p><strong>Phone:</strong> +94 (2) 531029</p>
                        <p><strong>Email:</strong> info@spicecylon.lk</p>
                    </div>
                    <div class="opening-hours mt-4">
                        <h4>Opening Hours:</h4>
                        <p><strong>Monday:</strong> 12:00 PM - 11:00 PM</p>
                        <p><strong>Tuesday:</strong> 12:00 PM - 11:00 PM</p>
                        <p><strong>Wednesday:</strong> 12:00 PM - 11:00 PM</p>
                        <p><strong>Thursday:</strong> 12:00 PM - 11:00 PM</p>
                        <p><strong>Friday:</strong> 12:00 PM - 11:00 PM</p>
                        <p><strong>Saturday:</strong> 12:00 PM - 11:00 PM</p>
                        <p><strong>Sunday:</strong> 12:00 PM - 11:00 PM</p>
                    </div>
                </div>            
          </div>
    </div>
</section>

<!-- About us Section End Here -->
<?php include('partials_front_end/footer.php')?>