<!-- 
    Author:Sudath Nawagamuwage;
    Theme: Spice Ceylon Restaurant;
    Date:15/01/2024    
-->

<?php include ('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>

        <form action="" method="POST">
        <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>        
    </div>
</div>

<?php include ('partials/footer.php'); ?>

<?php 
    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password Encryption with MD5

        //SQL Query to Save the data into database
        $sql = "INSERT INTO admin SET 
            full_name='$full_name',
            username='$username',
            password='$password'
        ";
 
        //Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='success'>New Admin Added Successfully.</div>";
            //Redirect Page to Manage Admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
            
            //Redirect Page to Add Admin
            header("location:".SITEURL.'admin/add-admin.php');
        }

    }
    
?>