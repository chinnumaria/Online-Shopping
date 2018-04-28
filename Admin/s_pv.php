<?php
	session_start();
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$y=$_GET['y'];
	
				
				$sq="select * from registration where name='$y';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$uid=$row["uid"];
				
				
	
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
   <a href="Seller_home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Elite Shoppy</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

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
                 <!--<a href="" class="btn btn-default btn-flat">Profile</a>-->
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
		  <li class="treeview active">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>VIEW</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="s_msg.php"><i class="fa fa-circle-o"></i> Messages</a></li>
			<li class="active"><a href="seller_oview.php"><i class="fa fa-circle-o"></i> Orders</a></li>
			<li><a href="s_odet.php"><i class="fa fa-circle-o"></i> Order Details</a></li>
			<li><a href="seller_pview.php"><i class="fa fa-circle-o"></i> Products</a></li>
			<li><a href="s_w.php"><i class="fa fa-circle-o"></i> Warnings</a></li>
<!--<li><a href=""><i class="fa fa-circle-o"></i> View Sellors</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> View Feedback</a></li>-->
          </ul>
        </li>
		
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Product Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form class="form-horizontal">
              <div class="box-body">
                
				<?php
								$id=$_SESSION["txtemail"];
								$con=mysqli_connect("localhost","maria","maria","os");
								$sq="select * from registration where name='$y';";
								$ress=mysqli_query($con,$sq);
								$rowe=mysqli_fetch_assoc($ress);
								$uid=$rowe["uid"];
								
								$sel="SELECT * from p_seller where pid='$x' and uid='$uid'";
								$res=mysqli_query($con,$sel);
								$row=mysqli_fetch_assoc($res);
							
								/* echo $sel; */
										$unn=$row["uid"];
										$pn=$row["pname"];
										$qty=$row["qty"];
										$amt=$row["amount"];
										$date=$row["date"];
										
					echo "
					<div class='form-group'>					
                  <label for='inputEmail3' class='col-sm-2 control-label' >Product Name</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$pn' >
                </div> </div>
				
				<div class='form-group'>					
                  <label for='inputEmail3' class='col-sm-2 control-label'>Quantity</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$qty'>
                </div> </div>
				<div class='form-group'>					
                  <label for='inputEmail3' class='col-sm-2 control-label'>Price</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$amt'>
                </div> </div>
				<div class='form-group'>					
                  <label class='col-sm-2 control-label' for='inputEmail3'>Date</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$date'>
                </div> </div>
				";
                ?>
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

       

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User Address</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
			  <?php
			  $sez="SELECT * from registration where uid='$unn';";
											$rez=mysqli_query($con,$sez);
											$rw=mysqli_fetch_assoc($rez);
											$una=$rw["name"];
											$mail=$rw["email"];
				 $sz="SELECT * from u_profile where uid='$unn';";
											$rz=mysqli_query($con,$sz);
											$rwz=mysqli_fetch_assoc($rz);
											$mob=$rwz["ph"];
											$adr=$rwz["address"];
											$loc=$rwz["locality"];
											$city=$rwz["city"];
											$pin=$rwz["pin"];
											
											
                echo "<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>Name</label>

                  <div class='col-sm-10'>
                    <input type='email' class='form-control' id='inputEmail3' readonly value='$una'>
                  </div>
                </div>
				<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>Email</label>

                  <div class='col-sm-10'>
                    <input type='email' class='form-control' id='inputEmail3' readonly value='$mail'>
                  </div>
                </div>
				<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>Mobile</label>

                  <div class='col-sm-10'>
                    <input type='email' class='form-control' id='inputEmail3' readonly value='$mob'>
                  </div>
                </div>
				<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>Address</label>

                  <div class='col-sm-10'>
                    <input type='email' class='form-control' id='inputEmail3' readonly value='$adr'>
                  </div>
                </div>
				<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>Location</label>

                  <div class='col-sm-10'>
                    <input type='email' class='form-control' id='inputEmail3' readonly value='$loc'>
                  </div>
                </div>
				<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>City</label>

                  <div class='col-sm-10'>
                    <input type='email' class='form-control' id='inputEmail3' readonly value='$city'>
                  </div>
                </div>
				<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>Pin Code</label>

                  <div class='col-sm-10'>
                    <input type='email' class='form-control' id='inputEmail3' readonly value='$pin'>
                  </div>
                </div>";
				?>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <?php echo "<button type='button' onClick=window.location.href='s_pa.php?x=$x&y=$unn' class='btn btn-info pull-right'>Aprove</button>";?>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <div class="control-sidebar-bg"></div>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
