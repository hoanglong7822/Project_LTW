<?php
session_start();
$cart=(isset($_SESSION['cart']))?$_SESSION['cart']: [];
require("connect.php");
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<div class="super_container">
	
	<!-- Header -->
<?php
require("header.php");
?>

	<!-- Home -->
	<!-- Checkout -->


		<div class="checkout">	
		<div class="container">
			<div class="row">
				<!-- Cart Details -->
				<div class="col-lg-6">
					<div class="cart_details">
						<div class="checkout_title">cart total</div>
						<div class="cart_total">
							
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Product</div>
									<div class="cart_total_price ml-auto">Total</div>
								</li>
								
						<?php
						if(isset($_SESSION['user']))
						
							{
								
						
						foreach($cart as $key=>$value): ?>
						
						
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title"><?php echo $value['name'];?></div>
									<div class="cart_total_price ml-auto"><?php echo $value['price'];?></div>
								</li>
							
								
							
							<?php endforeach; 
							}?>
							
							
							<li class="d-flex flex-row align-items-start justify-content-start total_row">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_price ml-auto"><?php echo $_SESSION['total_pr'] ?></div>
								</li>
								</ul>
						</div>
					</div>
				</div>
				<!-- Billing Details -->
				<div class="col-lg-6">
				<?php
		if(isset($_SESSION['user']))	
		{ ?>
					<div class="billing">
						<div class="checkout_title">Thông tin giao hàng</div>
						<div class="checkout_form_container">
						<form action="update_checkout.php" id="checkout_form" method="POST">
							
								<input type="text" class="checkout_input" name="fname" placeholder="Họ" required="required">
								<input type="text" class="checkout_input" name="lname" placeholder="Tên" required="required">
								
								<input type="text" class="checkout_input" name="phone_number" placeholder="Số điện thoại">
								<input type="text" class="checkout_input" name="email" placeholder="E-mail" required="required">
								<input type="text" class="checkout_input" name="city" placeholder="Thành phố" required="required">
								<input type="text" class="checkout_input" name="address" placeholder="Địa chỉ" required="required">
								<textarea name="comment" id="checkout_comment" class="checkout_comment" placeholder="Ghi chú"></textarea>
								<div class="payment_options">
							<div>
								<input type="radio" id="radio_payment_1" name="regular_radio" class="regular_radio">
								<label for="radio_payment_1">cash on delivery</label>
							</div>
							<div>
								<input type="radio" id="radio_payment_2" name="regular_radio" class="regular_radio" checked>
								<label for="radio_payment_2">paypal</label>
								<div class="visa payment_option"><a href="#"><img src="images/visa.jpg" alt=""></a></div>
								<div class="master payment_option"><a href="#"><img src="images/master.jpg" alt=""></a></div>
							</div>
							<input type=hidden name="id_khachhang" value="<?php echo $user['khachhang_id'] ?>">
							<input type="hidden" name="total" value="<?php echo $_SESSION['total_pr'] ?>">
							<button type=submit class="cart_total_button">place order</button>
						</div>
							</form>
						</div>
					</div>
			<?php	}
		else
		{
			?>
			    <div class="billing">
						<div class="checkout_title">Đăng nhập để thanh toán<a href="login.php?action=checkout">Login</a></div>
				</div>

		<?php
		}
		?>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image parallax-window" data-parallax="scroll" data-image-src="images/cart_nl.jpg" data-speed="0.8"></div>
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
							<li><a href="index.html">home</a></li>
							<li><a href="categories.html">clothes</a></li>
							<li><a href="categories.html">accessories</a></li>
							<li><a href="categories.html">lingerie</a></li>
							<li><a href="contact.html">contact</a></li>
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
<script src="js/checkout_custom.js"></script>
</body>
</html>