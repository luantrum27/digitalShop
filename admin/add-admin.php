<?php
    include('./partials/menu.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Enter your username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Enter your password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
        <?php
            if (isset($_POST['submit'])) {
                $full_name = $_POST['full_name'];
                $user_name = $_POST['username'];
                $password = md5($_POST['password']);

                $sql = "INSERT INTO tbl_admin SET
                        full_name = '$full_name',
                        username = '$user_name',
                        password = '$password'";

                $res = mysqli_query($conn, $sql);
                if($res) {
                    $_SESSION['add-admin'] = "<div class='success'>Added admin successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
                else {
                    $_SESSION['add-admin'] = "<div class='error'>Added admin Failed.</div>";
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
        ?>
    </div>
</div>

<?php
    include('./partials/footer.php');
?>