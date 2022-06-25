<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ-XSHOP</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="//code.jquery.com/jquery.js"></script>

</head>

<body>
    <!-- header -->
    <?php
    include("./pages/header.php");
    ?>

    <!-- Picture -->
    <div class="container martop">
        <img src="https://giayxshop.vn/wp-content/uploads/2021/10/5875457-1536x1024.jpg" class="img-responsive"
            alt="Responsive image">

        <div class="row shadow">
            <div class="col-md-3 icon_form">
                <span class="glyphicon glyphicon-road icon_under_picture"></span>
                <h5>GIAO HÀNG TOÀN QUỐC</h5>
                <h6 class="color_font">Vận chuyển khắp Việt Nam</h6>
            </div>
            <div class="col-md-3 icon_form">
                <span class="glyphicon glyphicon-usd icon_under_picture"></span>
                <h5>THANH TOÁN KHI NHẬN HÀNG</h5>
                <h6 class="color_font">Nhận hàng tại nhà rồi thanh toán</h6>
            </div>
            <div class="col-md-3 icon_form">
                <span class="glyphicon glyphicon-wrench icon_under_picture"></span>
                <h5>BẢO HÀNH DÀI HẠN</h5>
                <h6 class="color_font">Bảo hàng lên đến 60 ngày</h6>
            </div>
            <div class="col-md-3 icon_form">
                <span class="glyphicon glyphicon-refresh icon_under_picture"></span>
                <h5>ĐỔI HÀNG DỄ DÀNG</h5>
                <h6 class="color_font">Đổi hàng thoải mái trong 30 ngày</h6>
            </div>
        </div>

    </div>
    <!-- END PICTURE -->
    <div class="container">
        <h1 class="title_product">TOP SẢN PHẨM MỚI NHẤT</h1>
    </div>
    <?php
    $sql_product = "SELECT * FROM sanpham ORDER BY sanpham.idsp DESC LIMIT 16";
    $query_product = mysqli_query($links, $sql_product);
    ?>
    <!-- Start new Product -->
    <div class="container">
        <div class="row mgtop">
            <?php
            while ($row = mysqli_fetch_array($query_product)) {
            ?>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <a href="chitietsp.php?id=<?php echo $row['idsp'] ?>">
                    <div class="thumbnail">
                        <img class="img_product" src="./admin/uploads/<?php echo $row['hinhanh']; ?>">
                        <div class="caption">

                            <h4><?php echo $row['tensp']; ?></h4>

                            <p class="price"><?php echo number_format($row['dongia'], 0, ',', '.') . 'đ'; ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>
            <div class="clearfix visible-xs-block"></div>

        </div>
        <!-- End new Product -->
        <!-- Phần xem thêm -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 mar-t30">
                    <div class="gender-type">
                        <img src="./img/giaythethaonam.jpg" alt="">
                        <div class="overlay">
                            <p class="gender-type-text">Giày nam</p>
                            <button class="gender-type-btn">Xem ngay</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mar-t30">
                    <div class="gender-type">
                        <img src="./img/Giaynu.jpg" alt="">
                        <div class="overlay">
                            <p class="gender-type-text">Giày nữ</p>
                            <button class="gender-type-btn">Xem ngay</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mar-t30">
                    <div class="gender-type">
                        <img src="./img/giaydoi.jpg" alt="">
                        <div class="overlay">
                            <p class="gender-type-text">Giày đôi</p>
                            <button class="gender-type-btn">Xem ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="title_product">TOP SẢN PHẨM BÁN CHẠY</h1>
        </div>
        <!-- Start hot Product -->
        <div class="container">
            <div class="row mgtop">
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
            <div class="row mgtop">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img class="img_product" src="./img/PumaF1.jpg" alt="Converse"></a>
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
                        <a href="#"><img class="img_product" src="./img/Converse.jpg" alt="Prophere"></a>
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
                        <a href="#"><img class="img_product" src="./img/VanValultXFear.jpg" alt="nike-air"></a>
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
                        <a href="#"><img class="img_product" src="./img/SụcMLBNY.jpg" alt="Alphabounce"></a>
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
            <div class="row mgtop">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img class="img_product" src="./img/Converse-classic.jpg" alt="Converse"></a>
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
                        <a href="#"><img class="img_product" src="./img/Prophere-rep.jpg" alt="Prophere"></a>
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
        </div>
        <!-- End hot Product -->
        <div class="container brg_color">
            <div class="row ">
                <div class="col-xs-12 col-sm-4 col-md-4 about">
                    <p class="about-text">Hơn 6 năm phát triển, XSHOP luôn mang đến những mẫu giày chất lượng tốt nhất
                        với
                        giá cả hợp lí nhất
                        đến tay người tiêu dùng với hệ thống cửa hàng Số 1 Hà Nội và bán online khắp Việt Nam.</p>
                    <p class="about-number" data-target="1349840"></p>
                    <p class="about-text">Số Sản Phẩm Đã Bán</p>
                    <p class="about-number" data-target="567392"></p>
                    <p class="about-text">Khách Hàng Đã Mua</p>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 about-video">
                    <iframe width="560" height="315" class="video_xshop"
                        src="https://www.youtube.com/embed/a1ILAowCiOw?start=4" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                    </iframe>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php
        include("./pages/footer.php");
        ?>

        <script src="./js/app.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>