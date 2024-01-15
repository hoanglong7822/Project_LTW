<?php 
    include("./config.php");

    $ho_ten = $_POST['txthoten'];
    $chuc_vu = $_POST['txtchucvu'];
    $dien_thoai = $_POST['txtdienthoai'];
    $email = $_POST['txtemail'];
    $password =1;
    $sql = "
        INSERT INTO `tbl_admin` (`admin_id`, `ten_admin`, `sdt`,`password`, `email`, `chuc_vu`) VALUES (NULL, '".$ho_ten."', '".$dien_thoai."', '".$password."', '".$email."', '".$chuc_vu."');
        ";

    $kq = mysqli_query($ket_noi, $sql);

    echo "
        <script type='text/javascript'>
            window.location.href='quantrivien.php';
        </script>
    ";
;?>