<?php
session_start();
if(!isset($_SESSION['login']))
{
    echo "
                <script type='text/javascript'>
                window.location.href='dangnhap.php';
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
        <title>May | Admin | Chi tiết đơn hàng</title>
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
                        <h1 class="mt-4">Chi tiết đơn hàng</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="donhang.php">Quản trị đơn hàng</a></li>
                            <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Toàn bộ sản phẩm | <a href="sanphamthuchienthem.php">Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá </th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $donhang_id=$_GET['id'];
                                        $sql1 = "SELECT tbl_sanpham.sanpham_id, tbl_sanpham.sanpham_name,tbl_sanpham.sanpham_gia,tbl_order_detail.quantity,tbl_sanpham.sanpham_gia*tbl_order_detail.quantity as tt FROM `tbl_order_detail` INNER JOIN tbl_sanpham ON tbl_order_detail.id_san_pham=tbl_sanpham.sanpham_id where id_order_detail=$donhang_id;";
                                                 
                                       
                                        $ket_qua = mysqli_query($ket_noi, $sql1);
                                        $i=0;
                                        while ($row1 = mysqli_fetch_array($ket_qua)) {
                                            $i++;
                                    ;?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row1["sanpham_id"];?></td>
                                            <td><?php echo $row1["sanpham_name"];?></td>
                                            <td><?php echo number_format($row1["sanpham_gia"]) ;?> đ</td>
        
                                            <td><?php echo number_format($row1["quantity"]) ;?></td> 
                                            <td><?php echo number_format($row1["tt"]) ;?></td>
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
