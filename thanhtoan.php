<?php

session_start();
include('./admin/config/config.php');
require('./admin/Carbon/autoload.php');
require('mail/sendmail.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');

if (isset($_POST['thanhtoan'])) {
    $name = $_POST['hoten'];
    $sdt = $_POST['phone'];
    $email = $_POST['email'];
    $diachi = $_POST['address'];
    $note = $_POST['note'];
    $giaohang = $_POST['inlineRadioOptions'];
    $sql_khachhang = "INSERT INTO khachhang(hoten,sdt,diachi,note,email,giaohang) VALUES ('$name','$sdt','$diachi','$note','$email','$giaohang')";
    $query_khachhang = mysqli_query($links, $sql_khachhang);
    $_SESSION['email'] = $email;
}
$code_order = 'XSHOPNEW' . rand(0, 9999);
$insert_cart = "INSERT INTO giohang(magiohang,trangthai,hoten,sdt,diachi,cart_date) VALUE('" . $code_order . "',1,'" . $name . "','" . $sdt . "','" . $diachi . "','" . $now . "')";
$cart_query = mysqli_query($links, $insert_cart);
if ($cart_query) {
    //them gio hang chi tiet
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_details = "INSERT INTO cart_details(magiohang,idsp,soluongmua,thanhtien) VALUE('" . $code_order . "','" . $id_sanpham . "','" . $soluong . "','" . $_SESSION['doanhthu'] . "')";
        mysqli_query($links, $insert_order_details);
    }
    $tieude = "Bạn có đơn hàng từ XSHOP thành công! ";
    $noidung = "<p> Cảm ơn quý khách đã đặt hàng XSHOP mã đơn hàng : " . $code_order . " </p>";
    $noidung .= "<H4> THÔNG TIN ĐƠN HÀNG - DÀNH CHO NGƯỜI MUA </H4>";
    foreach ($_SESSION['cart'] as $cart_item) {
        $noidung .= "<ul> 
       
         <li> " . $cart_item['tensp'] . " </li>
         <li>" . $cart_item['soluong'] . " </li>
         <li>  " . number_format($cart_item['dongia'], 0, ',', '.') . " đ </li>
         </ul>";
    }


    $maildathang = $_SESSION['email'];
    $mail = new Mailer();
    $mail->dathangmail($tieude, $noidung, $maildathang);
}
unset($_SESSION['cart']);
header('Location:camon.php');