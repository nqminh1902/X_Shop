<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="//code.jquery.com/jquery.js"></script>
</head>

<body>
    <?php
    if (isset($_SESSION['cart'])) {
    }
    ?>
    <!-- Heading -->
    <?php
    include("./pages/header.php")
    ?>
    <!-- End -->
    <hr>
    <div class="container-fluid martop">
        <div class="container">
            <div class="number_buy">
                <a href="#">Giỏ hàng <span class="badge">1</span></a>
            </div>
        </div>
    </div>
    <div class="all_detail">
        <div class="container">
            <div class="name-col">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 product_thumnail">
                        <p class="text_">Sản phẩm</p>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 product_price">
                        <p class="text_">Giá</p>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 product_quatity">
                        <p class="text_">Số lượng</p>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 product_total">
                        <p class="text_">Tổng</p>
                    </div>
                    <hr>
                </div>
            </div>
            <?php
            if (isset($_SESSION['cart'])) {
                $tongtien = 0;
                foreach ($_SESSION['cart'] as $cart_item) {
                    $thanhtien = $cart_item['soluong'] * $cart_item['dongia'];
                    $tongtien += $thanhtien;

            ?>
            <div class="row product-detail">
                <div class="col-xs-6 col-sm-6 col-md-6 product_thumnail">
                    <img src="./admin/uploads/<?php echo $cart_item['hinhanh'] ?>">
                    <span id="name_product"><?php echo $cart_item['tensp'] ?></span>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 product_price d-flex product-detail">
                    <p class="price"><?php echo number_format($cart_item['dongia'], 0, ',', '.') . 'đ'; ?></p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 product_quatity d-flex product-detail">
                    <div class="number_pro">
                        <a href="./themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><span
                                class="glyphicon glyphicon-plus"></span></a>
                        <?php echo $cart_item['soluong'] ?>
                        <a href="./themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><span
                                class="glyphicon glyphicon-minus"></span></a>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-6 col-md-2 product_remove d-flex product-detail">
                    <p class="product_total price"><?php echo number_format($thanhtien, 0, ',', '.') . 'đ' ?></p>
                    <a href="./themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><span
                            class="glyphicon glyphicon-remove"></span></a>
                </div>
            </div>
            <hr>

            <?php
                }

                ?>

            <div class="container border_coupon">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="coupon">
                            <p>Mã giảm giá</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <input type="text" placeholder="Mã ưu đãi" class="coupon_code_border">
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="btn_apdung">Áp dụng</div>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn_giohang">Cập nhật giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="coupon_code">
                    <input type="text" placeholder="Mã ưu đãi" class="coupon_code_border">
                    <hr>
                    <button class="btn_giohang">Cập nhật giỏ hàng</button>
                </div>
                <div class="coupon_btn">
                    <a href="#" class="btn_apdung">Áp dụng</a>
                </div>
                <div class="clear"></div> -->
            </div>
            <div class="container border_coupon">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h2>Cộng giỏ hàng</h2>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                                <h4 class="pad24px">TẠM TÍNH</h4>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <h4 class="pad24px"><?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <h4 class="pad24px">Phí ship</h4>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <h4 class="pad24px">30.000</h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <h4 class="pad24px">tổng</h4>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <h4 class="pad24px"><?php echo number_format($tongtien + 30000, 0, ',', '.') . 'vnđ' ?>
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <a href="./checkout.php"><button class="btn_giohang">TIẾN HÀNH THANH TOÁN</button></a>
                            <a href="./index.php"><button class="btn_giohang">MUA THÊM SẢN PHẨM</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>
        </div>
    </div>
    <!-- Footer -->

    <?php
    include("./pages/footer.php")
    ?>
    <script src="./js/app.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>