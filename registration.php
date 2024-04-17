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
<section class="order-2">
    <!-- <div class="container-2"> -->
        <div class="registration">
            <h1 class="text-center">User Registration</h1>
            <br><br>

            <!-- Registration Form Starts Here -->
            <form action="" method="POST" class="text-center">
                <div class="form-group">
                    <label for="full_name">Full Name:</label><br>
                    <input type="text" name="full_name" id="full_name" placeholder="Enter Full Name">
                </div><br>

                <div class="form-group">
                    <label for="username">Username:</label><br>
                    <input type="text" name="username" id="username" placeholder="Enter Username">
                </div><br>

                <div class="form-group">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                </div><br>

                <input type="submit" name="submit" value="Register" class="btn btn-primary">
            </form>
            <!-- Registration Form Ends Here -->
        </div>
    </div>
</section>


<!-- <section class="order-2">
    <div class="container-2">
        <div class="registration">
            <h1 class="text-center">User Registration</h1>
            <br><br>        
          
            <form action="" method="post">
                <div class="row">
                    <div class="order-label">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input class="form-control" type="text" name="full_name" id="example-text-input"> 
                    </div>
                    <div class="order-label">
                        <label for="exampleInputEmail1">Username</label>
                        <input class="form-control" type="text" name="username" id="example-text-input"> 
                    </div>
                    <div class="order-label">
                        <label for="exampleInputEmail1">Password</label>
                        <input class="form-control" type="text" name="password" id="example-text-input-2"> 
                    </div>
                    
                <div class="row">
                    <div class="col-sm-4">
                        <p> <input type="submit" value="Register" name="submit" class="btn btn-primary"> </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section> -->

<?php include('partials_front_end/footer.php')?>

<?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password Encryption with MD5

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO users SET 
            full_name='$full_name',
            username='$username',
            password='$password'
        ";
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        
    }
    
?>

