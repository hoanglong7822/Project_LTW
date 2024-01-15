<?php
session_start();
$cart=(isset($_SESSION['cart']))?$_SESSION['cart']: [];
include'cart_function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
</head>
<body>

<div class="super_container">
	<?php
require("header.php");
	?>
		
	<!-- Menu -->



	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/cart.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Shopping Cart</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Shopping Cart</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Cart -->
	<div class="cart_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cart_title">your shopping cart</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_bar d-flex flex-row align-items-center justify-content-start">
						<div class="cart_bar_title_name">Product</div>
						<div class="cart_bar_title_content ml-auto">
							<div class="cart_bar_title_content_inner d-flex flex-row align-items-center justify-content-end">
								<div class="cart_bar_title_price">Price</div>
								<div class="cart_bar_title_quantity">Quantity</div>
								<div class="cart_bar_title_total">Total</div>
								<div class="cart_bar_title_button"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_products">
						<?php $total_price=0 ?>
					<?php foreach($cart as $key=>$value): 
						$total_price += ($value['quantity']*$value['price']);
						$_SESSION['total_pr']=$total_price;

						?>
							
						<ul>
							<li class=" cart_product d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
								<!-- Product Image -->
								<div class="cart_product_image"><img style="width:80px; height:110px;" src="images/<?php echo $value['image']?>" alt=""></div>
								<!-- Product Name -->
								<div class="cart_product_name"><a href="product.html"><?php echo $value['name']?></a></div>
								<div class="cart_product_info ml-auto">
									<div class="cart_product_info_inner d-flex flex-row align-items-center justify-content-md-end justify-content-start">
										<!-- Product Price -->
										<div class="cart_product_price"><?php echo number_format($value['price']);?></div>
										<!-- Product Quantity -->
										<div class="product_quantity_container">
											<div class="product_quantity clearfix">
												<form action="addtocart.php" >
												<input name="value" type="hidden" name="action">
												<input name="id" type="hidden" value="<?php echo $value['id']?>">
											<input id="quantity_input" name="quantity"type="text" pattern="[0-9]*" value="<?php echo $value['quantity']?>">
												<div class="quantity_buttons">
													<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
													<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
												</div>
											</div>
										</div>
										<div><button class="btn-primary btn btnn_update" style="background-color:#937c6f;border:none" type="submit">Update</button></div>
										</form>
										<!-- Products Total Price -->
										<div class="cart_product_total"><?php echo number_format($value['quantity']*$value['price']);?></div>
										<!-- Product Cart Trash Button -->
										<div class="cart_product_button">
											<button class="cart_product_remove"><a href="deletecart.php?id=<?php echo $value['id']?>"><img src="images/trash.png" alt=""></a></button>
										</div>
									</div>
								</div>
							</li>
						</ul>

						<?php endforeach ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_control_bar d-flex flex-md-row flex-column align-items-start justify-content-start">
						
						<button class="button_update cart_button_2 ml-md-auto"><a class="btn_update_a" href="index.php">continue shopping</a></button>
					</div>
				</div>
			</div>
			<div class="row cart_extra">
				<!-- Cart Coupon -->
				<div class="col-lg-6">
					<div class="cart_coupon">
						<div class="cart_title">coupon code</div>
						<form action="#" class="cart_coupon_form d-flex flex-row align-items-start justify-content-start" id="cart_coupon_form">
							<input type="text" class="cart_coupon_input" placeholder="Coupon code" required="required">
							<button class="button_clear cart_button_2">apply coupon</button>
						</form>
					</div>
				</div>
				<!-- Cart Total -->
				<div class="col-lg-5 offset-lg-1">
					<div class="cart_total">
						<div class="cart_title">cart total</div>
						
						<ul>
						
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Total</div>
								<div class="cart_total_price ml-auto"><?php echo number_format(total_price($cart));?></div>
							</li>
						</ul>
						<button class="cart_total_button"><a class="btn_update_a" href="checkout.php">proceed to checkout</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image parallax-window" data-parallax="scroll" data-image-src="images/img_index.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row options">

					<!-- Options Item -->
					<div class="col-lg-3">
						<div class="options_item d-flex flex-row align-items-center justify-content-start">
							<div class="option_image"><img src="images/option_1.png" alt=""></div>
							<div class="option_content">
								<div class="option_title">30 Days Returns</div>
								<div class="option_subtitle">No questions asked</div>
							</div>
						</div>
					</div>

					<!-- Options Item -->
					<div class="col-lg-3">
						<div class="options_item d-flex flex-row align-items-center justify-content-start">
							<div class="option_image"><img src="images/option_2.png" alt=""></div>
							<div class="option_content">
								<div class="option_title">Free Delivery</div>
								<div class="option_subtitle">On all orders</div>
							</div>
						</div>
					</div>

					<!-- Options Item -->
					<div class="col-lg-3">
						<div class="options_item d-flex flex-row align-items-center justify-content-start">
							<div class="option_image"><img src="images/option_3.png" alt=""></div>
							<div class="option_content">
								<div class="option_title">Secure Payments</div>
								<div class="option_subtitle">No need to worry</div>
							</div>
						</div>
					</div>

					<!-- Options Item -->
					<div class="col-lg-3">
						<div class="options_item d-flex flex-row align-items-center justify-content-start">
							<div class="option_image"><img src="images/option_4.png" alt=""></div>
							<div class="option_content">
								<div class="option_title">24/7 Support</div>
								<div class="option_subtitle">Just call us</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row newsletter_row">
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
					<div class="footer_logo"><a href="#">Wish</a></div>
					<nav class="footer_nav">
						<ul>
							<li><a href="index.html">Trang chủ</a></li>
							<li><a href="categories.html">Nam</a></li>
							<li><a href="categories.html">Nữ</a></li>
							<li><a href="categories.html">Phụ kiện</a></li>
							<li><a href="contact.html">Liên hệ</a></li>
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
<script src="js/cart_custom.js"></script>
</body>
</html>