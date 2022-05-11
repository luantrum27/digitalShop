<?php 
    include('../config/constants.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="form">
        <div class="form__header-register">
            <span class="form__header-register-msg">Đăng ký</span>

            <!-- <div class="form__qr">
                <div class="form__qr-heading">
                    Đăng nhập với mã<br>QR
                </div>
                <a href="" class="">
                    <svg width="40" height="40" fill="none" class="form__qr-img"><g clip-path="url(#clip0)"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 0H0v18h18V0zM3 15V3h12v12H3zM18 22H0v18h18V22zm-3 15H3V25h12v12zM40 0H22v18h18V0zm-3 15H25V3h12v12z" fill="#EE4D2D"></path><path d="M37 37H22.5v3H40V22.5h-3V37z" fill="#EE4D2D"></path><path d="M27.5 32v-8h-3v8h3zM33.5 32v-8h-3v8h3zM6 6h6v6H6zM6 28h6v6H6zM28 6h6v6h-6z" fill="#EE4D2D"></path><path fill="#fff" d="M-4.3 4l44 43.9-22.8 22.7-43.9-44z"></path></g><defs><clipPath id="clip0"><path fill="#fff" d="M0 0h40v40H0z"></path></clipPath></defs></svg>
                </a>
            </div> -->
        </div>
        <?php
            echo "<br>";
            if(isset($_SESSION['register'])) {
                echo $_SESSION['register'];
                unset($_SESSION['register']);
            }
            echo "<br>";
        ?>
        
        <div class="form__container">
            <form action="" method="POST">
                <div class="form__form">
                    <div class="form__group">
                        <input type="text" class="form__group-input" placeholder="Họ tên" name="customer_name">
                    </div>
                    <div class="form__group">
                        <input type="email" class="form__group-input" placeholder="Email" name="customer_email">
                    </div>
                    <div class="form__group">
                        <input type="text" class="form__group-input" placeholder="Số điện thoại" name="customer_contact">
                    </div>
                    <div class="form__group">
                        <input type="text" class="form__group-input" placeholder="Địa chỉ" name="customer_address">
                    </div>
                    <div class="form__group">
                        <input type="text" class="form__group-input" placeholder="Tên đăng nhập" name="user_name">
                    </div>
                    <div class="form__group">
                        <input type="password" class="form__group-input" placeholder="Mật khẩu" name="password">
                    </div>
                    
                    <div class="form__group">
                        <input type="password" class="form__group-input" placeholder="Nhập lại mật khẩu" name="confirm_password">
                    </div>
                    <?php
                        if(isset($_SESSION['check-password'])) {
                            echo $_SESSION['check-password'];
                            unset($_SESSION['check-password']);
                        }
                    ?>
                </div>
                <input type="submit" value="ĐĂNG KÍ" class="form__button" name="submit">
            </form>
            <?php
                // Check the submit onclick or not
                if(isset($_POST['submit'])) {
                    $customer_name = $_POST['customer_name'];
                    $customer_email = $_POST['customer_email'];
                    $customer_contact = $_POST['customer_contact'];
                    $customer_address = $_POST['customer_address'];
                    $user_name = $_POST['user_name'];
                    $password = md5($_POST['password']);
                    $confirm_password = md5($_POST['confirm_password']);

                    // Create the sql query
                    $sql = "INSERT INTO tbl_user SET
                            customer_name = '$customer_name',
                            customer_contact = '$customer_contact',
                            customer_address = '$customer_address',
                            customer_email = '$customer_email',
                            user_name = '$user_name',
                            password = '$password'";
                    // Check password equal confirm password or not
                    if($password == $confirm_password) {
                        // Execute the sql query
                        $res = mysqli_query($conn, $sql);
                        if($res) {
                            $_SESSION['register'] = "<div class='success'>Đăng ký thành công</div>";
                            header('location: ' .SITEURL. 'html/register.php');
                        }
                        else {
                            $_SESSION['register'] = "<div class='error'>Đăng ký thất bại</div>";
                            header('location: ' .SITEURL. 'html/register.php');
                        }
                    }
                    else {
                        $_SESSION['check-password'] = "<div class='error'>Mật khẩu không khớp. Vui lòng thử lại</div>";
                        header('location: ' .SITEURL. 'html/register.php');

                    }
                }
            ?>
            <!-- <div class="form__msg">
                <a href="" class="form__msg-content">Quên mật khẩu</a>
                <a href="" class="form__msg-content">Đăng nhập với SMS</a>
            </div> -->
            <div class="form__or">
                <div class="form__or-brick">

                </div>
                <span>HOẶC</span>
                <div class="form__or-brick">

                </div>
            </div>
            <div class="form__socials">
                <button class="form__socials-fb">
                    <i class="fa-brands fa-facebook form__socials--icon"></i>
                    <span>Facebook</span>
                </button>
                <button class="form__socials-gg">
                    <i class="fa-brands fa-google form__socials--icon"></i>
                    <span>Google</span>
                </button>
            </div>

            <div class="form__tail">
                <p>Bạn đã có tài khoản? </p>
                <a href="login.php">  Đăng nhập</a>
            </div>
        </div>
    </div>
</body>

</html>