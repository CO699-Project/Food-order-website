<!-- 
    Author:Sudath Nawagamuwage;
    Theme: Spice Ceylon Restaurant;
    Date:15/01/2024    
-->

<?php include('partials_front_end/menu.php')?>

<?php 
//CHeck whether food id is set or not
if(isset($_GET['food_id']))
{
    //Get the Food id and details of the selected food
    $food_id = $_GET['food_id'];

    //Get the DEtails of the Selected Food
    $sql = "SELECT * FROM food WHERE id=$food_id";

    //Execute the Query
    $res = mysqli_query($conn, $sql);

    //Count the rows
    $count = mysqli_num_rows($res);

    //CHeck whether the data is available or not
    if($count==1)
    {
       
        //Get the Data from Database
        $row = mysqli_fetch_assoc($res);

        $title = $row['title'];
        $price = $row['price'];
        $image_name = $row['image_name'];
    }
    else
    {
        
        //Redirect to Home Page
        header('location:'.SITEURL);
    }
}
else
{
    //Redirect to homepage
    header('location:'.SITEURL);
}
?>

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
        <form action="" method="POST" class="order">
            <fieldset>
                <legend>Selected Food</legend>
                <div class="food-menu-img">
                    <?php 
                    //CHeck whether the image is available or not
                    if($image_name=="")
                    {
                        //Image not Availabe
                        echo "<div class='error'>Image not Available.</div>";
                    }
                    else
                    {
                        //Image is Available
                        ?>
                        <img src="<?php echo SITEURL; ?>images/food_images/<?php echo $image_name; ?>" alt="" class="img-responsive img-curve">
                        <?php
                    }
                    ?>
                </div>
                <div class="food-menu-desc">
                    <h3><?php echo $title; ?></h3>
                    <input type="hidden" name="food" value="<?php echo $title; ?>">
                    <p class="food-price">Rs.<?php echo $price; ?></p>
                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                    <div class="order-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>
                </div>
            </fieldset>
            <fieldset>
                <legend>Delivery Details</legend>
                <div class="order-label">Full Name</div>
                <input type="text" name="full-name" placeholder="E.g. Sumudu Karunarathna" class="input-responsive" required>
                <div class="order-label">Phone Number</div>
                <input type="tel" name="contact" placeholder="E.g. 74100562536" class="input-responsive" required>
                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="E.g. info@spiceceylon.lk" class="input-responsive" required>
                <div class="order-label">Address</div>
                <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
            </fieldset>
        </form>
        <?php 
        //CHeck whether submit button is clicked or not
        if(isset($_POST['submit']))
        {
            // Get all the details from the form
            $food = $_POST['food'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $total = $price * $qty; // total = price x qty 
            $order_date = date("Y-m-d h:i:sa"); //Order DAte
            $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled
            $customer_name = $_POST['full-name'];
            $customer_contact = $_POST['contact'];
            $customer_email = $_POST['email'];
            $customer_address = $_POST['address'];
            //Save the Order in Databaase
            //Create SQL to save the data
            $sql2 = "INSERT INTO tlb_order SET 
            food = '$food',
            price = $price,
            qty = $qty,
            total = $total,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$customer_name',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$customer_address'";
            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);
        }

?>   

  </div>
</section>
      
  
<!-- Food Menu Section Ends Here -->

<?php include('partials_front_end/footer.php')?>