<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Elite</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>



<!--<link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />-->
	<link href="css1/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css1/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css1/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">



  <!-- Font Awesome -->
  
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

<script>
function ClearFields() {

     document.getElementById("fname").value = "";
     document.getElementById("ph").value = "";
	 document.getElementById("address").value = "";
     document.getElementById("locality").value = "";
	 document.getElementById("pin").value = "";
     document.getElementById("city").value = "";
}
</script>

</head>
<body>
<!-- header 

<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index_user.php"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index_user.php">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
										<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="mens.html">Men's Fasion</a></li>
									<li><a href="womens.php">Women's Fasion</a></li>
									<li><a href="mens.html">Shoes</a></li>
									<li><a href="womens.html">Watches</a></li>
									<li><a href="mens.html">Bags</a></li>
									</ul>
						</li>		
					
					<li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
					<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
					<li class="menu__item dropdown">
					<a class="menu__link" class="dropdown-toggle" data-toggle="dropdown">
					<?php
			$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$sq="select * from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$uid=$row["uid"];
				echo "<span class='hidden-xs'>".$row['name']."</span>";
			?>
			<b class="caret"></b></a>
			<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Profile</a></li>
									<li><a href="typography.html">Signout</a></li>
			</ul>
			</a></li>
			<li><?php
			$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$sq="select uid from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$rows=mysqli_fetch_assoc($res);
				
		echo "<form action='my_cart.php' method='post' class=''> 
		<button class='w3view-cart' type='submit' name='submit' onClick='' value=''><i class='fa fa-cart-arrow-down' aria-hidden='true'></i></button></form>";
	?>
		</li>
		</ul>
			</div>
			 </div>
			</nav>
		<div class="clearfix"></div>
	</div>
</div>
</div>




