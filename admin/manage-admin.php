<?php
    include('./partials/menu.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        <br>
        <!-- Buttin to Add admin -->
        <?php

            if(isset($_SESSION['add-admin'])){
                echo $_SESSION['add-admin'];
                unset($_SESSION['add-admin']);
            }
            if(isset($_SESSION['delete-admin'])){
                echo $_SESSION['delete-admin'];
                unset($_SESSION['delete-admin']);
            }
            if(isset($_SESSION['update-admin'])){
                echo $_SESSION['update-admin'];
                unset($_SESSION['update-admin']);
            }

        ?>

        <br><br>
        <a href="add-admin.php" class="btn-primary">Add Admin</a>

        <br><br>
        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>User name</th>
                <th>Actions</th>
            </tr>

            <?php
                $sn = 1;
                $sql = "SELECT * FROM tbl_admin";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if($count > 0) {
                    while($row = mysqli_fetch_assoc($res)){
                        $id = $row['id'];
                        $full_name = $row['full_name'];
                        $username = $row['username'];
                        ?>
                            <tr>
                                <td><?php echo $sn++ ?></td>
                                <td><?php echo $full_name ?></td>
                                <td><?php echo $username ?></td>
                                <td>
                                    <a href="<?php echo SITEURL?>admin/update-admin.php?id=<?php echo $id;?>" class="btn-secondary">Update Admin</a>
                                    <a href="<?php echo SITEURL?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-danger">Delete Admin</a>
                                </td>
                            </tr>
                        <?php
                    }
                }
            ?>
        </table>
    </div>
</div>

<?php
    include('./partials/footer.php');
?>