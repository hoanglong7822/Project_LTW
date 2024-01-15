
<?php
session_start();
require("connect.php");

    $id=$_GET['id'];

    unset($_SESSION['cart'][$id]);
  //  $query=mysqli_query($conn,"DELETE FROM `tbl_cart` WHERE `id_san_pham`=".$id);
header('location:cart.php');
?>
<html>
    <a href="index.php">Home</a>
</html>