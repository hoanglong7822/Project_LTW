<?php
include("./config.php");
if(isset($_GET['idadmin']))
{
$idhd = $_GET['idhd'];
$idadmin = $_GET['idadmin'];
$sql="UPDATE `tbl_don_hang` SET `tinhtrang`='1',`admin_id`='$idadmin' WHERE dh_id=$idhd";
$kq = mysqli_query($ket_noi, $sql);
    echo "
        <script type='text/javascript'>
            window.location.href='hoadon.php';
        </script>
    ";
}
else
{
	$idhd = $_GET['idhd'];
	$sql = "UPDATE `tbl_donhang` SET `tinhtrang` = '2' WHERE dh_id = " .$idhd;
	$kq = mysqli_query($ket_noi, $sql);
	    echo "
	        <script type='text/javascript'>
	            window.location.href='../lichsumuahang.php';
	        </script>
	    ";
}
