<?php 
    include("./config.php");

    $khachhang_id=$_GET['id'];
    $sql1 = "SELECT DISTINCT tbl_khachhang.khachhang_id FROM tbl_khachhang JOIN tbl_donhang ON  tbl_khachhang.khachhang_id=tbl_donhang.khachhang_id WHERE tbl_khachhang.khachhang_id = '".$khachhang_id."' ";
    $kq1 = mysqli_query($ket_noi, $sql1);
    $soluong = mysqli_num_rows($kq1);
    if($soluong==0)
    {
        $sql2 = "
             DELETE FROM `tbl_khachhang` WHERE `tbl_khachhang`.`khachhang_id` = '".$khachhang_id."';
              ";
        $kq2 = mysqli_query($ket_noi, $sql2);
        echo "
            <script type='text/javascript'>
                window.location.href='khachhang.php';
            </script>
    ";
    }
;?>