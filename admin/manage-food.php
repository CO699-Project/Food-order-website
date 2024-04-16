<?php include ('partials/menu.php'); ?>

<!-- Main content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food Items</h1>
        <br /><br /><br />

            <!-- Button to Add Food  -->
                <a href="add-food.php" class="btn-primary">Add Food</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <tr>
                        <td>1.</td>
                        <td>Sudath Nawagamuwage</td>
                        <td>Sudath</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Food</a>
                            <a href="#" class="btn-danger">Delete Food</a>
                        </td>
                    </tr>
                </table>
    </div>
</div>
<!-- Main content Section Ends -->
<?php include ('partials/footer.php'); ?>