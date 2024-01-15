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
        <title>May | Admin | Sản phẩm</title>
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
                <?php
                    include("./config.php");          
                    $id_loaisanpham=$_GET['id'];
                 
                    $sql1="SELECT * FROM `tbl_sanpham` WHERE id_loaisanpham=$id_loaisanpham";                    


                    $sql2=  "SELECT * FROM tbl_loaisanpham WHERE id_loaisanpham = '".$id_loaisanpham."' ";     
                    $sanphamid = mysqli_query($ket_noi,$sql1);
                
                    $loaisanpham = mysqli_query($ket_noi,$sql2);
                    $row2=mysqli_fetch_array($loaisanpham);
                ;?>   
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $row2["ten_loaisanpham"];?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Quản trị hệ thống</a></li>
                            <li class="breadcrumb-item"><a href="danhmuc.php">Danh mục sản phẩm</a></li>
                            <li class="breadcrumb-item active"><?php echo $row2["ten_loaisanpham"];?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <?php echo $row2["ten_loaisanpham"];?>| <a href="sanphamthem.php?loaisanphamid=<?php echo $row2["id_loaisanpham"];?>">Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá bán</th>
                                            <th>Số lượng còn</th>
                                            <th>Đã bán</th>
                                            <th>Ghi chú</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá bán</th>
                                            <th>Số lượng còn</th>
                                            <th>Đã bán</th>
                                            <th>Ghi chú</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $i=0;
                                        while ($row1 = mysqli_fetch_array($sanphamid)) {
                                            echo"<pre>";

                                            $i++;
                                    ;?>
                                        <tr>
                                           
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row1["sanpham_name"];?></td>
                                            <td>
                                            <img src=""  width="120" height="80 "></td>
                                            <td><?php echo number_format($row1["sanpham_gia"], 0, '', '.') ;?> đ</td>
                                            <td><?php echo $row1["sanpham_soluong"] ;?></td>
                                            <td>Trống</td>
                                            <td><?php echo $row1["sanpham_mota"];?></td>
                                            <td><a class="btn btn-success" href="sanphamsua.php?sanphamid=<?php echo $row1["sanpham_id"]; ?>">Sửa</a></td>
                                            <td><a class="btn btn-danger" href="sanphamxoa.php?sanphamid=<?php echo $row1["sanpham_id"]; ?>&idloaisanpham=<?php echo $id_loaisanpham;?>" onclick="return confirm('Bạn có muốn xoá?')">Xoá</a></td>
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
