<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

<script>
j=0;
	for(i=0;i<5;i++)
	{
	u=document.getElementsByName('price')[i].value;
	j=parseInt(j) + parseInt(u)
	document.getElementById('totl').value=j;
	}
        var x = 0;
        var y = 0;
        var z = 0;
		var k =0;
	
        function calc(obj) {
			alert(obj)
            var e = obj.id.toString();
			
            if (e == 'aprice') {
                x = Number(obj.value);
                y = Number(document.getElementById('quantity').value);
            } else {
                x = Number(document.getElementById('aprice').value);
                y = Number(obj.value);
            }
            z = x * y;
            document.getElementById('price').value = z;
            document.getElementById('update').innerHTML = z;
        }
		function cal(e,id,ff)
{
	var a=e.value;
	//alert(e.value)
	//alert(id)
	//var a=document.getElementById("pr"+i).value;
	//alert(a);
	var b=document.getElementById(id).value;
	
	var c=parseInt(a) * parseInt(b);
	//alert(c);
	document.getElementById(ff).value=c;
	caltot(c);
	
	/* i++; */
}
function caltot(a)
{
	
	j=0;
	for(i=0;i<5;i++)
	{
	u=document.getElementsByName('price')[i].value;
	j=parseInt(j) + parseInt(u)
	document.getElementById('totl').value=j;
}
			
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
			<form action="search.php" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href=""><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
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
					<li class=" menu__item"><a class="menu__link" href="index_user.php">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about.php">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
										<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="fp.php">Featured Products</a></li>
									<li><a href="Bags.php">Bags</a></li>
									<li><a href="ep.php">Earphones</a></li>
									<li><a href="mobile.php">Mobile</a></li>
									<li><a href="watches.php">Watches</a></li>
									</ul>
						</li>		
					
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
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
				$uname=$row["name"];
				$arr = explode(' ',trim($uname));
				echo "<span class='hidden-xs'>".$arr[0]."</span>";
			?>
			<b class="caret"></b></a>
			<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="profile.php">Profile</a></li>
									<li><a href="order.php">Orders</a></li>
									<li><a href="index.php">Signout</a></li>
			</ul>
			</a></li>
				<!--  </ul>
				</div>
			  </div>
			</nav>	
		</div>-->
		<li></li>
		<!--<li>
		<div class="top_nav_right">
			<div class=""> 
						<form action="my_cart.php" method="post" class=""> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" onClick="" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
			
			</div>
		</div>
		</li> -->
		<li><?php
			$id=$_SESSION["txtusername"];
				$con=mysqli_connect("localhost","root","","os");
				$sq="select uid from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$rows=mysqli_fetch_assoc($res);
				
		echo "<form action='my_cart_test.php' method='post' class=''> 
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
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<!-- //Modal1 -->
<!-- Modal2 -->	
<!-- //Modal2 -->
<!-- banner -->
		<style>
input{
	border: none;
    background: transparent;
	
}
select option { padding:0px 0px; }
table {
    border-collapse: collapse;
    width: 90%;	
}

th, td {
    
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
<div class="banner-bootom-w3-agileits">

<?php
							$con=mysqli_connect("localhost","root","","os");
				$cr="select * from cart where uid='$uid';";
				$crt=mysqli_query($con,$cr);
				if(mysqli_num_rows($crt)==0){
					echo "		
							<h2 >Your Cart Is Empty!!!!!</h2>
							
							";
				}
				else{
				?>

<table align="center">
<?php 
				
									echo "<thead>
										<tr>
											<th>   </th>
											<th>   </th>
											<th>   </th>
											<th>Elite Price</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
										</tr>
									</thead>";
?>
				<?php
								//$con=mysqli_connect("localhost","maria","maria","os");
								
								/*$se="SELECT * from cart where uid=$uid";
								$re=mysqli_query($con,$se);
								$r=mysqli_fetch_assoc($re);
								$pid=$r["pid"];*/
								
								$seq="SELECT p.p_id as pid,p.p_name as nm,p.p_price as price,p.p_dis as dis,p.p_price-p.p_dis as pfinal , p.p_img as imge,p.p_desc as descr from product p inner join cart c on p.p_id=c.pid and c.uid=$uid;";
								//echo $seq;
								$req=mysqli_query($con,$seq);
								//$rs=mysqli_fetch_assoc($req);
								//$pr=$rs["price"];
								//$dis=$rs["dis"];
								//$ap=$pr-$dis;
								
								//echo mysqli_num_rows($re);
								
								if(mysqli_num_rows($req)>0)
								{
								
										$i=1;
										$cn=0;
									while($rs = mysqli_fetch_array($req))
									{
										$e=$rs["pfinal"];
										$e =intval($e);
										$cn=intval($cn);
										$cn=$cn+$e;
										
									?>
									<tbody>
									<?php echo"<form action='pur.php' method='post'>"; ?>
										<tr>
											<td>
											<input type='hidden' id='pid' name='pid[]' class='' value=<?php  echo $rs["pid"]; ?> style="width: 60px;">
											</td>
											<td>
												<?php echo "<img src='images/".$rs["imge"]." ' width='100px' height='100px'>"; ?>
											</td>
											<td> <?php  echo $rs["nm"];?> <br/>
											<?php  /* echo $rs["descr"]; */ ?> </td>
											<td> Price:   <?php  echo $rs["price"]; ?> <br/> Discount:  <?php  echo $rs["dis"]; ?> </td>
											<td>
												<!--<input type='text' id='aprice' class='' readonly value=<?php  //echo $rs["pfinal"]; ?> >-->
                                                <input type='text' id='<?php echo "price$i"?>' class='' readonly value=<?php  echo $rs["pfinal"]; ?> style="width: 60px;">
											</td>
											<td>
									<select name='qty[]' id='quantity' onChange="cal(this,'<?php echo "price".$i?>','<?php echo "ff".$i?>')">	
													<option value='1'>1</option>
													<option value='2'>2</option>
													<option value='3'>3</option>
													<option value='4'>4</option>
													<option value='5'>5</option>
												</select>
											</td>
											<td><input type='text' name='price'  id='<?php echo "ff".$i?>' readonly value='<?php  echo $rs["pfinal"]; ?> ' class='' style="width: 60px;" /></td>
							<?php echo "<td><a  href='dp.php?x=". $rs["pid"]. "'><img src='imgs/close.jpg'>" ; ?>
                    </div></td>
							</tr> 
							<?php
							$i++;
									} 
									
									}
		  
							?>
							
						</tbody></table></br>
						
					<label for="subtotal" style="margin-left: 78%;">Sub Total:  ₹</label> <input type='text' name='Subtotal' id='totl' style="width: 60px;"   class=''value="<?php echo $cn;?>">
					
					<div class="col-sm-6 newsright">
					<?php echo "<input type='submit' name='cs' value='PLACE ORDER' class='hvr-outline-out button2' style='margin-left: 155%;'>";?>
						</div></div><br/>
						<?php
						
				}
				?>
						</form>
	<!-- //banner -->
    
	<!-- schedule-bottom -->
	
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	
<!--/grids-->
     					
<!--/grids-->
<!-- /new_arrivals --> 

	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		
	<!-- //we-offer -->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				
				<div style="margin-left: 350px;" class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div  class="w3layouts_mail_grid_left2">
						<h3>SHIPPING COST</h3>
						<p>50 INR </p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>We offer 24/7 Support</p>
					</div>
				</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href=""><span>E</span>lite Shoppy </a></h2>
			<p></p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a  class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a  class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a  class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a  class="pinterest">
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
								<p>Email :<a > EliteShoppy@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Pala, Kottayam, Kerala, India
								
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
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required>	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
												
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
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required>	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
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
</body>
</html>