<!-- //banner -->
    <div class="clearfix"></div>
	<div class="clearfix"></div>
	<div height="200"></div>
	<!-- schedule-bottom -->
	
	<h3 class="wthree_text_info"> <span></span></h3>	
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="wthree_text_info">Payment <span>Details</span></h3>	
			<h3 class="tittle-w3l" style="color:#17c3a2; margin-top: 0.00em;margin-bottom: 0.83em;font-weight: bold;">DELIVERY ADDDRESS</h3>
				<button class='hvr-outline-out button2' value='Choose current Address' name='cs' style="color:white;font-weight: bold;" onClick="ClearFields();"  >
						<span>Change Address </span> 
				</button><p>If u want to change delivery address click the button and enter the following fields...</p>
				<h3 class="wthree_text_info"> <span></span></h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab">
					
						<?php

						$con=mysqli_connect("localhost","root","","os");

						$sel_pr="SELECT * from u_profile where uid='$uid'";
						$res_pr=mysqli_query($con,$sel_pr);
						$rs_pr = mysqli_fetch_array($res_pr);
						
						$sel_p="SELECT * from purchase where uid='$uid' and invoice=(SELECT MAX(invoice) from purchase);";
						$res_p=mysqli_query($con,$sel_p);
						$rs_p = mysqli_fetch_array($res_p);
						$st=$rs_p['t_price'];
						?>
					
					<div class="resp-tabs-container hor_1">

						<div>
							<form action="p.php" method="post" class="creditly-card-form agileinfo_form">
								<div class="creditly-wrapper wthree, w3_agileits_wrapper">
									<div class="credit-card-wrapper">
										<div class="first-row form-group">
										<div class="controls">
												<label class="control-label">Full Name</label>
												<input class="billing-address-name form-control" type="text" name="fname" id="fname" value=<?php  echo $rs_pr["f_name"]; ?> placeholder="">
											</div>
											<div class="controls">
												<label class="control-label">Phone</label>
												<input class="billing-address-name form-control" type="number" name="ph" id="ph" value=<?php  echo $rs_pr["ph"]; ?> placeholder="">
											</div>
											<div class="controls">
												<label class="control-label">Address</label>
												<input class="billing-address-name form-control" type="text" name="address" id="address" value=<?php  echo $rs_pr["address"]; ?> placeholder="">
											</div>
											<div class="controls">
												<label class="control-label">Locality</label>
												<input class="billing-address-name form-control" type="text" name="locality" id="locality" value=<?php  echo $rs_pr["locality"]; ?> placeholder="">
											</div>
											<div class="controls">
												<label class="control-label">Pin</label>
												<input class="billing-address-name form-control" type="text" name="pin" id="pin" value=<?php  echo $rs_pr["pin"]; ?> placeholder="">
											</div>
											<div class="controls">
												<label class="control-label">City</label>
												<input class="billing-address-name form-control" type="text" name="city" id="city" value=<?php  echo $rs_pr["city"]; ?> placeholder="">
											</div>
										</div>
										</div>
										<h3 class="tittle-w3l" style="color:black; margin-top: 0.83em;margin-bottom: 0.53em;">Your Amount is <span>₹<?php echo $st;  ?></span></h3>
										<h3 class="tittle-w3l" style="color:black; margin-top: 0.83em;margin-bottom: 0.53em;">Delivery Charges <span>₹50</span> May Applay</h3>
										<h3 class="wthree_text_info"> <span> </span></h3>
										<h3 class="wthree_text_info"> <span> </span></h3>
										<h3 class="tittle-w3l" style="color:#17c3a2; margin-top: 0.83em;margin-bottom: 0.53em;font-weight: bold;">Make Payment Via DEBIT/CREDIT</h3>
											<h3 class="wthree_text_info"> <span></span></h3>
										<div class="credit-card-wrapper">
										<div class="first-row form-group">
											<div class="controls">
												<label class="control-label">Name on Card</label>
												<input class="billing-address-name form-control" type="text" name="chname" placeholder="John Smith">
											</div>
											<div class="w3_agileits_card_number_grids">
												<div class="w3_agileits_card_number_grid_left">
													<div class="controls">
														<label class="control-label">Card Number</label>
														<input class="number credit-card-number form-control" type="text" name="cno" inputmode="numeric" autocomplete="cc-number"
														    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
													</div>
												</div>
												<div class="w3_agileits_card_number_grid_right">
													<div class="controls">
														<label class="control-label">CVV</label>
														<input class="security-code form-control" Â· inputmode="numeric" type="text" name="cvv" placeholder="&#149;&#149;&#149;">
													</div>
												</div>
												<div class="clear"> </div>
											</div>
										</div>
										<button class="submit" onClick="p.php" name="save">
											<span>Make a payment </span>
										</button>
									</div>
								</div>
							</form>

						</div>					
							
						
						</div>

					</div>
				</div>
				<!--Plug-in Initialisation-->
			</div>
		</div>
	</div>
	
	
		<h3 class="wthree_text_info"> <span>  </span></h3>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		
	<!-- //we-offer -->
<!--/grids-->
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><span>E</span>lite Shoppy </a></h2>
			<p>Lorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				
				
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+1 234 567 8901</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email : EliteShoppy@gmail.com</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Broome St, NY 10002,California, USA. 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			
		<p class="copy-right">&copy 2018 Elite shoppy. All rights reserved </p>
	</div>
</div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>


<!-- js1 starts -->
<!-- jquery -->
	<script src="js1/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js1/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	
	
	<!-- //cart-js -->

	<!-- easy-responsive-tabs -->
	<link rel="stylesheet" type="text/css" href="css1/easy-responsive-tabs.css " />
	<script src="js1/easyResponsiveTabs.js"></script>

	<script>
		$(document).ready(function () {
			//Horizontal Tab
			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!-- //easy-responsive-tabs -->

	<!-- credit-card -->
	<script src="js1/creditly.js"></script>
	<link rel="stylesheet" href="css1/creditly.css" type="text/css" media="all" />

	<script>
		$(function () {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>
	<!-- //credit-card -->

	<!-- password-script -->
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js1/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js1/move-top.js"></script>
	<script src="js1/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js1/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</body>
</html>
