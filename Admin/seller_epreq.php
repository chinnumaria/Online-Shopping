<?php
session_start();
$x=$_GET['x'];
$con=mysqli_connect("localhost","maria","maria","os");
$sq="select * from product where p_id='$x';";
$res=mysqli_query($con,$sq);
$chin=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Elite | Seller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
        <a href="Seller_home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><b>E</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Elite Shoppy</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php
				$id=$_SESSION['txtemail'];
				$con=mysqli_connect("localhost","maria","maria","os");
				echo "<img src='dist/imgs/s.jpg' class='user-image' alt='User Image'>";
				/* $sq="select gender from registration where email='$id';"; 
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				if($row['gender']=='Female')
				{
					echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				}
				else
				{
					echo "<img src='dist/imgs/MALE.jpg' class='user-image' alt='User Image'>";
				}	 */
			   
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select s_name from seller where s_email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo "<span class='hidden-xs'>".$row['s_name']."</span>";
			    ?>
              
             
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
			  <?php
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				echo "<img src='dist/imgs/s.jpg' class='img-circle' alt='User Image'>";
				/* $sq="select gender from registration where email='$id';"; 
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				if($row['gender']=='Female')
				{
					echo "<img src='dist/imgs/FEMALE.jpg' class='img-circle' alt='User Image'>";
				}
				else
				{
					echo "<img src='dist/imgs/MALE.jpg' class='img-circle' alt='User Image'>";
				}  */
				
			    ?>

               <p>
                <?php
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select s_name from seller where s_email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo $row['s_name'];
			    ?>
                
                  <!--<small>Member since Nov. 2012</small>-->
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
               <li class="user-footer">
                <div class="pull-left">
                  <a href="s_profile.php" class="btn btn-default btn-flat" class="active">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="Elite/index.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
		<?php
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				/* $sq="select gender from registration where email='$id';"; */
				echo "<img src='dist/imgs/s.jpg' class='img-circle' alt='User Image'>";
				/*$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				 if($row['gender']=='Female')
				{
					echo "<img src='dist/imgs/FEMALE.jpg' class='img-circle' alt='User Image'>";
				}
				else
				{
					echo "<img src='dist/imgs/MALE.jpg' class='img-circle' alt='User Image'>";
				} */
				
			    ?>
        </div>
        <div class="pull-left info">
          <?php
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select s_name from seller where s_email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo "<p>".$row['s_name']."</p>";
			?>
			 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          
        </div>
      </div>
	  
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     
       <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="index_Admin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		      <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>ADD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
            <li ><a href="seller_addp.php"><i class="fa fa-circle-o"></i> Add Product</a></li>
			<!--<li ><a href=""><i class="fa fa-circle-o"></i> Add Seller</a></li>-->
          </ul>
        </li>
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>VIEW</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="seller_pview.php"><i class="fa fa-circle-o"></i> View Products</a></li>
			<li><a href="seller_oview.php"><i class="fa fa-circle-o"></i> View Orders</a></li>
			<li><a href="s_odet.php"><i class="fa fa-circle-o"></i> Order Details</a></li>
<!--<li><a href=""><i class="fa fa-circle-o"></i> View Sellors</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> View Feedback</a></li>-->
          </ul>
        </li>
		
  </aside>

        


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <!-- <section class="content-header">
      <h1>
        MCA Virtual Library
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index_Admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Books</li>
      </ol>
    </section>-->

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        
        <!-- fix for small devices only -->
 
        <!-- /.col -->
 
        <!-- /.col -->
      </div>
	  <!-- page content -->
		<div class="x_panel">
                  <div class="x_title">
                    <h2 align="center">EDIT PRODUCT</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="seller_epreq1.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NAME<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!--<input type="text"  name="txt_pname" placeholder="NAME" required="required" class="form-control col-md-7 col-xs-12">-->
						  <?php
					
							echo "<input type='text' name='txt_pname' required='required' readonly='readonly' class='form-control col-md-7 col-xs-12' value='".$chin['p_name']."' >";
						   ?>
						  
						   
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PRICE <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <!-- <input type="text" name="txt_price" placeholder="PRICE"  required="required" class="form-control col-md-7 col-xs-12">-->
						  <?php
					
									echo "<input type='text' name='txt_price' required='required' class='form-control col-md-7 col-xs-12' value='".$chin['p_price']."' >";
						   ?>
                        </div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DISCOUNT <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!--<input type="text" name="txt_pdis" placeholder="DISCOUND"  required="required" class="form-control col-md-7 col-xs-12">-->
						  <?php
					
									echo "<input type='text' name='txt_pdis' required='required' class='form-control col-md-7 col-xs-12' value='".$chin['p_dis']."' >";
						   ?>
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DESCRIPTION<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!--<input type="text" name="txt_des" placeholder="DESCRIPTION"  required="required" class="form-control col-md-7 col-xs-12">-->
						  <?php
					
									echo "<input type='text' name='txt_des' required='required' class='form-control col-md-7 col-xs-12' value='".$chin['p_desc']."' >";
						   ?>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SELECT IMAGE<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!--<input type="file" id="p_img" margin-right="30px" name="p_img" size="50" required="required" class="form-control col-md-7 col-xs-12" accept= "image/*">-->
						  <?php
									echo "<img src='images/".$chin["p_img"]."' width='100px' height='100px'>";
									echo "<input type='file' name='p_img' margin-right='30px' size='50' required='required' accept= 'image/*' class='form-control col-md-7 col-xs-12' value='".$chin['p_img']."' >";
						   ?>
                        </div>
                      </div>
					  
					   
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">QUANTITY<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!--<input type="text" name="txt_pqty" placeholder="QUANTITY"  required="required" class="form-control col-md-7 col-xs-12">-->
						  <?php
					
									echo "<input type='text' name='txt_pqty' required='required' class='form-control col-md-7 col-xs-12' value='".$chin['p_qty']."' >";
						   ?>
                        </div>
                      </div>
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <!-- <button class="btn btn-primary" type="button">Cancel</button>-->
                          <button type="submit" class="btn btn-info pull-right" Onclick=" return validate()">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
        </div>    </div>
			
            <!-- /.box-header -->
            <!-- form start -->
 
            <!-- /.box-body -->
            
  <!-- /.content-wrapper -->

  <!--<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; <a href=""> MCA Studio</a>.</strong> All rights
    reserved.
  </footer>-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     <!-- <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>-->
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
     
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>