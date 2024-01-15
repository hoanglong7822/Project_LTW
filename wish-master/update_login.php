<?php
session_start();
require("connect.php");
$_SESSION["login"]=1;
$tendangnhap=$_POST['user_name'];
$matkhau=$_POST['pass_word'];
$_SESSION['ten_dang_nhap']=$tendangnhap;
$sql="SELECT * FROM `tbl_khachhang` WHERE `tenkh` = '$tendangnhap' and `password`='$matkhau'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($query);
$ketQuaTruyVan=$conn->query($sql);
$_SESSION['user']=$data;
$ketQuaTruyVan->num_rows;
if($ketQuaTruyVan->num_rows>0)
{
    if(isset($_GET['action']))
    {
        var_dump($_GET['action']);

        header("location:checkout.php");
    }
        else
        {
            header("location:index.php");            
        }
        
    }
else
{
    header("location:login.php");
}
?>