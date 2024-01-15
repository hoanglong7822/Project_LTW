<?php
require("connect.php");
$tendangnhap=$_POST['name'];
$matkhau=($_POST['password']);
$email=$_POST['email'];
$sql="INSERT INTO `tbl_khachhang`(`tenkh`,`password`,`email`) VALUES ('$tendangnhap','$matkhau','$email')";
if($conn->query($sql))
{
    header('location:index.php');
}
else
{
    header('location:login.php');
}