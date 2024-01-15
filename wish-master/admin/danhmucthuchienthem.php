<?php 
    include("./config.php");

    $ten_loaisanpham = $_POST['txtTenloaisanpham'];
 
    $sql = "
        INSERT INTO `tbl_loaisanpham` (`ten_loaisanpham`) VALUES ('".$ten_loaisanpham."')
        ";
    mysqli_query($ket_noi,$sql);
    echo "
        <script type='text/javascript'>
            window.location.href='danhmuc.php';
        </script>
    ";
;?>