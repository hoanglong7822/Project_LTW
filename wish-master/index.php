<?php
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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="super_container">
	
<?php
require("header.php");
?>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/img_index.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/img_index.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/img_index.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Promo -->

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">best seller</div>
						<div class="section_title" style="visibility: hidden;">best seller</div>
					</div>
				</div>
			</div>
			<?php
			
                $sql = "SELECT * FROM `tbl_sanpham` WHERE `id_loaisanpham` = 15 LIMIT 3;";
                $ketQuaTruyVan = $conn->query($sql);
                if($ketQuaTruyVan->num_rows > 0){
                    $i = 0;
                    while($sanpham = $ketQuaTruyVan->fetch_assoc()){
                        if($i%3==0){
                            ?>
			<div class="row promo_container">
			<?php
                                    }
                                    ?>
				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img class="best_seller_image" src="images/<?php echo $sanpham['anh']; ?>" alt="">
						</div>
						<div class="promo_link"><a href="addtocart.php?id=<?php echo $sanpham['sanpham_id'];?>">Thêm vào giỏ hàng</a></div>
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
		</div>
	</div>

			

	<!-- New Arrivals -->

	<div class="arrivals">
		<div class="container" >
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">new arrivals</div>
						<div class="section_title" style="visibility: hidden;">best seller</div>
					</div>
				</div>
			</div>
			
			<?php
			
                $sql = "SELECT * FROM `tbl_sanpham` WHERE `id_loaisanpham` = 16 limit 3;";
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
                            <img src="images/<?php echo $sanpham['anh']; ?>" alt="Hoàng longg">
                        </div>
                        <!-- Tên, giá sp -->
                        <div class="product_content clearfix" >
                            <div class="product_info">
                                <div class="product_name"><?php echo number_format($sanpham['sanpham_gia']); ?> đ</div>
                                <div class="product_price"><?php echo $sanpham['sanpham_name']; ?></div>
                            </div>
                            <div class="product_options">
							<?php
							if($sanpham['sanpham_soluong']==0)
							{
							?>
							<div class="het_hang">
								 Hết hàng
							</div>
							
							<?php
							}
							else
							{
							?>
							
                           		 <div class="product_buy product_option" >
									<a  href="addtocart.php?id=<?php echo $sanpham['sanpham_id'];?>"> <img src="images/shopping-bag-white.svg" alt=""></a>
								</div>
								<?php
							}
							?>
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
				</div>
				</div>

	<!-- Extra -->
	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_image" style="background-image:url(images/gallery.jpg)"></div>
		<div class="container">
		</div>	
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_1.jpg">
						<img src="images/aonam1.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_2.jpg">
						<img src="images/aonam2.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_3.jpg">
						<img src="images/aonam3.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_4.jpg">
						<img src="images/aonam4.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_5.jpg">
						<img src="images/aonam5.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_6.jpg">
						<img src="images/aonam6.jpg" alt="">
					</a>
				</div>

			</div>
		</div>	
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">testimonials</div>
					</div>
				</div>
			</div>
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme test_slider text-center">

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Ra mắt công chúng vào năm 2015, tiệm của May xuất phát điểm chỉ là một tiệm quần áo nhỏ. Ngày nay, nhờ sản phẩm chất lượng tốt và độ uy tín cao, tiệm của May đã nhanh chóng chinh phục trái tim người dùng ở sự chuyên nghiệp mà May đem lại.”</div>
			
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
						<div class="test_text">“Ra mắt công chúng vào năm 2015, tiệm của May xuất phát điểm chỉ là một tiệm quần áo nhỏ. Ngày nay, nhờ sản phẩm chất lượng tốt và độ uy tín cao, tiệm của May đã nhanh chóng chinh phục trái tim người dùng ở sự chuyên nghiệp mà May đem lại.”</div>
						
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
						<div class="test_text">“Ra mắt công chúng vào năm 2015, tiệm của May xuất phát điểm chỉ là một tiệm quần áo nhỏ. Ngày nay, nhờ sản phẩm chất lượng tốt và độ uy tín cao, tiệm của May đã nhanh chóng chinh phục trái tim người dùng ở sự chuyên nghiệp mà May đem lại.”</div>
						
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(images/newsletter.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">only the best</div>
							<div class="section_title">Đăng ký nhận thông báo</div>
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
						<div class="newsletter_text"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

<?php
require("footer.php");
?>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>