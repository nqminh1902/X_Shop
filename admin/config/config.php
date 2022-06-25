<?php
error_reporting(0);
$host = "localhost";
$user = "webgiay";
$password = "";
$datbase = "webgiay";
$links = mysqli_connect($host, $user, $password);
mysqli_select_db($links, $datbase);
mysqli_set_charset($links, "utf8");