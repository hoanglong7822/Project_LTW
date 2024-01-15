<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ví/Túi</title>
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

<?php require("header.php"); ?>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/anhbia.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Ví/Túi</div>
							<div class="breadcrumbs">
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
					<div class="current_page">Fashion</div>
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
									<span class="sorting_text">Lọc giá</span>
									<span class="num_sorting_text"></span>
									
									<ul>
										<li class="num_sorting_btn"><span>Dưới 200</span></li>
										<li class="num_sorting_btn"><span>Từ 200-500</span><li>
										<li class="num_sorting_btn"><span>Trên 500</span></li>
									</ul>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>

			<?php
			$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:6;
			$current_page =  !empty($_GET['page'])?$_GET['page']:1;
			$offset = ($current_page - 1) * $item_per_page;
			$sql = "SELECT * FROM `tbl_sanpham` WHERE `id_loaisanpham` IN (7) ORDER BY `sanpham_id` ASC LIMIT ".$item_per_page." OFFSET ".$offset." ";
			$totalRecords = mysqli_query($conn, "SELECT * FROM `tbl_sanpham` WHERE `id_loaisanpham` IN (7)");
			$totalRecords = $totalRecords-> num_rows;
			$totalPages = ceil ($totalRecords / $item_per_page);

			$ketQuaTruyVan = $conn->query($sql);
			if($ketQuaTruyVan->num_rows > 0){
				$i = 0;
				while($sanpham = $ketQuaTruyVan->fetch_assoc()){
					if($i%3==0){
						?>

			<!-- Product -->
			<div class="row products_container">

			<?php
								}
								?>
		<div class="col-lg-4">
			  <div class="product">
					<div class="product_image">
						<img class="prodduct_imgs" src="images/<?php echo $sanpham['anh']; ?>" alt="Nhóm 2">
					</div>
					<!-- Tên, giá sp -->
					<div class="product_content clearfix" style="background-color:white">
						<div class="product_info">
						<div class="product_name"><?php echo number_format($sanpham['sanpham_gia']); ?> </div>
                                <div class="product_price"><?php echo $sanpham['sanpham_name']; ?></div>
						</div>
						<div class="product_options">
								<div class="product_buy product_option" >
									<a  href="addtocart.php?id=<?php echo $sanpham['sanpham_id'];?>"> <img src="images/shopping-bag-white.svg" alt=""></a>
								</div>
								<div class="product_fav product_option">+</div>
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
				
					
		

			<div class="row page_num_container">
				<div class="col text-right">
					<ul class="page_nums">
						<li><a href="?per_page=6&page=1">01</a></li>
						<li><a href="?per_page=6&page=2">02</a></li>
						<li><a href="?per_page=6&page=3">03</a></li>
					</ul>
				</div>
			</div>

		</div>
		
		<!-- Sidebar Right -->

		<div class="sidebar_right clearfix">

			<!-- Promo 1 -->
			<div class="sidebar_promo_1 sidebar_promo d-flex flex-column align-items-center justify-content-center">
				<div class="sidebar_promo_image" style="background-image: url(images/anhbia1.jpg)"></div>
				<div class="sidebar_promo_content text-center">
					<div class="sidebar_promo_title">30%<span>off</span></div>
					<div class="sidebar_promo_subtitle">Mừng Tết đến</div>
					<div class="sidebar_promo_button"><a href="checkout.html">Sale</a></div>
				</div>
			</div>

			<!-- Promo 2 -->
			<div class="sidebar_promo_2 sidebar_promo">
				<div class="sidebar_promo_image" style="background-image: url(images/anhbia1.jpg)"></div>
				<div class="sidebar_promo_content text-center">
					<div class="sidebar_promo_title">30%<span>off</span></div>
					<div class="sidebar_promo_subtitle">Tất cả các loại</div>
					<div class="sidebar_promo_button"><a href="checkout.html">Sale</a></div>
				</div>
			</div>
		</div>

	</div>

	<!-- Extra -->

	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(images/anhbia2.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle"></div>
							<div class="section_title">Đăng ký để được giảm giá 20%.</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail">
								<button type="submit" class="newsletter_button">Đăng ký</button>
							</form>
						</div>
						<div class="newsletter_text"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php require("footer.php"); ?>
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