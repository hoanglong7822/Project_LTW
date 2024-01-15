<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

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
    <li><a class="dropdown-item" href="#">Quần nam</a></li>
    <li><a class="dropdown-item" href="#">Áo nam</a></li>
    <li><a class="dropdown-item" href="#">Khác</a></li>
  </ul>
                </li>
					<li class="dropdown" href="woman.php">
                        <a data-bs-toggle="dropdown">
                            Nữ</a>
                    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Quần nữ</a></li>
    <li><a class="dropdown-item" href="#">Áo nữ</a></li>
    <li><a class="dropdown-item" href="#">Khác</a></li>
  </ul>
                </li>
                <li class="dropdown">
                        <a data-bs-toggle="dropdown" href="categories.php">
                            Phụ kiện</a>
                    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Túi sách</a></li>
    <li><a class="dropdown-item" href="#">Tất kiểu</a></li>
    <li><a class="dropdown-item" href="#">Mũ</a></li>
  </ul>
                </li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button"><img src="images/magnifying-glass.svg" alt=""></button>
					</form>
				</div>
				<div class="shopping">
					<!-- Cart -->
					<a href="#">
						<div class="cart">
							<img src="images/shopping-bag.svg" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									<div class="cart_num">1</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Star -->
					<a href="#">
						<div class="star">
							<img src="images/star.svg" alt="">
							<div class="star_num_container">
								<div class="star_num_inner">
									<div class="star_num">0</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Avatar -->
					<a href="#">
						<div class="avatar">
							<img src="images/avatar.svg" alt="">
						</div>
					</a>
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Wish</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Trang chủ</a></li>
				<li class="menu_mm"><a href="man.php">Nam</a></li>
				<li class="menu_mm"><a href="Woman.php">Nữ</a></li>
				<li class="menu_mm"><a href="categories.php">Phụ kiện</a></li>
				<li class="menu_mm"><a href="contact.php">liên hệ</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/categories.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Nữ</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Trang chủ</a></li>
									<li>Nữ</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<!-- Sidebar Left -->
					<div class="current_page">Woman's Fashion</div>
				</div>
				<div class="col-12">
					<div class="product_sorting clearfix">
						<div class="view">
							<div class="view_box box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
							<div class="view_box detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
						<div class="sorting">
							<ul class="item_sorting">
								<li>
									<span class="sorting_text">Show all</span>
									<i class="fa fa-caret-down" aria-hidden="true"></i>
									<ul>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Stars</span></li>
									</ul>
								</li>
								<li>
									<span class="sorting_text">Show</span>
									<span class="num_sorting_text">12</span>
									<i class="fa fa-caret-down" aria-hidden="true"></i>
									<ul>
										<li class="num_sorting_btn"><span>3</span></li>
										<li class="num_sorting_btn"><span>6</span></li>
										<li class="num_sorting_btn"><span>12</span></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
			
			$sql = "SELECT * FROM `tbl_sanpham`";
			$ketQuaTruyVan = $conn->query($sql);
			if($ketQuaTruyVan->num_rows > 0){
				$i = 0;
				while($sanpham = $ketQuaTruyVan->fetch_assoc()){
					if($i%3==0){
						?>

			<!-- Product -->
			<div class="row products_container" style="background-color:brown">

			<?php
								}
								?>
		<div class="col-lg-4" style="background-color:yellow;">
			  <div class="product">
					<div class="product_image">
						<img src="images/<?php echo $sanpham['image']; ?>" alt="Hoàng longg">
					</div>
					<!-- Tên, giá sp -->
					<div class="product_content clearfix" style="background-color:white">
						<div class="product_info">
							<div class="product_name"><?php echo $sanpham['ten_san_pham']; ?></div>
							<div class="product_price"><?php echo number_format($sanpham['gia']); ?> đ</div>
						</div>
						<div class="product_options">
								<div class="product_buy product_option" >
								<a  href="addtocart.php?id=<?php echo $sanpham['id_san_pham'];?>"> <img src="images/shopping-bag-white.svg" alt=""></a>
							</div>
						</div>
					</div>    
			</div>         
		</div>

				<?php
								if($i%3==2){
									?>
								</div>
							<br />
									<?php
								}
								$i++;  
					}
				}
				?>
				
					
			</div>

			<div class="row page_num_container">
				<div class="col text-right">
					<ul class="page_nums">
						<li><a href="#">01</a></li>
						<li class="active"><a href="#">02</a></li>
						<li><a href="#">03</a></li>
						<li><a href="#">04</a></li>
						<li><a href="#">05</a></li>
					</ul>
				</div>
			</div>

		</div>
		
		<!-- Sidebar Right -->

		<div class="sidebar_right clearfix">

			<!-- Promo 1 -->
			<div class="sidebar_promo_1 sidebar_promo d-flex flex-column align-items-center justify-content-center">
				<div class="sidebar_promo_image" style="background-image: url(images/sidebar_promo_1.jpg)"></div>
				<div class="sidebar_promo_content text-center">
					<div class="sidebar_promo_title">30%<span>off</span></div>
					<div class="sidebar_promo_subtitle">On all shoes</div>
					<div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
				</div>
			</div>

			<!-- Promo 2 -->
			<div class="sidebar_promo_2 sidebar_promo">
				<div class="sidebar_promo_image" style="background-image: url(images/sidebar_promo_2.jpg)"></div>
				<div class="sidebar_promo_content text-center">
					<div class="sidebar_promo_title">30%<span>off</span></div>
					<div class="sidebar_promo_subtitle">On all shoes</div>
					<div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
				</div>
			</div>
		</div>

	</div>

	<!-- Extra -->

	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(images/newsletter.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">only the best</div>
							<div class="section_title">subscribe for a 20% discount</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail here">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>
						<div class="newsletter_text">Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestib ulum ultrices nulla. Aliquam egestas tempor leo.</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo"><a href="index.php">Wish</a></div>
					<nav class="footer_nav">
						<ul>
							<li><a href="index.php">Trang chủ</a></li>
							<li><a href="man.php">Nam</a></li>
							<li><a href="woman.php">Nữ</a></li>
							<li><a href="categories.php">Phụ kiện</a></li>
							<li><a href="contact.php">Liên hệ</a></li>
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>
</body>
</html>