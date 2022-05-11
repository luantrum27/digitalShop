<?php
    include('./partials/menu.php');
?>

<div class="main-content">
    <div class="wrapper">
    <h1>Manage Product</h1>
        <br>
        <?php
            if(isset($_SESSION['update-product'])) {
                echo $_SESSION['update-product'];
                unset($_SESSION['update-product']);
            }
            if(isset($_SESSION['add-product'])) {
                echo $_SESSION['add-product'];
                unset($_SESSION['add-product']);
            }
            if(isset($_SESSION['delete-product'])) {
                echo $_SESSION['delete-product'];
                unset($_SESSION['delete-product']);
            }
            
        ?>
        <br>
        <a href="add-product.php" class="btn-primary">Add Product</a>

        <br><br>
        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Image name</th>
                <th>Type product</th>
                <th>Information</th>
                <th>Price</th>
                <th>Image desc 1</th>
                <th>Image desc 2</th>
                <th>Image desc 3</th>
                <th>Trade mark</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <?php
                $sn = 1;
                $sql = "SELECT * FROM tbl_product";
                $res = mysqli_query($conn, $sql);
                if($res) {
                    $count = mysqli_num_rows($res);
                    if($count > 0) {
                        while($row = mysqli_fetch_assoc($res)) {
                            $id = $row['id'];
                            $image_name = $row['image_name'];
                            $type_product = $row['type_product'];
                            $information = $row['information'];
                            $price = $row['price'];
                            $image_desc_1 = $row['image_desc_name_1'];
                            $image_desc_2 = $row['image_desc_name_2'];
                            $image_desc_3 = $row['image_desc_name_3'];
                            $trade_mark = $row['trade_mark'];
                            $description = $row['description'];
                            ?>
                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td>
                                        <img style="width: 100px;" src="../img/product/<?php echo $image_name; ?>" alt="">
                                    </td>
                                    <td><?php echo $type_product; ?></td>
                                    <td><?php echo $information; ?></td>
                                    <td><?php echo $price; ?></td>
                                    <td>
                                        <img style="width: 50px;" src="../img/product/<?php echo $image_desc_1; ?>" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 50px;" src="../img/product/<?php echo $image_desc_2; ?>" alt="">
                                    </td>
                                    <td>
                                        <img style="width: 50px;" src="../img/product/<?php echo $image_desc_3; ?>" alt="">
                                    </td>
                                    <td><?php echo $trade_mark; ?></td>
                                    <td><?php echo $description; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL?>admin/update-product.php?id=<?php echo $id;?>" class="btn-secondary">Update</a>
                                        <a href="<?php echo SITEURL?>admin/delete-product.php?id=<?php echo $id;?>" class="btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                }
            ?>
            
        </table>
    </div>
</div>

<?php
    include('./partials/footer.php');
?>