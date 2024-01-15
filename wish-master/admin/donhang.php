<?php
session_start();
if(!isset($_SESSION['login']))
{
    echo "
                <script type='text/javascript'>
                    window.location.href='dang_nhap.php';
                </script>
            ";
}
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>May | Admin | Đơn hàng</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        include("slide.php");
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị đơn hàng</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Quản trị hệ thống</a></li>
                            <li class="breadcrumb-item active">Quản trị đơn hàng</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Đơn hàng
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Khách hàng</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Tổng số</th>
                                            <th>Tổng tiền</th>
                                            <th>Ngày xuất </th>
                                            <th>Nhân viên thanh toán</th>
                                            <th>Tình trạng</th>
                                            <th>Chi tiết</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include("./config.php");
                                        
                                        $sql = " SELECT * FROM tbl_don_hang, tbl_khachhang, tbl_admin WHERE tbl_don_hang.id_khachhang=tbl_khachhang.khachhang_id and tbl_don_hang.admin_id= tbl_admin.admin_id;";
                                        $ket_qua = mysqli_query($ket_noi, $sql);
                                        $i=0;
                                        while ($row = mysqli_fetch_array($ket_qua)) {
                                            $i++;
                                    ;?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row["dh_id"];?></td>
                                            <td><?php echo $row["dh_ten"];?></td>
                                            <td><?php echo $row["dh_email"];?></td>
                                            <td><?php echo $row["dh_sdt"];?></td>
                                            <td><?php echo $row["dh_address"];?></td>
                                            <?php 
                                                $sql1 = "
                                                SELECT SUM(tbl_order_detail.quantity), SUM(tbl_order_detail.quantity*tbl_order_detail.price) FROM tbl_order_detail INNER JOIN tbl_don_hang on id_order_detail=tbl_don_hang.dh_id WHERE tbl_don_hang.dh_id='".$row["dh_id"]."'";
                                                  
                                                $kq = mysqli_query($ket_noi, $sql1);
                                                $r = mysqli_fetch_array($kq);
                                                
                                            ;?>
                                             <td><?php echo $r["SUM(tbl_order_detail.quantity)"] ;?> </td>
                                            <td><?php echo $r["SUM(tbl_order_detail.quantity*tbl_order_detail.price)"];?></td>  
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row["ten_admin"];?></td>
                                            <td>
                                            <?php
                                                if($row['tinhtrang']==1||$row['tinhtrang']==2){
                                                ?>
                                                <a class="btn btn-default" style="font-size: 14px;" href="#">Đã giao hàng</a>
                                                <?php
                                                }else if($row['tinhtrang']==0){
                                                ?>
                                                <a class="btn btn-success" style="font-size: 14px;" href="xacnhan.php?idhd=<?php echo $row['dh_id'];?>&idadmin=<?php echo $_SESSION['admin_id'];?>">Giao hàng</a>
                                                <?php
                                                    }
                                                ?></td>                                       
                                            <td><a class="btn btn-primary" href="chitietdonhang.php?id=<?php echo $row["dh_id"]; ?>"><i class="fas fa-search"></i></a></td> 
                                            <td>
                                            <a  class="btn btn-danger" href="donhangxoa.php?id=<?php echo $row["dh_id"]; ?>" onclick="return confirm('Thao tác này sẽ xoá toàn bộ thông tin về hoá đơn cũng như lịch sử mua hàng của khách hàng, bạn có muốn xoá?')">Xoá</a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Banking Academy</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
