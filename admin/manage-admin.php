<?php include ('partials/menu.php'); ?>

        <!-- main Content Section Starts -->
        <div class="main-content">
            <div class ="wrapper">
                <h1>Administrator Dashboard</h1>

                <br /><br />

                <!-- Button to Add Admin -->
                <a href="#" class="btn-primary">Add Admin</a>

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
                            <a href="#" class="btn-primary">Change Password</a>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                </table>
            </div>           
        </div>
        <!-- Menu Content Section End -->

<?php include('partials/footer.php'); ?>        