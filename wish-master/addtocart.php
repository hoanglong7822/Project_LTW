
<?php
session_start();
require("connect.php");
$action=(isset($_GET['action']))?$_GET['action']:'add';
$quantity=(isset($_GET['quantity']))?$_GET['quantity']:1;

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
//else echo"ko có";
$query=mysqli_query($conn,"select * from tbl_sanpham where sanpham_id = $id ");
if($query)
{
    $product= mysqli_fetch_assoc($query);
}
$item=
[
    'id'=>$product['sanpham_id'],
    'name'=>$product['sanpham_name'],
    'image'=>$product['anh'],
    'price'=>$product['sanpham_gia'],
    'quantity'=>$quantity
];
if($action=='update')
{
    $_SESSION['cart'][$id]['quantity']=$quantity;
}
    if(isset($_SESSION['cart'][$id]))

        {
            $_SESSION['cart'][$id]['quantity'] = $quantity;
        }
        else
        {
            $_SESSION['cart'][$id]=$item;
        }
header('location:cart.php');
//echo"<pre>";
//print_r($_SESSION['cart']);
?>