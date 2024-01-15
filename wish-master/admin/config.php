<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn LẤY, THÊM MỚI, SỬA, XÓA dữ liệu
	$ket_noi = mysqli_connect("127.0.0.1", "root", "", "tbl_store", 3306);
	if (mysqli_connect_errno()) {
    	die ("Failed to connect to MySQL: " . mysqli_connect_error());
    }
?>