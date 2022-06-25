<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIKE - XSHOP</title>
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/category.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
</head>

<body>
    <!-- Top bar -->
    <?php
    include("./pages/header.php");
    $sql_pro = "SELECT * FROM sanpham WHERE sanpham.iddanhmuc='$_GET[id]' ORDER BY idsp DESC";
    $query_pro = mysqli_query($links, $sql_pro);
    //get ten danh muc
    $sql_cate = "SELECT * FROM danhmucsp WHERE danhmucsp.iddanhmuc='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($links, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
    // get danh muc
    $sql_danhmuc = "SELECT * FROM danhmucsp ORDER BY iddanhmuc ";
    $query_danhmuc = mysqli_query($links, $sql_danhmuc);
    ?>
    <!-- End Header -->
    <!-- Big content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="pad_title_content">
                    <h1 class="page_title"><?php echo $row_title['tendanhmuc'] ?></h1>
                    <ol class="breadcrumb">
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li class="active"><?php echo $row_title['tendanhmuc'] ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- Main Content -->
    <div class="main-content">
        <div class="row pad-40">
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                <h4>
                    Danh mục sản phẩm
                </h4>
                <ul class="sidebar-list">
                    <li><a href="#">Giày Adidas</a></li>
                    <li><a href="#">Giày đôi</a></li>
                    <li><a href="#">Giày nam</a></li>
                    <li><a href="#">Giày Nike</a></li>
                    <li><a href="#">Giày nữ</a></li>
                    <li class="active"><a href="#">Giày thời trang</a></li>
                    <li><a href="#">Giày Vans</a></li>
                    <li><a href="#">Không tên</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9">
                <!--  Tool Bar -->
                <div class="row shop-toolbar">
                    <div class="col-md-6">
                        <div class="row btn-group">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Sắp xếp <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Thứ tự theo mức độ phổ biến</a></li>
                                    <li><a href="#">Thứ tự theo điểm đánh giá</a></li>
                                    <li><a href="#">Thứ tự theo giá: thấp đến cao</a></li>
                                    <li><a href="#">Thứ tự theo giá: cao xuống thấp</a></li>

                                </ul>
                            </div>
                            <div class="col-md-8 total_product">

                                <p id="total_product_text">Hiển thị 1-12 của 18 sản phẩm</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 grid-icon">
                        <i class="fa-solid fa-table-cells"></i>
                        <i class="fa-solid fa-table-cells-large"></i>
                        <i class="fa-solid fa-square-full"></i>
                    </div>
                </div>

                <div class="row mgtop">
                    <?php
                    while ($row_pro = mysqli_fetch_array($query_pro)) {
                    ?>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <a href="chitietsp.php?id=<?php echo $row_pro['idsp'] ?>">
                            <div class="thumbnail">
                                <img class="img_product" src="./admin/uploads/<?php echo $row_pro['hinhanh']; ?>">
                                <div class="caption">

                                    <h4><?php echo $row_pro['tensp'] ?></h4>

                                    <p class="price"><?php echo number_format($row_pro['dongia'], 0, ',', '.') . 'đ'; ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="clearfix visible-xs-block"></div>

                </div>
            </div>
        </div>
        <div class="row text-center">
            <ul class="pagination">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
    <?php
    include("./pages/footer.php");
    ?>
    <script src="./js/app.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>