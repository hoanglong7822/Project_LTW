<?php 
    include("./config.php");

    $id_loaisanpham=$_POST['txtID'];
    $ten_loaisanpham = $_POST['txtTenloaisanpham'];

    $sql = "UPDATE `tbl_loaisanpham` SET `ten_loaisanpham` = '".$ten_loaisanpham."' WHERE `tbl_loaisanpham`.`id_loaisanpham` = '".$id_loaisanpham."'
        ";

         
    $kq = mysqli_query($ket_noi, $sql);

    echo "
        <script type='text/javascript'>
            window.location.href='danhmuc.php';
        </script>
    ";
;?>



