<?php 
    session_start();
    include("./config.php");

    $id=$_GET['id'];
    $sql1 = "SELECT DISTINCT tbl_admin.admin_id FROM tbl_don_hang JOIN tbl_admin ON  tbl_don_hang.admin_id=tbl_admin.admin_id WHERE tbl_admin.admin_id='".$id."' ";
    $kq1 = mysqli_query($ket_noi, $sql1);
    $soluong = mysqli_num_rows($kq1);
    if($soluong==0)
    {
        $sql2 = "
             DELETE FROM `tbl_admin` WHERE `tbl_admin`.`admin_id` = '".$id."';
              ";
        $kq2 = mysqli_query($ket_noi, $sql2);
        echo "
            <script type='text/javascript'>
                window.location.href='quantrivien.php';
            </script>
    ";
    }
;?>