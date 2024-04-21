<!-- 
    Author:Sudath Nawagamuwage;
    Theme: Spice Ceylon Restaurant;
    Date:15/01/2024    
-->

<?php 

    //AUthorization - Access COntrol
    
    if(!isset($_SESSION['user'])) //IF user session is not set
    {
        
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        //Redirect to Login Page
        header('location:'.SITEURL.'admin/login.php');
    }

?>