
<?php 
    include("./config.php");

    $sanpham_id=$_GET['sanphamid'];
    $sql1 = "SELECT * FROM `tbl_sanpham` WHERE `sanpham_id` = $sanpham_id    ";
    $kq1 = mysqli_query($ket_noi, $sql1);
    $so_luong = mysqli_num_rows($kq1);
    var_dump($so_luong);
    if($so_luong==0)
    {   
        $sql2 = "
             DELETE FROM `tbl_sanpham` WHERE `tbl_sanpham`.`sanpham_id` = '".$sanpham_id."';
              ";
        $kq2 = mysqli_query($ket_noi, $sql2);

        if(isset($_GET['loaisanphamid']))
        {
            $loaisanphamid=$_GET['loaisanphamid'];
            echo "
            <script type='text/javascript'>
                window.location.href='sanpham.php?id=$loaisanphamid';
            </script>";
        }
        else
        {
        echo "
            <script type='text/javascript'>
                window.location.href='toanbosanpham.php';
            </script>
    ";
        }
    }

;?>
