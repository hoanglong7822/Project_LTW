<?php 
    include("./config.php");

    $id_loaisanpham=$_GET['id'];
    $sql1 = "SELECT DISTINCT tbl_loaisanpham.id_loaisanpham FROM tbl_loaisanpham JOIN tbl_sanpham ON  tbl_loaisanpham.id_loaisanpham=tbl_sanpham.id_loaisanpham WHERE tbl_loaisanpham.id_loaisanpham = '".$id_loaisanpham."' ";
    $kq1 = mysqli_query($ket_noi, $sql1);
    $soluong = mysqli_num_rows($kq1);
    if($soluong==0)
    {
        $sql2 = "
             DELETE FROM `tbl_loaisanpham` WHERE `tbl_loaisanpham`.`id_loaisanpham` = '".$id_loaisanpham."';
              ";
        $kq2 = mysqli_query($ket_noi, $sql2);
        echo "
            <script type='text/javascript'>
                window.location.href='danhmuc.php';
            </script>
    ";
    }
;?>