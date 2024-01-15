<?php require("header.php"); ?>

<!-- Carousel End -->

<!-- Page Header End -->
<!-- 404 Start -->
<img src="images/img_index.jpg" style="width: 100%; height: 500px;">

<div class="container">

<div class="row container">



        <div class=" col-lg-6">
            <div class="row  container-sm ">
                <h1 class="mb-4">  </h1>
                         <br></br>
                <h1 class="mb-4"> Tài khoản của bạn </h1>
                
                <form action="" method="post">
                <div class="col-md-12">
                <?php
			
                       $data=$_SESSION['user']['khachhang_id'];
                $sql = "SELECT * FROM `tbl_khachhang` WHERE `khachhang_id` = $data ;";
                $ketQuaTruyVan = $conn->query($sql);
                $a = $ketQuaTruyVan->fetch_assoc();

               
                    ?>
                       
                        <label for="inputEmail4" class="">Họ tên</label>
                        <input type="text" value="<?php echo $a['tenkh']; ?>" name="name" class="form-control" id="inputEmail4">
                        <label for="inputEmail4" class="">Email</label>
                        <input type="text" value="<?php echo $a['email']; ?>" name="name" class="form-control" id="inputEmail4" >              
                    </div>
            </div>
           
      
        </div>
        <div class="col-lg-6" style="padding-top: 50px;">
        <div><h1>Đơn hàng của bạn</h1></div>
            <div class="table-content table-responsive cart-table-content m-t-30" id="listCart">
            <table class="table">
            <thead>
    <tr>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Ngày đặt hàng</th>
    </tr>
  </thead>
  <tbody>
  <?php
			
            $sql1 = "SELECT * FROM `tbl_don_hang` INNER JOIN tbl_order_detail on tbl_don_hang.dh_id=tbl_order_detail.id_order_detail
                 INNER JOIN tbl_sanpham on tbl_order_detail.id_san_pham=tbl_sanpham.sanpham_id WHERE id_khachhang= $data ;";
                $ketQuaTruyVan1 = $conn->query($sql1);
            if($ketQuaTruyVan1->num_rows > 0){
                $i = 0;
                while($sanpham = $ketQuaTruyVan1->fetch_assoc()){
                    
                        ?>
    <tr>
        
      <th scope="row"><?php echo $sanpham['dh_id']; ?></th>
      <td><img class="img-fluid" style="width: 80px; height:110px;" src="images/<?php echo $sanpham['anh'];  ?>" alt=""></td>
      <td><?php echo $sanpham['total_price']; ?></td>
      <td><?php echo $sanpham['quantity']; ?></td>
      <td><?php echo $sanpham['date']; ?></td>
    </tr>
    <?php }
                             
                }?>
  </tbody>
</table>
                        
                    </div>  <!-- End Cart Table -->
                    </div> 


                    </div> 
                    </div>



    </form>

</div>
<br>
</div>
<?php require("footer.php"); ?>