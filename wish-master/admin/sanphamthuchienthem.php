<?php 
    include("./config.php");
    $sanpham_name=$_POST['txttensanpham'];
    if(isset($_POST['txttenloaisanpham'])) 
        $ten_loaisanpham=$_POST['txttenloaisanpham'];
    $sql1 = "SELECT id_loaisanpham FROM tbl_loaisanpham WHERE ten_loaisanpham= '".$ten_loaisanpham."' ";
    $kq1 = mysqli_query($ket_noi, $sql1);
    $r=mysqli_fetch_array($kq1);
    // $id_loaisanpham=1;
    if(isset( $r["id_loaisanpham"]))
        $id_loaisanpham=$r["id_loaisanpham"];

    $gia= $_POST['txtGiaban'];
    $so_luong = $_POST['txtSoluong'];
    $mo_ta = $_POST['txtGhichu'];

    $noi_luu_anh ="../anh/".basename($_FILES["txtHinhanh"]["name"]);
    $luu_file_anh_tam=$_FILES["txtHinhanh"]["tmp_name"];
    $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_luu_anh);

    if (!$ket_qua_up_anh) {
        $anh=null;
    }else{$anh = basename($_FILES["txtHinhanh"]["name"]);}
    $sql = "
        INSERT INTO `tbl_sanpham` (`id_loaisanpham`, `sanpham_name`,  `anh`, `sanpham_gia`, `sanpham_soluong`, `sanpham_mota`) VALUES ('".$id_loaisanpham."', '".$sanpham_name."', '".$anh."', '".$gia."', '".$so_luong."', '".$mo_ta."');
        ";
    $kq = mysqli_query($ket_noi, $sql);

    if(isset($_GET['id']))
        {
            $loia=$_GET['id'];
            echo "
            <script type='text/javascript'>
                window.location.href='sanpham.php?id=$id_loaisanpham';
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
;?>