<?php
include_once("./admin/config/config.php");
$sql_danhmuc = "SELECT * FROM danhmucsp ORDER BY iddanhmuc DESC";
$query_danhmuc = mysqli_query($links, $sql_danhmuc);
?>
<!-- heading top bar -->
<header>
    <div class="topbar">
        <div class="topbar-container">
            <div class="topbar-left">
                <i class="topbar-icon fa-solid fa-bags-shopping"></i>
                <span>Hệ thống cửa hàng xshop</span>
            </div>
            <div class="topbar-right"></div>
        </div>
    </div>
    <div class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="./img/logo-brand.png" alt="">
                </a>
            </div>
            <div class="navbar_pc">
                <div class="navbar-menu">
                    <ul class="navbar-menu-list">
                        <?php
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                        <li class="navbar-menu-item">
                            <a href="danhmuc.php?id=<?php echo $row_danhmuc['iddanhmuc'] ?>">
                                <?php echo $row_danhmuc['tendanhmuc'] ?>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="navbar-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <a href="../webbangiay/giohang.php">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>

                </div>
            </div>
            <i class="fa-solid fa-bars nav-menu-btn"></i>
            <div class="nav-overlay"></div>
            <div class="navbar-mobile">
                <i class="fa-solid fa-xmark close-btn"></i>
                <div class="navbar-mobile-icon">
                    <div class="navbar-search">
                        <input type="text" placeholder="Tìm sản phẩm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <a href="../webbangiay/giohang.php">
                        <i class="navbar-cart fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
                <div class="navbar-mobile-menu">
                    <ul class="navbar-mobile-menu-list">
                        <li class="navbar-mobile-menu-item">Giày NIKE</li>
                        <li class="navbar-mobile-menu-item">Giày NIKE</li>
                        <li class="navbar-mobile-menu-item">Giày NIKE</li>
                        <li class="navbar-mobile-menu-item">Giày NIKE</li>
                        <?php
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                        <li class="navbar-mobile-menu-item">
                            <a href="danhmuc.php?id=<?php echo $row_danhmuc['iddanhmuc'] ?>">
                                <?php echo $row_danhmuc['tendanhmuc'] ?>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>