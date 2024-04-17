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
        
        <div class="login">
            <h1 class="text-center">User Login</h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
        

            <!-- Login Form Starts Here -->
            <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>
            <!-- Login Form Ends Here -->

            
        </div>

    </body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOoe Page/Dashboard
            header('location:'.SITEURL.'Food-order-website/');
        }
        else
        {
            //User not Available and Login Fail
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //Redirect to Home Page/Dashboard
            header('location:'.SITEURL.'Food-order-website/login.php');
        }


    }

?> 


<?php include('partials_front_end/footer.php')?>