<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$id=$_SESSION["txtusername"];
$con=mysqli_connect("localhost","root","","os");

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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

<script> 
        
    </script>

</head>
<body>
<!-- header 

<!-- //header -->
<!-- header-bot -->

<!-- //header-bot -->
<!-- banner -->

<!-- //banner-top -->
<!-- Modal1 -->
<!-- //Modal1 -->
<!-- Modal2 -->
	
<!-- //Modal2 -->

<!-- banner -->

	
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Enter Your Details<span> To Continue </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a>Me</a><i>|</i></li>
								<li>Profile</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
	<!-- //banner -->
    <div class="clearfix"></div>
	<div class="clearfix"></div>
	<div height="200"></div>
	<!-- schedule-bottom -->
	
	
	

			<?php
					$sq="select * from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$uname=$row["name"];
					echo "<section class='content'>

       <form action='uprofile1.php' method='post'>
      <div class='box box-default'>
        
        <!-- /.box-header -->
        <div class='box-body'>
          <div class='row'>
            <div class='col-md-6'>
              <div class='form-group'>
                <label>Name</label>
                 <input type='text' class='form-control my-colorpicker1' name='txtname' required readonly value='$uname'>
              </div>
              <!-- /.form-group -->
              <div class='form-group'>
                <label>Phone</label>
                <input type='text' class='form-control my-colorpicker1' name='txtmob' required='' value=''>
              </div>
              <!-- /.form-group -->
			 </div>
				<div class='col-md-6'>
              <div class='form-group'>
                <label>Address</label>
                 <input type='text' class='form-control my-colorpicker1' name='txtad' required='' value=''>
              </div>
              <!-- /.form-group -->
              <div class='form-group'>
                <label>Locality</label>
                <input type='text' class='form-control my-colorpicker1' name='txtloc' required='' value=''>
              </div>
			  </div>
              <!-- /.form-group -->
			  <div class='col-md-6'>
              <div class='form-group'>
                <label>Pincode</label>
                 <input type='text' class='form-control my-colorpicker1' name='txtpin' required='' value=''>
              </div>
			  </div>
              <!-- /.form-group -->
			  <div class='col-md-6'>
              <div class='form-group'>
                <label>City</label>
                <input type='text' class='form-control my-colorpicker1' name='txtcity' required='' value='' >
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
							
							
								<span></span>";
				
							echo "</div> 
							<input type='submit' value='SAVE' align='center' class='hvr-outline-out button2' style='margin-left:610px;background-color: #2fdab8;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;'>";
								
						echo "</form>
					</div>
					</div>";
						
						echo "<div class='clearfix'></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
					 <!--//tab_two-->

					</div>
					</div>
				</div>	
			</div>
		</div>";
		
		?>
		<h3 class="wthree_text_info"> <span>  </span></h3>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		
	<!-- //we-offer -->
<!--/grids-->
</div>
<!--grids-->
<!-- footer -->

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
