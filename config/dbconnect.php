<!-- 
    Author:Sudath Nawagamuwage;
    Theme: Spice Ceylon Restaurant;
    Date:15/01/2024    
-->
<?php 
    //Start Session
    session_start();


    // Connect to server and select database
    define('SITEURL', 'http://localhost/Food-order-website/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order-system');

    //Database Connection
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); 
    
    //Selecting Database
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); 


?>