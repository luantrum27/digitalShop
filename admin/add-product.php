<?php
    include('./partials/menu.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Product</h1>
        <br><br>
        <?php
            if(isset($_SESSION['upload'])) {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>
        <br><br>
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Select image: </td>
                    <td><input type="file" name="image_name"></td>
                </tr>
                <tr>
                    <td>Type product: </td>
                    <td>
                        <select name="type_product" id="">
                            <option value="Điện thoại">Điện thoại</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Đồng hồ">Đồng hồ</option>
                            <option value="Phụ kiện">Phụ kiện</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Information: </td>
                    <td><input type="text" name="information" placeholder="Enter your information"></td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td><input type="number" name="price" placeholder="Enter your price"></td>
                </tr>
                <tr>
                    <td>Select image desc 1: </td>
                    <td><input type="file" name="image_desc_1"></td>
                </tr>
                <tr>
                    <td>Select image desc 2: </td>
                    <td><input type="file" name="image_desc_2"></td>
                </tr>
                <tr>
                    <td>Select image desc 3: </td>
                    <td><input type="file" name="image_desc_3"></td>
                </tr>
                <tr>
                    <td>Trade mark: </td>
                    <td><input type="text" name="trade_mark" placeholder="Trade mark"></td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td><textarea name="description" cols="30" rows="5" placeholder="description"> </textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Product" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
        <?php
            if(isset($_POST['submit'])) {
                $type_product = $_POST['type_product'];
                $information = $_POST['information'];
                $price = $_POST['price'];
                $trade_mark = $_POST['trade_mark'];
                $description = $_POST['description'];
                if(isset($_FILES['image_name']['name'])) {
                    $image_name = $_FILES['image_name']['name'];
                    echo $image_name;
                    if($image_name != "") {
                        $ext = end(explode('.', $image_name));
                        $image_name = "Product-item-". rand(0, 999) .".".$ext;
                        echo $image_name;
                        $src = $_FILES['image_name']['tmp_name'];
                        $dst = "../img/product/".$image_name;
                        $upload = move_uploaded_file($src, $dst);

                        // check whether image uploaded or not
                        if (!$upload) {
                            $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                            header('location:'.SITEURL.'admin/add-product.php');
                            die();
                        }
                    }
                }
                else {
                    $image_name = "";
                }
                if(isset($_FILES['image_desc_1']['name'])) {
                    $image_desc_1 = $_FILES['image_desc_1']['name'];
                    if($image_desc_1 != "") {
                        $ext = end(explode('.', $image_desc_1));
                        $image_desc_1 = "Product-item-". rand(0, 999) .".".$ext;
                        $src_desc_1 = $_FILES['image_desc_1']['tmp_name'];
                        $dst_desc_1 = "../img/product/".$image_desc_1;
                        $upload = move_uploaded_file($src_desc_1, $dst_desc_1);

                        // check whether image uploaded or not
                        if (!$upload) {

                            $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                            header('location:'.SITEURL.'admin/add-product.php');
                            die();
                        }
                    }
                }
                else {
                    $image_desc_1 = "";
                }
                if(isset($_FILES['image_desc_2']['name'])) {
                    $image_desc_2 = $_FILES['image_desc_2']['name'];
                    if($image_desc_2 != "") {
                        $ext = end(explode('.', $image_desc_2));
                        $image_desc_2 = "Product-item-". rand(0, 999) .".".$ext;
                        $src_desc_2 = $_FILES['image_desc_2']['tmp_name'];
                        $dst_desc_2 = "../img/product/".$image_desc_2;
                        $upload = move_uploaded_file($src_desc_2, $dst_desc_2);

                        // check whether image uploaded or not
                        if (!$upload) {

                            $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                            header('location:'.SITEURL.'admin/add-product.php');
                            die();
                        }
                    }
                }
                else {
                    $image_desc_2 = "";
                }
                if(isset($_FILES['image_desc_3']['name'])) {
                    $image_desc_3 = $_FILES['image_desc_3']['name'];
                    if($image_desc_3 != "") {
                        $ext = end(explode('.', $image_desc_3));
                        $image_desc_3 = "Product-item-". rand(0, 999) .".".$ext;
                        $src_desc_3 = $_FILES['image_desc_3']['tmp_name'];
                        $dst_desc_3 = "../img/product/".$image_desc_3;
                        $upload = move_uploaded_file($src_desc_3, $dst_desc_3);

                        // check whether image uploaded or not
                        if (!$upload) {

                            $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                            header('location:'.SITEURL.'admin/add-product.php');
                            die();
                        }
                    }
                }
                else {
                    $image_desc_3 = "";
                }
                $sql = "INSERT INTO tbl_product SET
                        image_name = '$image_name',
                        type_product = '$type_product',
                        image_desc_name_1 = '$image_desc_1',
                        image_desc_name_2 = '$image_desc_2',
                        image_desc_name_3 = '$image_desc_3',
                        description = '$description',
                        price = $price,
                        trade_mark = '$trade_mark',
                        information = '$information'";
                $res = mysqli_query($conn, $sql);
                if($res) {
                    $_SESSION['add-product'] = "<div class='success'>Added Product Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-product.php');
                }
                else {
                    $_SESSION['add-product'] = "<div class='error'>Add Product Failed.</div>";
                    header('location:'.SITEURL.'admin/manage-product.php');
                }
            }
        ?>
        
    </div>
</div>

<?php
    include('./partials/footer.php');
?>