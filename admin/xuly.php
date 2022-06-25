<?php
include('./config/config.php');
include('./Carbon/autoload.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
if (isset($_GET['code'])) {
    $code_cart = $_GET['code'];
    $sql_update = "UPDATE giohang SET trangthai=0 WHERE magiohang='" . $code_cart . "'";
    $query = mysqli_query($links, $sql_update);

    //Thong kê doanh thu
    $sql_lietke_dh = "SELECT * FROM cart_details,sanpham WHERE cart_details.idsp = sanpham.idsp AND cart_details.magiohang='$code_cart' ORDER BY cart_details.idcart_details DESC ";
    $query_lietke_dh = mysqli_query($links, $sql_lietke_dh);

    $sql_thongke = "SELECT * FROM thongke WHERE ngaydat = '$now'";
    $query_thongke = mysqli_query($links, $sql_thongke);

    $soluongmua = 0;
    $doanhthu = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $soluongmua += $row['soluongmua'];
        $doanhthu += $row['dongia'];
    }

    if (mysqli_num_rows($query_thongke) == 0) {
        $soluongban = $soluongmua;
        $doanhthu = $doanhthu;
        $donhang = 1;
        $sql_update_thongke = mysqli_query($links, "INSERT INTO thongke (ngaydat,soluongban,doanhthu,donhang) Value ('$now','$soluongban','$doanhthu','$donhang')");
    } elseif (mysqli_num_rows($query_thongke) != 0) {
        while ($row_tk = mysqli_fetch_array($query_thongke)) {
            $soluongban = $row_tk['soluongban'] + $soluongban;
            $doanhthu = $row_tk['doanhthu'] + $doanhthu;
            $donhang = $row_tk['donhang'] + 1;
            $sql_update_thongke = mysqli_query($links, "UPDATE thongke SET soluongban = '$soluongban', doanhthu = '$doanhthu', donhang='$donhang' WHERE ngaydat = '$now'");
        }
    }
    header('Location:donhang.php');
}