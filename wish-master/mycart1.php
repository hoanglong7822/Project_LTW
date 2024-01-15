
 <div>
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
    require("connect.php");
$dh_id=$_GET['dh_id'];
$sql="SELECT * FROM `tbl_order_detail` WHERE `id_order_detail` =  $dh_id";
//$query=mysqli_query($conn,$sql);
//$data=mysqli_fetch_assoc($query);

//echo"<pre>";
//print_r($data);
$ketQuaTruyVan = $conn->query($sql);
                if($ketQuaTruyVan->num_rows > 0){
                    $i=0;
                    while($or = $ketQuaTruyVan->fetch_assoc())
                    {
                      
                        $i++;
                            ?>
			
			
                                    
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $or['quantity']?></td>
        <td><?php echo $or['price']?></td>     
    </tr>
    <?php
                    }
                }
                    ?>
    
</table>
 </div>