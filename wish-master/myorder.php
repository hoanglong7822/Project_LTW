<?php
// require("header.php");
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>May</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/myorder.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<table>
    <tr>
        <th>STT</th>
        <th>Mã</th>
        <th>Tên Khách hàng</th>
        <th>Tổng tiền</th>
        <th>Trạng thái</th>
        <th>Xem chi tiết</th>
    </tr>
    <?php
$id=$_GET['id'];
$sql="SELECT * FROM tbl_don_hang  where id_khachhang=$id";
//$query=mysqli_query($conn,$sql);
//$data=mysqli_fetch_assoc($query);

//echo"<pre>";
//print_r($data);
$ketQuaTruyVan = $conn->query($sql);
                if($ketQuaTruyVan->num_rows > 0){
                    $i=0;
                    while($sanpham = $ketQuaTruyVan->fetch_assoc())
                    {
                      
                        $i++;
                            ?>
			
			
                                    
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $sanpham['dh_id']?></td>
        <td><?php echo $sanpham['dh_ten']?></td>
        <td><?php echo $sanpham['total_price']?></td>
        <td><a href="?dh_id=<?php echo $sanpham['dh_id'] ?> ">Xem chi tiết</a></td>
    </tr>
    <?php
                    }
                }
                    ?>
    

    </table>
    <?php
if(isset($_GET['dh_id']))
{
echo"Hoàng Long";
}


?>
    </div>
</body>
<?php //require("footer.php");
?>
