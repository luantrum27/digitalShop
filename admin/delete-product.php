<?php
    include('./partials/menu.php');
?>
<?php

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $sql = "DELETE FROM tbl_product WHERE id = $id";

    $res = mysqli_query($conn, $sql);

    if($res) {
        $_SESSION['delete-product'] = "<div class='success'>Deleted Product Successfully!</div>";
        header('location:'.SITEURL.'admin/manage-product.php');
    }
    else {
        $_SESSION['delete-product'] = "<div class='error'>Delete Product Failed!</div>";
        header('location:'.SITEURL.'admin/manage-product.php');
    }

?>