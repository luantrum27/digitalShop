<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGITALS SHOP | SHOPPING CART</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<div class="cart">
    <div class="header">
        <div class="grid">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <span class="header__navbar-item-msg header__navbar-item-border">
                                    Kênh người bán
                        </span>
                    </li>
                    <li class="header__navbar-item header__navbar-qr">
                        <span class="header__navbar-item-msg header__navbar-item-border">
                                    Tải ứng dụng
                        </span>
                        <div class="header__qr">
                            <img src="../img/qr-code.png" alt="QR CODE" class="header__qr-code">
                            <div class="qr__apps">
                                <img src="../img/appstore.png" alt="" class="header__qr-img">
                                <img src="../img/googplay.png" alt="" class="header__qr-img">
                            </div>
                        </div>
                    </li>
                    <li class="header__navbar-item header__navbar-item-connect">
                        <span class="header__navbar-item-msg">
                                    Kết nối
                                </span>
                        <i class="fa-brands fa-facebook header__navbar-item-icon-first header__navbar-icon-fb"></i>
                        <i class="fa-brands fa-instagram-square header__navbar-item-icon-first header__navbar-icon-ins"></i>
                    </li>
                </ul>
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-notify">
                        <i class="fa-solid fa-bell header__navbar-item-icon-second"></i>
                        <span class="header__navbar-item-msg">
                                    Thông báo
                        </span>
                        <div class="header__notify">
                            <img src="../img/header__notify.png" alt=""><br>
                            <span>Đang tải...</span>
                        </div>
                    </li>
                    <li class="header__navbar-item">
                        <i class="fa-solid fa-circle-question header__navbar-item-icon-second"></i>
                        <span class="header__navbar-item-msg">
                                    Hỗ trợ
                        </span>
                    </li>
                    <li class="header__navbar-item">
                        <i class="fa-solid fa-globe header__navbar-item-icon-second"></i>
                        <span class="header__navbar-item-msg">
                                    Tiếng việt
                        </span>

                    </li>
                    <li class="header__navbar-item">

                        <span class="header__navbar-item-msg">
                                    Người dùng
                        </span>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="cart__search">
        <div class="grid">
            <div class="cart__search-container">

                <div class="cart__search-label">
                    <i class="fa-solid fa-cart-shopping cart__search-label-cart"></i>
                    <span>Giỏ Hàng</span>
                </div>
                <div class="cart__search-search">
                    <input type="text" class="cart__search-search-input" placeholder="Tìm kiếm sản phẩm của bạn">
                    <button class="cart__search-search-btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid">
            <div class="container__navbar">
                <div class="container__navbar-list">
                    <div class="container__navbar-check"></div>
                    <input type="checkbox" class="container__navbar-checkbox">
                    <div class="container__navbar-item container__navbar-item-product">
                        <span>Sản phẩm</span>
                    </div>
                </div>
                <div class="container__navbar-list">
                    <div class="container__navbar-item">
                        Đơn giá
                    </div>
                    <div class="container__navbar-item">
                        Số lượng
                    </div>
                    <div class="container__navbar-item">
                        Số tiền
                    </div>
                    <div class="container__navbar-item">
                        Thao tác
                    </div>
                </div>
            </div>
            <div class="container__product">
                <div class="container__product-list">
                    <div class="container__product-item">
                        <div class="container__product-list--checkbox">
                            <input type="checkbox" id="checkbox_1" value="1">
                        </div>
                        <div class="container__product-list--img">
                            <img src="../img/opdtip.jpg" alt="">
                        </div>
                        <div class="container__product-list--title">
                            <span>iPhone 13 Pro Max Kính Cường lực<br>Bảo Vệ Mặt Trước và sau Điện ...</span>
                            <div>
                                <img src="../img/magiamgia.png" alt="">
                            </div>
                        </div>
                        <div class="container__product-list--classify">
                            <span>Phân loại Hàng: <br> iPhone 13 Pro<br>Max,Front+Black</span>
                        </div>
                    </div>
                    <div class="container__product-item">
                        <div class="container__product-list--price">
                            <span id="cost">29000</span>đ
                        </div>
                        <div class="container__product-list--quantity">
                            <button class="container__product-list--btn btn-minus">
                                <i class="fa-solid fa-minus"></i>                           
                             </button>
                            <input type="text" class="container__product-list--input" id="input_1" placeholder="1">
                            <button class="container__product-list--btn btn-plus">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                        <div class="container__product-list--money">
                            <span id="total-product">29000đ</span>
                        </div>
                        <div class="container__product-list--opera">
                            <span class="container__product-list--opera-delete">Xoá</span> <br>
                            <span class="container__product-list--opera-search">Tìm sản phẩm <br> tương tự</span>
                        </div>
                    </div>
                </div>
                <div class="container__product-msg">
                    <i class="fa-solid fa-truck container__product-msg-icon"></i>
                    <span class="container__product-msg-document">Giảm ₫15.000 phí vận chuyển đơn tối thiểu ₫50.000; Giảm ₫70.000 phí vận chuyển đơn tối thiểu ₫300.000</span>
                    <span class="container__product-msg-search">Tìm hiểu thêm</span>
                </div>
                <div class="container__product-list">
                    <div class="container__product-item">
                        <div class="container__product-list--checkbox">
                            <input type="checkbox">
                        </div>
                        <div class="container__product-list--img">
                            <img src="../img/ip11.jpg" alt="">
                        </div>
                        <div class="container__product-list--title">
                            <span>Điện thoại iphone 11 lock và quốc tế<br>chính hãng</span>
                            <div>
                                <img src="../img/magiamgia2.png" alt="">
                            </div>
                        </div>
                        <div class="container__product-list--classify">
                            <span>Phân loại Hàng: <br> Quốc tế,Đen 99%</span>
                        </div>
                    </div>
                    <div class="container__product-item">
                        <div class="container__product-list--price">
                            <span>11.000.000đ</span>
                        </div>
                        <div class="container__product-list--quantity">
                            <button class="container__product-list--btn">
                                <i class="fa-solid fa-minus"></i>                           
                             </button>
                            <input type="text" class="container__product-list--input" placeholder="1">
                            <button class="container__product-list--btn">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                        <div class="container__product-list--money">
                            <span>11.000.000đ</span>
                        </div>
                        <div class="container__product-list--opera">
                            <span class="container__product-list--opera-delete">Xoá</span> <br>
                            <span class="container__product-list--opera-search">Tìm sản phẩm <br> tương tự</span>
                        </div>
                    </div>
                </div>
                <div class="container__product-msg">
                    <i class="fa-solid fa-truck container__product-msg-icon"></i>
                    <span class="container__product-msg-document">Giảm ₫25.000 phí vận chuyển đơn tối thiểu ₫50.000; Giảm ₫70.000 phí vận chuyển đơn tối thiểu ₫300.000</span>
                    <span class="container__product-msg-search">Tìm hiểu thêm</span>
                </div>
                <div class="container__product-list">
                    <div class="container__product-item">
                        <div class="container__product-list--checkbox">
                            <input type="checkbox">
                        </div>
                        <div class="container__product-list--img">
                            <img src="../img/laptop.jpg" alt="">
                        </div>
                        <div class="container__product-list--title">
                            <span>[Mã ELAP1TR giảm 5% đơn 3TR] A<br>pple MacBook Air (2020) M1 Chip ...</span>
                            <div>
                                <img src="../img/magiamgia3.png" alt="">
                            </div>
                        </div>
                        <div class="container__product-list--classify">
                            <span>Phân loại Hàng: <br> Sliver</span>
                        </div>
                    </div>
                    <div class="container__product-item">
                        <div class="container__product-list--price">
                            <span>23.800.000đ</span>
                        </div>
                        <div class="container__product-list--quantity">
                            <button class="container__product-list--btn">
                                <i class="fa-solid fa-minus"></i>                           
                             </button>
                            <input type="text" class="container__product-list--input" placeholder="1">
                            <button class="container__product-list--btn">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                        <div class="container__product-list--money">
                            <span>23.800.000đ</span>
                        </div>
                        <div class="container__product-list--opera">
                            <span class="container__product-list--opera-delete">Xoá</span> <br>
                            <span class="container__product-list--opera-search">Tìm sản phẩm <br> tương tự</span>
                        </div>
                    </div>
                </div>
                <div class="container__product-msg">
                    <i class="fa-solid fa-truck container__product-msg-icon"></i>
                    <span class="container__product-msg-document">Giảm ₫15.000 phí vận chuyển đơn tối thiểu ₫50.000</span>
                    <span class="container__product-msg-search">Tìm hiểu thêm</span>
                </div>

            </div>
            <div class="container__payment">
                <div class="payment__discount">
                    <input type="text" class="payment__discount-input" placeholder="Mã giảm giá (mã chỉ áp dụng một lần)">
                    <button class="payment__discount-btn">ÁP DỤNG</button>
                </div>

                <div class="payment__purchase">
                    <div>
                        <input type="checkbox" class="payment__purchase-checkbox">
                        <span class="payment__purchase--select-all">Chọn Tất Cả</span>
                        <button class="payment__purchase--delete">Xoá</button>
                    </div>
                    <div>
                        <span>Tổng thanh toán: <span id="total_price"></span></span>
                        <button class="payment__purchase-btn">Mua Hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('checkbox_1').onclick = function(e) {
        if (this.checked) {
            document.getElementById('total_price').innerText = document.getElementById('total-product').innerText;
        } else {
            document.getElementById('total_price').innerText = '';
        }
        };
    </script>

</div>

<body>
    <!-- Script -->
    <script src="../js/shoppingcart.js"></script>

</body>

</html>