<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/product_detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="//code.jquery.com/jquery.js"></script>
</head>

<body>
    <!-- Heading -->
    <?php
    include("./pages/header.php");
    if (isset($_GET['id'])) {
        $sql_chitietsp = "SELECT * FROM sanpham WHERE sanpham.idsp =" . $_GET['id'];
        $query_chitietsp = mysqli_query($links, $sql_chitietsp);
        while ($row = mysqli_fetch_array($query_chitietsp)) {
    ?>
    <hr>
    <!-- End -->
    <!-- Product detail -->
    <div class="container martop">
        <ol class="breadcrumb">
            <li><a href="./index.php">Trang chủ</a></li>
            <li><a href="./nikewebsite.php">Giày nike</a></li>
            <li class="active"><?php echo $row['tensp'] ?></li>
        </ol>
        <form action="./themgiohang.php?idsanpham=<?php echo $row['idsp']; ?>" method="POST">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <figure class="zoom" style="background-image: url(./admin/uploads/<?php echo $row['hinhanh'] ?>);"
                        onmousemove="zoom(event)">
                        <img src="./admin/uploads/<?php echo $row['hinhanh'] ?>">

                    </figure>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="row pad-left-50">
                        <div class="h2 product-title"><?php echo $row['tensp'] ?></div>
                        <p class="marg-bot-40 describe"><?php echo $row['chitiet'] ?></p>
                        <div class="marg-bot-40 ">
                            <span class="price-sale">400.000₫</span><span
                                class="price"><?php echo number_format($row['dongia'], 0, ',', '.') . 'đ'; ?></span>
                        </div>
                        <p class="color-product">Màu sắc</p>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3">
                                <img src="./admin/uploads/<?php echo $row['hinhanh'] ?>"
                                    class="color-product-img product-img marg-bot-40" alt="">
                            </div>

                        </div>
                        <div class="size-text">
                            <span class="color-product">Kích cỡ</span>
                            <a href="" class="size-text-help">HD cách chọn size giày</a>
                        </div>
                        <div class="row marg-bot-40">
                            <div class="col-xs-3 col-sm-2 col-md-3 col-lg-2">
                                <a href="" class="size-btn active"> 36
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-2 col-md-3 col-lg-2">
                                <a href="" class="size-btn"> 37
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-2 col-md-3 col-lg-2">
                                <a href="" class="size-btn">
                                    38
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-2 col-md-3 col-lg-2">
                                <a href="" class="size-btn">
                                    <div class="size-btn">39</div>
                                </a>
                            </div>
                        </div>


                        <button class="buy-product marg-bot-40" name="themgiohang">
                            <p>MUA Ngay</p>
                            <p>Đổi trả dễ dàng</p>
                        </button>

                        <div class="service">
                            <p>CHÍNH SÁCH GIAO HÀNG & ĐỔI TRẢ</p>
                        </div>
                        <div class="service">
                            <p>HƯỚNG DẪN BẢO QUẢN</p>
                        </div>
                        <div class="contact">
                            <span class="sales-pbx">TỔNG ĐÀI BÁN HÀNG </span>
                            <span class="contact-number">097.567.1080</span>
                            <p>Miễn phí từ (8:30 - 21:30) mỗi ngày</p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-7">
                    <div class="description">
                        <div class="description-title">Mô tả</div>
                        <p class="description-detail"><?php echo $row['mota'] ?></p>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <?php
        }
    }
    ?>
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-6 help">
                <img src="https://giayxshop.vn/wp-content/themes/bnw-child/images/qq1.png" alt="">
                <div class="help-text">
                    <p>Chất lượng sản phẩm?</p>
                    <span>Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay
                        khách
                        hàng!</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 help">
                <img src="https://giayxshop.vn/wp-content/themes/bnw-child/images/qq2.png" alt="">
                <div class="help-text">
                    <p>Chất lượng sản phẩm?</p>
                    <span>Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay
                        khách
                        hàng!</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 help">
                <img src="https://giayxshop.vn/wp-content/themes/bnw-child/images/qq3.png" alt="">
                <div class="help-text">
                    <p>Chất lượng sản phẩm?</p>
                    <span>Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay
                        khách
                        hàng!</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 help">
                <img src="https://giayxshop.vn/wp-content/themes/bnw-child/images/qq4.png" alt="">
                <div class="help-text">
                    <p>Chất lượng sản phẩm?</p>
                    <span>Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay
                        khách
                        hàng!</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 help">
                <img src="https://giayxshop.vn/wp-content/themes/bnw-child/images/qq5.png" alt="">
                <div class="help-text">
                    <p>Chất lượng sản phẩm?</p>
                    <span>Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay
                        khách
                        hàng!</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 help">
                <img src="https://giayxshop.vn/wp-content/themes/bnw-child/images/qq6.png" alt="">
                <div class="help-text">
                    <p>Chất lượng sản phẩm?</p>
                    <span>Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay
                        khách
                        hàng!</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 help">
                <img src="https://giayxshop.vn/wp-content/themes/bnw-child/images/qq7.png" alt="">
                <div class="help-text">
                    <p>Chất lượng sản phẩm?</p>
                    <span>Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay
                        khách
                        hàng!</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 help">
                <img src="https://giayxshop.vn/wp-content/themes/bnw-child/images/qq8.png" alt="">
                <div class="help-text">
                    <p>Chất lượng sản phẩm?</p>
                    <span>Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay
                        khách
                        hàng!</span>
                </div>
            </div>


        </div>
    </div>
    <hr />
    <div class="container">
        <div class="row">
            <div class="container">
                <h1 class="title_product_recomment">TOP SẢN PHẨM BÁN CHẠY</h1>
            </div>
            <!-- Start hot Product -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img class="img_product"
                            src="https://giayxshop.vn/wp-content/uploads/2020/11/z2139139865654_a52d65f6e7d10491daadab265ec0acc3-600x600.jpg"
                            alt="Converse"></a>
                    <div class="caption">
                        <a href="#">
                            <h4>Giày Thể Thao XSPORT Con.ver.se Classic Đen</h4>
                        </a>
                        <p class="price"> 160.000₫</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img class="img_product"
                            src="https://giayxshop.vn/wp-content/uploads/2020/11/z2139139865654_a52d65f6e7d10491daadab265ec0acc3-600x600.jpg"
                            alt="Prophere"></a>
                    <div class="caption">
                        <a href="#">
                            <h4>Giày Thể Thao XSPORT Prophere Rep</h4>
                        </a>
                        <p class="price"> 400.000₫</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img class="img_product" src="./img/nike-air-jordan.jpg" alt="nike-air"></a>
                    <div class="caption">
                        <a href="#">
                            <h4>Giày Thể Thao XSPORT Ni.ke Air Jordan 4 REP 1:1</h4>
                        </a>
                        <p class="price"> 600.000₫</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img class="img_product" src="./img/Alphabounce.jpg" alt="Alphabounce"></a>
                    <div class="caption">
                        <a href="#">
                            <h4>Giày XSPORT ADD Alphabounce Beyond REP</h4>
                        </a>
                        <p class="price"> 480.000₫</p>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-xs-block"></div>

        </div>
        <!-- footer -->
        <?php
        include("./pages/footer.php");
        ?>
        <script src="./js/app.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>