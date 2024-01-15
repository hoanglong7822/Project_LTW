<?php 
    include("./config.php");
    $sanpham_id=$_POST['txtid'];
    $sanpham_name=$_POST['txttensanpham'];
    $ten_loaisanpham=0;
    if(isset($_POST['txttenloaisanpham'])) 
        $ten_loaisanpham=$_POST['txttenloaisanpham'];
    $sql1 = "SELECT id_loaisanpham FROM tbl_loaisanpham WHERE ten_loaisanpham = '".$ten_loaisanpham."' ";
    $kq1 = mysqli_query($ket_noi, $sql1);
    $r=mysqli_fetch_array($kq1);
    $id_loaisanpham=1;
    if(isset( $r["id_loaisanpham"]))
        $id_loaisanpham=$r["id_loaisanpham"];

    $gia = $_POST['txtgia'];
    $so_luong = $_POST['txtsoluong'];
    $ghi_chu = $_POST['txtghichu'];
    $noi_luu_anh ="img/".basename($_FILES["txtanh"]["name"]);
    $luu_file_anh_tam=$_FILES["txtanh"]["tmp_name"];
    $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_luu_anh);

    if (!$ket_qua_up_anh) {
        $anh=null;
    }else{$anh = basename($_FILES["txtanh"]["name"]);}
    if($anh==null)
    {
        $sql = "
        UPDATE `tbl_sanpham` SET `id_loaisanpham` = '".$id_loaisanpham."', `sanpham_name` = '".$sanpham_name."', `sanpham_gia`='".$gia."', `sanpham_soluong`='".$so_luong."', `sanpham_mota` = '".$ghi_chu."' WHERE `tbl_sanpham`.`sanpham_id` = '".$sanpham_id."'
        ";
    }
    else
    {
        $sql = "
        UPDATE `tbl_sanpham` SET `id_loaisanpham` = '".$id_loaisanpham."', `sanpham_name` = '".$sanpham_name."', `anh` = '".$anh."', `sanpham_gia`='".$gia."', `sanpham_soluong`='".$so_luong."', `sanpham_mota` = '".$ghi_chu."' WHERE `tbl_sanpham`.`sanpham_id` = '".$sanpham_id."'
        ";
    }
    $kq = mysqli_query($ket_noi, $sql);
    if(isset($_GET['id']))
        {
            $loaisanphamid=$_GET['id'];
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
        
;?>