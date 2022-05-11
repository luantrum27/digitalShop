<?php
    include('../config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitals Shop</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://kit.fontawesome.com/0634ae970e.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
    ?>
    <input type="checkbox" name="checkbox" id="checkbox" hidden>
    <label for="checkbox" class="wrapper_opacity"></label>
    <div class="menu-mobile-wrapper">
        <div class="menu-mobile-list">
            <ul class="menu-mobile-item-head">
                <li><a href="home.html">TRANG CHỦ</a></li>
                <li>
                    <input type="checkbox" name="product" id="product" hidden>
                    <a href="phone.html" class="menu-mobile-products"><label for="product">SẢN PHẨM</label><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                    <ul class="menu-mobile-product-list">
                        <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại</a></li>
                        <li><a href=""><i class="fa fa-laptop" aria-hidden="true"></i> Laptop</a></li>
                        <li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> Đồng hồ</a></li>
                        <li><a href=""><i class="fa fa-usb" aria-hidden="true"></i> Phụ kiện</a></li>
                    </ul>
                </li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
                <li><a href="login.php">ĐĂNG NHẬP</a></li>
                <li><a href="register.php">ĐĂNG KÝ</a></li>
            </ul>
        </div>
    </div>
    <header>
        <ul class="nav__category">
            <li class="category-item" style="margin-left: 50px;">
                <a href=""><label for="checkbox" style="cursor: pointer;"><i class="fa fa-bars"></i>Danh mục</label>   </a>

            </li>
            <li class="category-item">
                <a href=""><i class="fa fa-search"></i> Tìm kiếm</a>
            </li>
            <li class="category-item">
                <a href="index.php"><i class="fa fa-user"></i>   Đăng xuất</a>
            </li>
        </ul>
        <div class="nav__logo">
            <a href=""><img src="../img/logo.png" alt="Logo shop"></a>
        </div>
        <ul class="nav__category">
            <li class="category-item">
                <a href=""><i class="fa fa-heart"></i>  Yêu thích</a>
            </li>
            <li class="category-item">
                <a href=""><i class="fa fa-greater-than"></i>   So sánh</a>
            </li>
            <li class="category-item">
                <a href="shoppingcart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>   Giỏ hàng</a>
            </li>
        </ul>
    </header>
    <section id="slider">
        <div class="aspect-ratio-169">
            <img src="../img/slideshow1.jpg" alt="">
            <img src="../img/slideshow2.jpg" alt="">
            <img src="../img/slideshow3.jpg" alt="">
            <img src="../img/slideshow4.jpg" alt="">
            <img src="../img/slideshow5.jpg" alt="">
        </div>
        <span class="slider__title"><h3>THIẾT BỊ ĐIỆN TỬ</h3></span>
        <a href="#" class="btn from-top">Xem thêm</a>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>
    
    <main>
        <div class="wrapper">
            <div class="bestsale__block">
                <h3>Bán chạy nhất</h3>
                <p>Hơn 100+ mẫu laptop phù hợp với bạn.</p>
                <div class="line"></div>
                <div class="bestsale__slide-show">
                    <div class="display__slide">
                    
                        <div class="slide__item">
                            <div class="front">
                                <div class="slide__item-img">
                                    <a href="#"><img src="../img/product-1.png" alt=""></a>
                                </div>
                                <div class="slide__item-desc">
                                    <p class="type">LapTop</p>
                                    <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                                </div>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                            </div>
                            <div class="back">
                                <div class="back__img">
                                    <div class="back__img-item">
                                        <img src="../img/item1.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item2.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item3.png" alt="" srcset="">
                                    </div>
                                </div>
                                <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                                <div class="back__info">
                                    <div class="trademark">
                                        <b>Thương hiệu: </b><i>Acer</i><br>
                                        <b>Loại: </b><i>Laptop</i>
                                    </div>
                                    <div class="back__desc">
                                        <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ
                                            dàng và tiện lợi tham gia học trực tuyến</p>
                                    </div>
                                </div>
                                <div class="back__button">
                                    <center>
                                        <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span class="desc"><p>Thêm vào giỏ</p></span>
                                        </a>
                                        <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                            <span class="desc"><p>Tìm kiếm</p></span>
                                        </a>
                                        <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                            <span class="desc"><p>Yêu thích</p></span>
                                        </a>
                                        <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                            <span class="desc"><p>So sánh</p></span>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="slide__item">
                            <div class="front">
                                <div class="slide__item-img">
                                    <a href="#"><img src="../img/product-1.png" alt=""></a>
                                </div>
                                <div class="slide__item-desc">
                                    <p class="type">LapTop</p>
                                    <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                                </div>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                            </div>
                            <div class="back">
                                <div class="back__img">
                                    <div class="back__img-item">
                                        <img src="../img/item1.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item2.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item3.png" alt="" srcset="">
                                    </div>
                                </div>
                                <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                                <div class="back__info">
                                    <div class="trademark">
                                        <b>Thương hiệu: </b><i>Acer</i><br>
                                        <b>Loại: </b><i>Laptop</i>
                                    </div>
                                    <div class="back__desc">
                                        <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ
                                            dàng và tiện lợi tham gia học trực tuyến</p>
                                    </div>
                                </div>
                                <div class="back__button">
                                    <center>
                                        <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i></a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="slide__item">
                            <div class="front">
                                <div class="slide__item-img">
                                    <a href="#"><img src="../img/product-1.png" alt=""></a>
                                </div>
                                <div class="slide__item-desc">
                                    <p class="type">LapTop</p>
                                    <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                                </div>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                            </div>
                            <div class="back">
                                <div class="back__img">
                                    <div class="back__img-item">
                                        <img src="../img/item1.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item2.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item3.png" alt="" srcset="">
                                    </div>
                                </div>
                                <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                                <div class="back__info">
                                    <div class="trademark">
                                        <b>Thương hiệu: </b><i>Acer</i><br>
                                        <b>Loại: </b><i>Laptop</i>
                                    </div>
                                    <div class="back__desc">
                                        <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ
                                            dàng và tiện lợi tham gia học trực tuyến</p>
                                    </div>
                                </div>
                                <div class="back__button">
                                    <center>
                                        <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i></a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="slide__item">
                            <div class="front">
                                <div class="slide__item-img">
                                    <a href="#"><img src="../img/product-4.png" alt=""></a>
                                </div>
                                <div class="slide__item-desc">
                                    <p class="type">LapTop</p>
                                    <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                                </div>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                            </div>
                            <div class="back">
                                <div class="back__img">
                                    <div class="back__img-item">
                                        <img src="../img/item1.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item2.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item3.png" alt="" srcset="">
                                    </div>
                                </div>
                                <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                                <div class="back__info">
                                    <div class="trademark">
                                        <b>Thương hiệu: </b><i>Acer</i><br>
                                        <b>Loại: </b><i>Laptop</i>
                                    </div>
                                    <div class="back__desc">
                                        <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ
                                            dàng và tiện lợi tham gia học trực tuyến</p>
                                    </div>
                                </div>
                                <div class="back__button">
                                    <center>
                                        <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i></a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="slide__item">
                            <div class="front">
                                <div class="slide__item-img">
                                    <a href="#"><img src="../img/product-5.png" alt=""></a>
                                </div>
                                <div class="slide__item-desc">
                                    <p class="type">LapTop</p>
                                    <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                                </div>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                            </div>
                            <div class="back">
                                <div class="back__img">
                                    <div class="back__img-item">
                                        <img src="../img/item1.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item2.png" alt="" srcset="">
                                    </div>
                                    <div class="back__img-item">
                                        <img src="../img/item3.png" alt="" srcset="">
                                    </div>
                                </div>
                                <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                                <div class="silde__item-cost">
                                    7,790,000đ
                                </div>
                                <div class="back__info">
                                    <div class="trademark">
                                        <b>Thương hiệu: </b><i>Acer</i><br>
                                        <b>Loại: </b><i>Laptop</i>
                                    </div>
                                    <div class="back__desc">
                                        <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ
                                            dàng và tiện lợi tham gia học trực tuyến</p>
                                    </div>
                                </div>
                                <div class="back__button">
                                    <center>
                                        <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i></a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info__block">
                <h2>Về chúng tôi</h2>
                <span>"Top 10 mẫu laptop đáng mua nhất thị trường 2022"</span>
                <p>Digital Shop nhằm mang đến cho Khách hàng thêm một lựa chọn mua sắm tiện ích, tiết kiệm thời gian, dễ dàng chọn lựa khi có nhu cầu tìm mua một chiếc lap top tốt chính hãng. Trang web Digitals Shop được xây dựng với giao diện sang trọng
                    thể hiện chất lượng sản phẩm đang bán cũng như tiêu chí kinh doạn chuẩn mực, với tính năng đặt hàng online được tích hợp sẵn cho từng sản phẩm, khách hàng sẽ nhận được phản hồi nhanh chóng từ chúng tối khi gửi cho chúng tôi <i>"Đơn đặt hàng"</i>                    trực tiếp từ website</p>
                <img class="chuki" src="../img/chu-ky-wikici.png" alt="" srcset="">
                <pre>DIGITALS - SHOP</pre>
            </div>
        </div>
        <section class="guarantee">
            <div class="container">
                <div class="guarantee-wrap">
                    <div class="guarantee-item">
                        <img src="../img/guarantee_item_image_1.png" alt="" srcset="">
                        <div class="guarantee-desc">
                            <h3>Hỗ trợ</h3>
                            <p>Hỗ trợ trực tuyến 24/7</p>
                        </div>
                        <div class="empty"></div>

                    </div>
                    <div class="guarantee-item">
                        <img src="../img/guarantee_item_image_2.webp" alt="" srcset="">
                        <div class="guarantee-desc">
                            <h3>Vận chuyển</h3>
                            <p>Ưu đãi giao hàng tận nhà miễn phí</p>
                        </div>
                        <div class="empty"></div>

                    </div>

                    <div class="guarantee-item">
                        <img src="../img/guarantee_item_image_3.webp" alt="" srcset="">
                        <div class="guarantee-desc">
                            <h3>Thanh toán</h3>
                            <p>Hệ thống thanh toán hoàn toàn an toàn</p>
                        </div>
                        <div class="empty"></div>

                    </div>

                </div>
            </div>
        </section>
        <div class="home-banner-wrapper">
            <div class="home-banner-content">
                <div class="line_col"></div>
                <div class="home-banner-text">
                    <h2>THƯƠNG HIỆU ACER</h2>
                    <p>Laptop Acer là thương hiệu nổi tiếng của Đài Loan được nhiều người tin dùng. Acer thu hút người dùng bởi những công nghệ thông minh giúp trải nghiệm tuyệt vời hơn. Hãy cùng Digitals Shop tìm hiểu thêm về thương hiệu laptop này nhé!</p>
                    <a href="" class="btn-buynow">Mua ngay</a>
                </div>
            </div>
            <div class="home-banner-img">
                <img src="../img/bgr.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="home-product-tab-body">
            <div class="home-product-list">
                    <?php
                        $sql = "SELECT * FROM tbl_product WHERE type_product = 'Laptop'";
                        $res = mysqli_query($conn, $sql);
                        if($res){
                            $count = mysqli_num_rows($res);
                            if ($count > 0) {
                                while($row = mysqli_fetch_assoc($res)) {
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
                                       <div class="slide__item">
                                            <div class="front">
                                                <div class="slide__item-img">
                                                    <a href="#"><img src="../img/product/<?php echo $image_name; ?>" alt=""></a>
                                                </div>
                                                <div class="slide__item-desc">
                                                    <p class="type"><?php echo $type_product; ?></p>
                                                    <h3><?php echo $information; ?></h3>
                                                </div>
                                                <div class="silde__item-cost">
                                                    <?php echo $price.'đ'; ?>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="back__img">
                                                    <div class="back__img-item">
                                                        <img src="../img/product/<?php echo $image_desc_1; ?>" alt="" srcset="">
                                                    </div>
                                                    <div class="back__img-item">
                                                        <img src="../img/product/<?php echo $image_desc_2; ?>" alt="" srcset="">
                                                    </div>
                                                    <div class="back__img-item">
                                                        <img src="../img/product/<?php echo $image_desc_3; ?>" alt="" srcset="">
                                                    </div>
                                                </div>
                                                <span class="title"><h3><?php echo $information; ?></h3></span>
                                                <div class="silde__item-cost">
                                                    <?php echo $price.'đ'; ?>
                                                </div>
                                                <div class="back__info">
                                                    <div class="trademark">
                                                        <b>Thương hiệu: </b><i><?php echo $trade_mark; ?></i><br>
                                                        <b>Loại: </b><i><?php echo $type_product; ?></i>
                                                    </div>
                                                    <div class="back__desc">
                                                        <p><?php echo $description;?></p>
                                                    </div>
                                                </div>
                                                <div class="back__button">
                                                    <center>
                                                        <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                            <span class="desc"><p>Thêm vào giỏ</p></span>
                                                        </a>
                                                        <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                                            <span class="desc"><p>Tìm kiếm</p></span>
                                                        </a>
                                                        <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                                            <span class="desc"><p>Yêu thích</p></span>
                                                        </a>
                                                        <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                                            <span class="desc"><p>So sánh</p></span>
                                                        </a>
                                                    </center>
                                                </div>
                                            </div>
                                        </div> 
                                
                                        <?php
                                }
                            }
                        }
                    ?>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-product-list">
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-banner-wrapper banner-2">
            <div class="home-banner-content">
                <div class="line_col"></div>
                <div class="home-banner-text">
                    <h2>THƯƠNG HIỆU DELL</h2>
                    <p>Laptop Dell Gaming Alienware m15 R6 i7 11800H (P109F001DBL) sở hữu thiết kế độc đáo đậm chất gaming cùng cấu hình vượt trội sẵn sàng đáp ứng hoàn hảo mọi tác vụ từ đồ họa - kỹ thuật tới những trận chiến game đầy kịch tính.</p>
                    <a href="" class="btn-buynow">Mua ngay</a>
                </div>
            </div>
            <div class="home-banner-img">
                <img src="../img/bgr2.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="home-product-tab-body">
            <div class="home-product-list">
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <div class="front">
                        <div class="slide__item-img">
                            <a href="#"><img src="../img/product-1.png" alt=""></a>
                        </div>
                        <div class="slide__item-desc">
                            <p class="type">LapTop</p>
                            <h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3>
                        </div>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                    </div>
                    <div class="back">
                        <div class="back__img">
                            <div class="back__img-item">
                                <img src="../img/item1.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item2.png" alt="" srcset="">
                            </div>
                            <div class="back__img-item">
                                <img src="../img/item3.png" alt="" srcset="">
                            </div>
                        </div>
                        <span class="title"><h3>Laptop Acer Travelmate TMB311-31-P49D N20H1_NX.VNFSV.005</h3></span>
                        <div class="silde__item-cost">
                            7,790,000đ
                        </div>
                        <div class="back__info">
                            <div class="trademark">
                                <b>Thương hiệu: </b><i>Acer</i><br>
                                <b>Loại: </b><i>Laptop</i>
                            </div>
                            <div class="back__desc">
                                <p>Thiết kế đơn giản, chắc chắn, mòng nhẹ chỉ 1.4 kg Hình ảnh chân thật, âm thanh to rõ - Màn hình 11.6" với độ phân giải HD Đáp ứng tốt cho học tập cơ bản - chip Intel Pentium N5030, RAM 4GB HD Webcam để các bé dễ dàng và
                                    tiện lợi tham gia học trực tuyến</p>
                            </div>
                        </div>
                        <div class="back__button">
                            <center>
                                <a href="" class="btn_back-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="desc"><p>Thêm vào giỏ</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-search" aria-hidden="true"></i>
                                    <span class="desc"><p>Tìm kiếm</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="desc"><p>Yêu thích</p></span>
                                </a>
                                <a href="" class="btn_back-item"><i class="fa fa-greater-than"></i>
                                    <span class="desc"><p>So sánh</p></span>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-banner-wrapper banner-3">
            <div class="home-banner-content">
                <div class="line_col"></div>
                <div class="home-banner-text">
                    <h2>THƯƠNG HIỆU ASUS ROG</h2>
                    <p>Là dòng laptop gaming có hệ điều hành Windows 10 Pro và card đồ họa NVIDIA GeForce RTX 2070, bộ vi xử lý Intel Core i7 thế hệ thứ 8. Đây cũng là dòng có 2 phiên bản model 15.6 và 17.3 inch và tần số quét là 144Hz/ 3ms. Với hệ thống
                        tản nhiệt HyperCool Pro, bạn có thể chơi game với hiệu suất cao nhất.</p>
                    <a href="" class="btn-buynow">Mua ngay</a>
                </div>
            </div>
            <div class="home-banner-img">
                <img src="../img/bgr3.jpg" alt="" srcset="" style="width: 564px; height: 337px;">
            </div>
        </div>
        <div class="container">
            <div class="home-six-banner-wrapper">
                <div class="home-six-banner-item">
                    <div class="front-item">
                        <a href=""><img src="../img/six.jpg" alt=""></a>
                    </div>
                    <div class="back-item">
                        <ul class="list-social">
                            <li><a href="" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="home-six-banner-item">
                    <div class="front-item">
                        <a href=""><img src="../img/six1.jpg" alt=""></a>
                    </div>
                    <div class="back-item">
                        <ul class="list-social">
                            <li><a href="" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="home-six-banner-item">
                    <div class="front-item">
                        <a href=""><img src="../img/six2.jpg" alt=""></a>
                    </div>
                    <div class="back-item">
                        <ul class="list-social">
                            <li><a href="" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="home-six-banner-item">
                    <div class="front-item">
                        <a href=""><img src="../img/six3.jpg" alt=""></a>
                    </div>
                    <div class="back-item">
                        <ul class="list-social">
                            <li><a href="" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="home-six-banner-item">
                    <div class="front-item">
                        <a href=""><img src="../img/six4.jpg" alt=""></a>
                    </div>
                    <div class="back-item">
                        <ul class="list-social">
                            <li><a href="" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="home-six-banner-item">
                    <div class="front-item">
                        <a href=""><img src="../img/six7.jpg" alt=""></a>
                    </div>
                    <div class="back-item">
                        <ul class="list-social">
                            <li><a href="" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="home-banner-blog">
                <a href="">Về chúng tôi</a>
                <a href="">Liên hệ ngay</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="footer-list">
                <div class="footer-item">
                    <img src="../img/logo.png" alt="">
                    <ul style="margin-top: 30px;">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Thôn Hà Thượng, Xã Gio Châu, Huyện Gio Linh, Tỉnh Quảng Trị
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i> 0379124695
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i> support@digitalshop.com
                        </li>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM - 06:00 PM
                        </li>
                    </ul>
                </div>

                <div class="footer-item">
                    <div class="footer-top-item-title">
                        <h4>Chính sách</h4>
                    </div>
                    <ul style="margin-top: 30px;">
                        <li><a href="#">Tìm kiếm</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Điều khoản dịch vụ</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <div class="footer-top-item-title">
                        <h4>Thông tin hỗ trợ</h4>
                    </div>
                    <ul style="margin-top: 30px;">
                        <li><a href="#">Dịch vụ sửa chữa</a></li>
                        <li><a href="#">Câu hỏi thường gặp</a></li>
                        <li><a href="#">Chính sách bảo hành</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <div class="footer-top-item-title">
                        <h4>Sản phẩm bán chạy</h4>
                    </div>
                    <div class="slick-list" style="margin-top: 30px;">
                        <div class="slick-track">
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">

                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">

                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">

                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">
                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">
                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">
                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">
                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">
                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">
                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>
                            <div class="slick-slide-item">
                                <a href="">
                                    <img src="../img/product-1.png" alt="">
                                </a>
                                <div>
                                    <h2>Acer Asprire 3</h2>
                                    <span>7.400.000đ</span>
                                    <del>79.000.000đ</del>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="footer-item">
                    <div class="footer-top-item-title">
                        <h4>Đăng ký nhận ưu đãi</h4>
                    </div>
                    <ul style="margin-top: 60px;">
                        <li class="input"><input type="text" placeholder="Nhập email của bạn"><button>Đăng ký</button></li>
                        <li>
                            <p>Nhập địa chỉ email của bạn để nhận được nhiều ưu đãi!</p>
                        </li>
                        <ul class="list-social-row">
                            <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                            <li><i class="fa fa-youtube" aria-hidden="true"></i></li>
                            <li><i class="fa fa-pinterest" aria-hidden="true"></i></li>
                            <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                            <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="line_col_2"></div>
            <div class="container container-footer-bottom">
                <div class="footer-bottom">
                    <div class="footer-bottom-item">
                        <p>&copy; 2022 - All rights reserved by DIGITALS SHOP</p>
                    </div>
                    <div class="footer-bottom-item">
                        <div class="footer-bottom-item-payment">
                            <div>
                                <img src="../img/image_payment_1.webp" alt="">
                            </div>
                            <div>
                                <img src="../img/image_payment_2.webp" alt="">
                            </div>
                            <div>
                                <img src="../img/image_payment_3.webp" alt="">
                            </div>
                            <div>
                                <img src="../img/image_payment_4.webp" alt="">
                            </div>
                            <div>
                                <img src="../img/image_payment_5.webp" alt="">
                            </div>
                            <div>
                                <img src="../img/image_payment_6.webp" alt="">
                            </div>
                            <div>
                                <img src="../img/image_payment_7.webp" alt="">
                            </div>
                            <div>
                                <img src="../img/image_payment_8.webp" alt="">
                            </div>
                            <div>
                                <img src="../img/image_payment_9.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="../js/main.js"></script>
</body>

</html>