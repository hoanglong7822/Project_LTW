
<?php
 $date = getdate();
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$phone=$_POST['phone_number'];
$email=$_POST['email'];
$city=$_POST['city'];
$address=$_POST['address'];
$comment=$_POST['comment'];
$id_kh=$_POST['id_khachhang'];
$total=$_POST['total'];
$date=date("G:i m/d/y", time());
?>
<?php
session_start();
$cart=(isset($_SESSION['cart']))?$_SESSION['cart']: [];
//echo"<pre>";
//print_r($_SESSION['cart']);
require("connect.php");
$sql="INSERT INTO `tbl_don_hang`(`id_khachhang`,`dh_ho`, `dh_ten`, `dh_sdt`, `dh_email`, `dh_city`, `dh_address`, `dh_ghichu`,`total_price`,`date`) VALUES ($id_kh,'$lname','$fname','$phone','$email','$city','$address','$comment','$total','$date')";


if($conn->query($sql))
{
    $id_order=mysqli_insert_id($conn); 
foreach($cart as $value)
{
    mysqli_query($conn,"INSERT INTO `tbl_order_detail`(`id_order_detail`, `id_san_pham`, `quantity`, `price`) VALUES ('$id_order','$value[id]','$value[quantity]','$value[price]')");
}
unset($_SESSION['cart']);
header("location:index.php");
}
?>

