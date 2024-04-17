<?php include('partials_front_end/menu.php')?>

<?php 
        //CHeck whether id is passed or not
        if(isset($_GET['category_id']))
        {
            //Category id is set and get the id
            $category_id = $_GET['category_id'];
            // Get the CAtegory Title Based on Category ID
            $sql = "SELECT title FROM category WHERE id=$category_id";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Get the value from Database
            $row = mysqli_fetch_assoc($res);
            //Get the TItle
            $category_title = $row['title'];
        }
        else
        {
            //CAtegory not passed
            //Redirect to Home page
            header('location:'.SITEURL);
        }
    ?>

 <!-- Food Search Section Starts Here -->
 <section class="food-search text-center">
  <div class="container">
  <!-- <h2><a href="#" class="text-white">Foods on "<?php echo $category_title; ?>"</a></h2> -->
    <!-- <div class="row">
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
    </div> -->
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

    <?php 
            
                //Create SQL Query to Get foods based on Selected CAtegory
                $sql2 = "SELECT * FROM food WHERE category_id=$category_id";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Count the Rows
                $count2 = mysqli_num_rows($res2);

                //CHeck whether food is available or not
                if($count2>0)
                {
                    //Food is Available
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
                        ?>
                        
                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/menu_food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $title; ?></h4>
                                <p class="food-price">Rs.<?php echo $price; ?></p>
                                <p class="food-detail">
                                    <?php echo $description; ?>
                                </p>
                                <br>

                                <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food not available
                    echo "<div class='error'>Food not Available.</div>";
                }
            
            ?>

      <!-- <div class="food-menu-box">
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
      </div> -->
      <div class="clearmargin">       
      </div>
  </div>        
</section> 
<!-- Food Menu Section Ends Here -->

<?php include('partials_front_end/footer.php')?>