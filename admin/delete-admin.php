<?php
    include('./partials/menu.php');
?>
<?php

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $sql = "DELETE FROM tbl_admin WHERE id = $id";

    $res = mysqli_query($conn, $sql);

    if($res) {
        $_SESSION['delete-admin'] = "<div class='success'>Deleted Admin Successfully!</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else {
        $_SESSION['delete-admin'] = "<div class='error'>Delete Admin Failed!</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }

?>