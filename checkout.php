<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="//code.jquery.com/jquery.js"></script>
</head>

<body>
    <?php include_once('./pages/header.php');
    if (isset($_POST['thanhtoan'])) {
        header('Location:thanhtoan.php');
    }
    ?>
    <div class="marg50">
        <div class="pad_title_content">
            <h1 class="page_title">Checkout</h1>
            <ol class="alignbr breadcrumb">
                <li><a href="./index.php">Trang chủ</a></li>
                <li class="active">Checkout</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form action="thanhtoan.php" method="post">
                <div class="col-xs-12 col-sm-6 col-md-6 marg30">
                    <h3>Thông tin liên hệ</h3>
                    <div class="row marg30">

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <p>Họ và tên <span style="color: red;">*</span></p>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Họ và tên"
                                name="hoten" required>
                        </div>


                    </div>
                    <div class="row marg30">

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <p>Số điện thoại<span style="color: red;">*</span></p>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại"
                                name="phone" required>
                        </div>


                    </div>
                    <div class="row marg30">

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <p>Email </p>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                                name="email" required>
                        </div>


                    </div>
                    <div class="row marg30">

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <p>Địa chỉ<span style="color: red;">*</span></p>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address"
                                name="address" required>
                        </div>


                    </div>
                    <hr>

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h3>Thông tin bổ sung</h3>
                            <textarea style="resize: none;" name="note" id="note" cols="75" rows="5"
                                placeholder="Ghi chú đơn hàng"></textarea>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="row pad-l-30 ">
                        <h3>Đơn hàng của bạn</h3>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $tongtien = 0;
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $thanhtien = $cart_item['soluong'] * $cart_item['dongia'];
                                $tongtien += $thanhtien;


                        ?>

                        <div class="row product marg30">

                            <div class="col-xs-12 col-sm-3 col-md-3 ">
                                <img src="./admin/uploads/<?php echo $cart_item['hinhanh'] ?>" alt="">
                            </div>

                            <div class="col-xs-8 col-sm-7 col-md-7 ">
                                <span><?php echo $cart_item['tensp'] ?></span>
                                <span style="color: red;">x<?php echo $cart_item['soluong'] ?></span>
                            </div>

                            <div class="col-xs-4 col-sm-2 col-md-2 ">
                                <span id="price"><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></span>
                            </div>




                        </div>
                        <?php
                            }
                            $_SESSION['doanhthu'] = $tongtien;
                            ?>
                        <hr>
                        <div class="row marg30">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <p>Tạm tính</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <p id="price"><?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row marg30">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <p>Phí ship</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <p id="price">30.000đ</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row marg30">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <p>Tổng cộng</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <p id="price"> <?php echo number_format($tongtien + 30000, 0, ',', '.') . 'vnđ' ?>
                                </p>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <hr>
                        <div class="row marg30" name>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label class="radio-inline">

                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                    Thanh
                                    toán khi nhận hàng

                                </label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label class="radio-inline">

                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
                                    Chuyển
                                    khoản ngân hàng

                                </label>
                            </div>

                        </div>
                        <input type="submit" value="Đặt hàng" class="button" name="thanhtoan">

                    </div>

                </div>
            </form>
        </div>

    </div>
    <?php
    include("./pages/footer.php");
    ?>
    <script src="./js/app.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>