<?php
session_start();
include("./config/config.php");
require './Carbon/autoload.php';

use Carbon\Carbon;

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">



    <title>XSHOP-Admin</title>

    <!-- Favicons -->
    <link href="img/tải xuống.png" rel="icon">
    <link href="img/tải xuống.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css-dashborad/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css-dashborad/themes/all-themes.css" rel="stylesheet" />
    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->



    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>GIÀY<span>XSHOP</span></b></a>


            </ul>
            <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li>

                        <a class="logout" href="login.php">
                            <?php
                            if (isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            } else
                                echo 'Đăng nhập';
                            ?>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="index.php"><img src="img/logo.png" class="img-circle" width="130"></a>
                    </p>
                    <h5 class="centered">Thời Trang Hiện Đại</h5>
                    <li class="mt">
                        <a class="active" href="index.php">
                            <i class="fa fa-home"></i>
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-edit"></i>
                            <span>Quản Lý</span>
                        </a>
                        <ul class="sub">
                            <li><a href="donhang.php">Quản Lý Đơn Hàng</a></li>
                            <li><a href="./quanlisp.php">Quản Lý Sản Phẩm</a></li>
                            <li><a href="./danhmucsp.php">Danh mục sản phẩm</a></li>
                            <li><a href="khachhang.php">Quản Lý Khách Hàng</a></li>
                            <li><a href="quanlinhanvien.php">Quản Lý Nhân viên</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Báo Cáo</span>
                        </a>
                        <ul class="sub">
                            <li><a href="#">báo cáo , thống kê</a></li>


                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Pages</span>
                        </a>
                        <ul class="sub">
                            <li><a href="#">GIÀY NIKE</a></li>
                            <li><a href="#">GIÀY ADIDAS</a></li>
                            <li><a href="#">GIÀY THỜI TRANG</a></li>
                            <li><a href="#">GIÀY VANS</a></li>
                            <li><a href="#">Kiểm Tra Đơn Hàng</a></li>
                            <li><a href="#">Tin Tức </a></li>
                            <li><a href="#">Liên Hệ</a></li>
                            <li><a href="login.html">Đăng Nhập</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-user"></i>
                            <span>Tài Khoản</span>
                        </a>
                        <ul class="sub">
                            <li><a href="#">Thay đổi thông tin</a></li>
                            <li><a href="#">Thoát</a></li>

                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper"><br>
                <div class="container-fluid">
                    <div class="block-header">
                        <h2>DASHBOARD</h2>
                    </div>

                    <!-- Widgets -->
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="info-box bg-pink hover-expand-effect">

                                <div class="icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="content">
                                    <?php
                                    $sql_danhmuc = "SELECT * FROM danhmucsp";
                                    $result_danhmuc = mysqli_query($links, $sql_danhmuc);
                                    $row_danhmuc  = mysqli_num_rows($result_danhmuc);

                                    ?>
                                    <div class="text">DANH MỤC</div>
                                    <div class="huge" style="font-weight: normal;font-size: 26px;margin-top: -4px">
                                        <?php echo $row_danhmuc ?></div>
                                </div>
                            </div>



                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">format_align_justify</i>
                                </div>
                                <div class="content">
                                    <?php
                                    $sql_sp = "SELECT * FROM sanpham";
                                    $result_sp = mysqli_query($links, $sql_sp);
                                    $row_sp  = mysqli_num_rows($result_sp);

                                    ?>
                                    <div class="text">SẢN PHẨM</div>
                                    <div class="huge" style="font-weight: normal;font-size: 26px;margin-top: -4px">
                                        <?php echo $row_sp ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">shopping_cart</i>
                                </div>
                                <div class="content">
                                    <?php
                                    $sql_order = "SELECT * FROM giohang";
                                    $result_order = mysqli_query($links, $sql_order);
                                    $row_order  = mysqli_num_rows($result_order);

                                    ?>
                                    <div class="text">ĐƠN HÀNG</div>
                                    <div class="huge" style="font-weight: normal;font-size: 26px;margin-top: -4px">
                                        <?php echo  $row_order ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">person_add</i>
                                </div>
                                <div class="content">
                                    <?php
                                    $sql_khachhang = "SELECT * FROM khachhang";
                                    $result_khachhang = mysqli_query($links, $sql_khachhang);
                                    $row_khachhang  = mysqli_num_rows($result_khachhang);

                                    ?>
                                    <div class="text">KHÁCH HÀNG</div>
                                    <div class="huge" style="font-weight: normal;font-size: 26px;margin-top: -4px">
                                        <?php echo  $row_khachhang ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-red hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <div class="content">
                                    <?php
                                    $sql_nhanvien = "SELECT * FROM nhanvien";
                                    $result_nhanvien = mysqli_query($links, $sql_nhanvien);
                                    $row_nhanvien  = mysqli_num_rows($result_nhanvien);

                                    ?>
                                    <div class="text">NHÂN VIÊN</div>
                                    <div class="huge" style="font-weight: normal;font-size: 26px;margin-top: -4px">
                                        <?php echo  $row_nhanvien ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-blue grey hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">event_note</i>
                                </div>
                                <div class="content">
                                    <?php
                                    $sql_danhmucbaiviet = "SELECT * FROM danhmucbaiviet";
                                    $result_danhmucbaiviet = mysqli_query($links, $sql_danhmucbaiviet);
                                    $row_danhmucbaiviet  = mysqli_num_rows($result_danhmucbaiviet);

                                    ?>
                                    <div class="text">BÀI VIẾT</div>
                                    <div class="huge" style="font-weight: normal;font-size: 26px;margin-top: -4px">
                                        <?php echo  $row_danhmucbaiviet ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-amber hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">account_circle</i>
                                </div>
                                <div class="content">
                                    <?php
                                    $sql_user = "SELECT * FROM taikhoan";
                                    $result_user = mysqli_query($links, $sql_user);
                                    $row_user  = mysqli_num_rows($result_user);

                                    ?>
                                    <div class="text">TÀI KHOẢN</div>
                                    <div class="huge" style="font-weight: normal;font-size: 26px;margin-top: -4px">
                                        <?php echo  $row_user ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-blue-grey hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">monetization_on</i>
                                </div>
                                <div class="content">
                                    <?php
                                    $result_doanhthu = mysqli_query($links, "SELECT SUM(thanhtien) FROM cart_details WHERE thanhtien > 0");
                                    $row_doanhthu = mysqli_fetch_array($result_doanhthu);




                                    ?>
                                    <div class="text">DOANH THU</div>
                                    <div class="huge" style="font-weight: normal;font-size: 26px;margin-top: -4px">
                                        <?php echo number_format($row_doanhthu[0], 0, ',', '.') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #END# Widgets -->
                    <!-- CPU Usage -->

                    <!-- #END# CPU Usage -->
                    <?php
                    $chart_sanpham = "SELECT `danhmucsp`.*,COUNT(sanpham.iddanhmuc) AS 'number_cate' FROM sanpham INNER JOIN danhmucsp ON sanpham.iddanhmuc = danhmucsp.iddanhmuc GROUP BY sanpham.iddanhmuc;";
                    $query = mysqli_query($links, $chart_sanpham);
                    $data = [];
                    while ($row = mysqli_fetch_array($query)) {
                        $data[] = $row;
                    }
                    $query_thongke = "SELECT * FROM thongke";
                    $result = mysqli_query($links, $query_thongke);
                    $chart_data = '';
                    while ($row_thongke = mysqli_fetch_array($result)) {
                        $chart_data .= "{ time:'" . $row_thongke["ngaydat"] . "', order:" . $row_thongke["donhang"] . ", sales:" . $row_thongke["doanhthu"] . ",quantity:" . $row_thongke["soluongban"] . "}, ";
                    }
                    $chart_data = substr($chart_data, 0, -2);
                    ?>
                    <div class="row mt">

                        <!-- SERVER STATUS PANELS -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="grey-panel donut-chart">
                                <div class="grey-header">
                                    <h5>Thống kê sản phẩm</h5>
                                </div>
                                <div id="piechart" style="width: 340px; height: 350px"></div>

                            </div>

                            <!-- /grey-panel -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            <div class="grey-panel">
                                <div class="grey-header">
                                    <h5>Thống kê doanh thu</h5>
                                </div>
                                <div id="chart"></div>

                            </div>
                        </div>

                    </div>
                    <div class="row mt">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="grey-panel">
                                <div class="grey-header">
                                    <h5>Thống kê doanh thu</h5>
                                </div>
                                <div id="chart"></div>

                            </div>
                        </div>
                    </div>



                </div>

            </section>
        </section>

    </section>
    <footer class=" site-footer">
        <div class="text-center">
            <p>
                &copy; Hệ thống cửa hàng <strong>Xshop</strong>. Luôn sẵn sàng phục vụ
            </p>
            <div class="credits">
                <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
                Bản quyền © 2018 <a href="https://templatemag.com/"> Giày xShop.</a>
            </div>
            <a href="index.php#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script> -->

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/gritter-conf.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.0.js"></script> -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!--script for this page-->

    <script type="text/javascript">
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to XSHOP!',
            // (string | mandatory) the text inside the notification
            text: 'Di chuột qua tôi để bật Nút đóng. Bạn có thể ẩn thanh bên trái khi nhấp vào nút bên cạnh biểu trưng.',
            // (string | optional) the image to display on the left
            image: 'img/logo.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
    </script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['tên danh mục', 'Số sản phẩm'],
            <?php
                foreach ($data as $key) {

                    echo "['" . $key["tendanhmuc"] . "', " . $key['number_cate'] . "],";
                }
                ?>
        ]);

        var options = {
            title: 'Sản phẩm'
        };

        var chart = new google.visualization.PieChart(document.getElementById(
            'piechart'));

        chart.draw(data, options);
    }
    </script>
    <script>
    Morris.Area({
        element: 'chart',
        data: [<?php echo $chart_data; ?>],
        xkey: 'time',
        ykeys: ['order', 'sales', 'quantity'],
        labels: ['donhang', 'doanhthu', 'số lượng'],
        hideHover: 'auto',
        stacked: true
    });
    </script>



</body>

</html>