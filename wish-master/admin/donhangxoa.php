
<?php 
    include("./config.php");

    $donhang_id=$_GET['id'];
    $sql1 = "
             DELETE FROM `tbl_giohang` WHERE `tbl_giohang`.`donhang_id` = '".$donhang_id."';
              ";

    $kq1 = mysqli_query($ket_noi, $sql1);
    $sql2 = "
             DELETE FROM `tbl_donhang` WHERE `tbl_donhang`.`donhang_id` ='".$donhang_id."';
              ";
            
    $kq2 = mysqli_query($ket_noi, $sql2);
    echo "
            <script type='text/javascript'>
                window.location.href='hoadon.php';
            </script>
    ";
    
;?>
