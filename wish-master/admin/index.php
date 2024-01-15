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
else
{
    $dk = '';
    if(isset($_GET['date_from'])&&isset($_GET['date_end']))
    {
        if($_GET['date_from']!='' && $_GET['date_end']!='')
        {
            $dk = "(tbl_donhang.ngaythang BETWEEN ('".$_GET['date_from']."') and ('".$_GET['date_end']."'))";
        }    
        else 
        {
            $dk = '1=1';
        }
    }
    else 
        {
            $dk = '1=1';
        }
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
        <title>May | Admin | Quản trị hệ thống</title>
       
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <body class="sb-nav-fixed">
    <?php
        include("slide.php");
    ?>
    <div id = "layoutSidenav">
    
             <div id="layoutSidenav_content" class="container-fluid  ">
                <main class="  ">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị hệ thống</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Quản trị hệ thống</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-lg-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body" style="height:70px;">Danh mục sản phẩm</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="danhmuc.php">Chi tiết</a>
                                        <div class="small text-white"><i0 class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-3 col-md-6 col-lg-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body" style="height:70px;">Quản trị viên</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="quantrivien.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-lg-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body" style="height:70px;">Tài khoản khách hàng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="khachhang.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-lg-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body" style="height:70px;">Đơn hàng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="donhang.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <table width="100%"><th width=25% style="vertical-align: top;">
                    <div class="container-fluid px-4">
                        <div class="row">
                            <form class="form form-horizontal" method="get" action="#" id="dkien" onsubmit="return(validateForm());">
                                <div class="form-group" >
                                    <label class="control-label col-sm-3  col-lg-3 col-md-3" style="width: 200px">Ngày bắt đầu</label>
                                    <div class="col-sm-3" style="width: 220px">
                                        <input type="date" class="form-control" name="date_from" id= "date_from"  >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3 " style="width: 200px">Ngày kết thúc</label>
                                    <div class="col-sm-3" style="width: 220px">
                                        <input type="date" class="form-control" name="date_end" id= "date_end"  >
                                    </div>
                                </div><br>
                                
                                <div class="form-group" style="margin-left: 120px">
                                    <div class="col-sm-3">
                                        <input class="btn btn-warning" type="submit" value="Xem" />
                                    </div>
                                </div>
                            </form>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    </th>
                     <th width=75%>
                    
                        <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    TOP 5 bán chạy nhất
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Hình ảnh</th>
                                                <th>Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Hình ảnh</th>
                                                <th>Số lượng</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
                                        include("./config.php");
                                            $sql = "SELECT tbl_sanpham.sanpham_name,tbl_sanpham.anh, SUM(COALESCE(tbl_giohang.soluong,0)) as sl, tbl_donhang.donhang_id FROM (tbl_giohang JOIN tbl_sanpham ON tbl_sanpham.sanpham_id=tbl_giohang.sanpham_id) JOIN tbl_donhang ON tbl_donhang.donhang_id=tbl_giohang.donhang_id WHERE ".$dk." GROUP BY tbl_sanpham.sanpham_name order by sl DESC LIMIT 0,5";
                                            $ket_qua = mysqli_query($ket_noi, $sql);
                                            $soluong=mysqli_num_rows($ket_qua); 
                                            if($soluong> 0){
                                            $i=0;
                                            while ($row = mysqli_fetch_array($ket_qua)) {
                                                $i++;
                                        ;?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $row["sanpham_name"];?></td>
                                                <td>
                                                <img src="<?php echo $row['anh'] ? '../anh/'.$row["anh"] : 'img/anh_load.jpg' ;?> "  width="180" height="120" style="margin-left: 20%;"></td>
                                                <td><?php echo $row['sl'];?></td>
                                            </tr>
                                        <?php
                                            }}else{
                                        ;?><td>Không có sản phẩm nào</td><?php };?>
                                        </tbody>
                                    </table> -->
                                </div>
                            </div>
                        </th>
                       
                </main>
                
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
