<?php
session_start();
$cart=(isset($_SESSION['cart']))?$_SESSION['cart']: [];
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
<link rel="stylesheet" type="text/css" href="styles/header.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


	
	<!--Header-->
	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="index.php">May</a></div>
			<nav class="main_nav">
			<ul>
					<li><a href="index.php">home</a></li>
					<li class="dropdown">
                        <a data-bs-toggle="dropdown" href="man.php">
                            Nam</a>
                    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="quannam.php">Quần nam</a></li>
    <li><a class="dropdown-item" href="aonam.php">Áo nam</a></li>
    <li><a class="dropdown-item" href="khacnam.php">Khác</a></li>
  </ul>
                </li>
					<li class="dropdown" href="woman.php">
                        <a data-bs-toggle="dropdown" href="woman.php">
                            Nữ</a>
                    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="quannu.php">Quần nữ</a></li>
    <li><a class="dropdown-item" href="aonu.php">Áo nữ</a></li>
    <li><a class="dropdown-item" href="khacnu.php">Khác</a></li>
  </ul>
                </li>
                <li class="dropdown">
                        <a data-bs-toggle="dropdown" href="categories.php">
                            Phụ kiện</a>
                    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="vitui.php">Túi sách</a></li>
    <li><a class="dropdown-item" href="tat.php">Tất kiểu</a></li>
    <li><a class="dropdown-item" href="khanmat.php">Khăn</a></li>
  </ul>
                </li>
					<li><a href="contact.php">contact</a></li>
				</ul>

			</nav>
			<div class="header_content ms-auto">
				<div class="search header_search">
					<form action="search.php" method="GET">
						<input type="text" name="search_pr" class="search_input" required="required" placeholder="Bạn cần tìm gì....">
						<button type="submit" id="search_button" class="search_button"><img src="images/magnifying-glass.svg" alt=""></button>
					</form>
				</div>
				<div class="shopping">
					<!-- Cart -->
					<a id="cart_1" href="cart.php">
						<div class="cart">
							<img src="images/shopping-bag.svg" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									
									<div class="cart_num"><?php echo count($cart);?></div>
                                
								</div>
							</div>
						</div>
					</a>
					<!-- Avatar -->
							  
						<div class="avatar">
						<a href="login.php" class="dropdown-toggle avatar_text" data-toggle="dropdown" id="dropdownMenuLink">
                <span class="glyphicon glyphicon-user"></span>
						<?php
              
               if(isset($_SESSION['login'])&& $_SESSION['login']==1)
               {
                    echo $_SESSION['ten_dang_nhap'];
  }
  else
  {
    echo"Tài khoản";
  }
               ?>
						</a>
						<span class="caret"></span>

</a>
<ul class="dropdown-menu" >
  <?php
				 if(isset($_SESSION['login'])&& $_SESSION['login']==1)
				 {

  ?>
  <li><a href="order-info.php">Thông tin tài khoản</a></li>
  <li><a href="logout.php">Đăng xuất</a></li>      
<?php
}
else
{
?>

  <li><a href="login.php">Đăng nhập</a></li>
  <li><a href="register.php">Đăng ký</a></li>              
<?php
}
?>
</ul>

						</div>
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>
		<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="index.php">May</a></div>
		<div class="search">
			<form action="test_search.php" method="POST">
				<input type="search" name="search_pr" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="admin/dangnhap.php">home</a></li>
				<li class="menu_mm"><a href="man.php">Nam</a></li>
				<li class="menu_mm"><a href="woman.php">Nữ</a></li>
				<li class="menu_mm"><a href="categories.php">Phụ kiện</a></li>
				<li class="menu_mm"><a href="contact.php">contact</a></li>
			</ul>
		</nav>
	</div>

</html>