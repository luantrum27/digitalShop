<?php
    include('./partials/menu.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>

        <br>
        <?php
            if(isset($_SESSION['checkpassword'])) {
                echo $_SESSION['checkpassword'];
                unset($_SESSION['checkpassword']);
            }
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM tbl_admin WHERE id = $id";
                $res = mysqli_query($conn, $sql);
                if($res){
                    $count = mysqli_num_rows($res);
                    if($count == 1) {
                        $row = mysqli_fetch_assoc($res);
                        $fullname = $row['full_name'];
                        $user_name = $row['username'];
                        $password = $row['password'];
                    }
                }
            }
        ?>
        <br>
        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter your name" value="<?php echo $fullname ?>"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Enter your username" value="<?php echo $user_name ?>"></td>
                </tr>
                <tr>
                    <td>Current password: </td>
                    <td><input type="password" name="current_password" placeholder="Enter your current password"></td>
                </tr>
                <tr>
                    <td>New Password: </td>
                    <td><input type="password" name="new_password" placeholder="Enter your new password"></td>
                </tr>
                <tr>
                    <td>Confirm Password: </td>
                    <td><input type="password" name="confirm_password" placeholder="Enter your confirm password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
        <?php
            if (isset($_POST['submit'])) {
                $full_name = $_POST['full_name'];
                $user_name = $_POST['username'];
                $current_password = md5($_POST['current_password']);
                $new_password = md5($_POST['new_password']);
                $confirm_password = md5($_POST['confirm_password']);
                if ($password == $current_password) {
                    if ($new_password == $confirm_password) {
                        $sql1 = "UPDATE tbl_admin SET
                                full_name = '$full_name',
                                password = '$new_password'
                                WHERE id = $id";
                        $res1 = mysqli_query($conn, $sql1);
                        if($res1) {
                            $_SESSION['update-admin'] = "<div class='success'>Updated Admin Successfully!</div>";
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                        else {
                            $_SESSION['update-admin'] = "<div class='success'>Update Admin Failed!</div>";
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                    }
                    else {
                        $_SESSION['checkpassword'] = "<div class='error'>New password and confirm password don't equals.</div>";
                        header('location:'.SITEURL.'admin/update-admin.php');
                    }
                }
                else {
                    $_SESSION['checkpassword'] = "<div class='error'>Password Incorrect!</div>";
                    header('location:'.SITEURL.'admin/update-admin.php');
                }
            }
        ?>
    </div>
</div>

<?php
    include('./partials/footer.php');
?>