<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include("./config.php");
    if(isset($_POST['txttendangnhap'])) {
        $email=$_POST["txttendangnhap"];
    }
    if(isset($_POST['txtpassword'])) {
        $password=$_POST["txtpassword"];
    }
    echo $email;
    echo $password;
    $sql = "
            SELECT * 
            FROM tbl_admin where email='".$email."' and password='".$password."'
    ";
    $kq = mysqli_query($ket_noi, $sql);
    $soluong = mysqli_num_rows($kq);
    $tbl_admin= mysqli_fetch_array($kq);
    echo $soluong;
    if ($soluong==1) {
        session_start();
        $_SESSION['login']=1;
        $_SESSION['ten_admin']=$email;
        var_dump( $_SESSION['ten_admin']);
        $_SESSION['password']=$password;
        $_SESSION['admin_id']=$tbl_admin["admin_id"];
        $_SESSION['chuc_vu']=$tbl_admin["chuc_vu"];
        echo "
                <script type='text/javascript'>
                    window.location.href='index.php';
                </script>
            ";
    }
    else{
        echo "
                <script type='text/javascript'>
                    window.alert('Đăng nhập thất bại');
                    window.location.href='dangnhap.php';
                </script>
            ";
        }
;?>