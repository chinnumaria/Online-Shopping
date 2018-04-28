<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","maria","maria","os");
$s=mysqli_query($con,"SELECT p_id,p_seller,COUNT(p_seller) as ct from product where p_id IN (SELECT `pid` FROM `purchase`) GROUP BY `p_seller` ORDER BY COUNT(p_seller) DESC");

 while($row = $s->fetch_assoc()){
    $dataPoints[] = array("label" => $row['p_seller'], "y" => $row['ct']);
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Elite | Admin</title>
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
		
		<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Purchase - Seller Chart"
	},
	axisY: {
		title: "Number of Purchase",
		includeZero: false
	},
	data: [{
		type: "column",
		yValueFormatString: "$#,##0.00",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="Admin_Home.php" class="logo">
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
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php
				$id=$_SESSION['txtemail'];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select gender from registration where email='$id';"; 
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				/* if($row['gender']=='Female')
				{
					echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				}
				else
				{
					echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				}	 */
			   
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select name from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo "<span class='hidden-xs'>".$row['name']."</span>";
			    ?>
              
             
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
			  <?php
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select gender from registration where email='$id';"; 
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				/* if($row['gender']=='Female')
				{
					
				}
				else
				{
					echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				}  */
				
			    ?>

               <p>
                <?php
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select name from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo $row['name'];
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
                  <a href="pages/examples/A_login.html" class="btn btn-default btn-flat">Sign out</a>
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
				echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				/*$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				 if($row['gender']=='Female')
				{
					echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				}
				else
				{
					echo "<img src='dist/imgs/MALE.jpg' class='user-image' alt='User Image'>";
				} */
				
			    ?>
        </div>
        <div class="pull-left info">
          <?php
				$id=$_SESSION["txtemail"];
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select name from registration where email='$id';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				echo "<p>".$row['name']."</p>";
			?>
			 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          
        </div>
      </div>
      <!-- search form -->
      
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
            <span>REQUESTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
            
			<li ><a href="Admin_seller.php"><i class="fa fa-circle-o"></i> Add Seller</a></li>
			<li ><a href="Admin_epro.php"><i class="fa fa-circle-o"></i> Edit Product</a></li>
			<li ><a href="Admin_epr.php"><i class="fa fa-circle-o"></i> Delete Product</a></li>
			<li ><a href="Admin_addsp.php"><i class="fa fa-circle-o"></i> Seller Product</a></li>
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
		  <li><a href="Admin_fp.php"><i class="fa fa-circle-o"></i> Featured Products</a></li>
		  <li><a href="feedback.php"><i class="fa fa-circle-o"></i>Feedback</a></li>
		  <li><a href="p_details.php"><i class="fa fa-circle-o"></i>Payment Details</a></li>
		  <li><a href="View_Product.php"><i class="fa fa-circle-o"></i> Products</a></li>
		  <li><a href="Admin_dslr.php"><i class="fa fa-circle-o"></i> Sellors</a></li>
            <li><a href="View_Users.php"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>SALARY</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Admin_pays.php"><i class="fa fa-circle-o"></i> Pay Salary</a></li>
			
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>REPORTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Admin_pd.php"><i class="fa fa-circle-o"></i> Purchase</a></li>
			 <li><a href="Admin_ssalary.php"><i class="fa fa-circle-o"></i> Salary</a></li>
          </ul>
        </li>
  </aside>

        
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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
			
			<?php
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select p_id from product;";
				$res=mysqli_query($con,$sq);
				$rowCount = mysqli_num_rows($res);
				echo "<h3>".$rowCount."</h3>";
			 ?>
              <p>Products</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="View_Product.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              

			  <?php
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select s_id from seller;";
				$res=mysqli_query($con,$sq);
				$rowCount = mysqli_num_rows($res);
				echo "<h3>".$rowCount."</h3>";
			   ?>
			  
              <p>Sellers</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-user"></i>
            </div>
            <a href="Admin_dslr.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
          
			  <?php
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select name from registration where usertype=1;";
				$res=mysqli_query($con,$sq);
				$rowCount = mysqli_num_rows($res);
				echo "<h3>".$rowCount."</h3>";
			   ?>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="View_Users.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        
		 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
          
			  <?php
				$con=mysqli_connect("localhost","maria","maria","os");
				$sq="select * from account;";
				$resi=mysqli_query($con,$sq);
				$rew=mysqli_fetch_assoc($resi);
				$amt=$rew["amount"];
				echo "<h4 style='font-weight: bold;'>$amt</h4>";
			?>

              <p>Current Amount</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-inr"></i>
            </div>
            <a href="View_Users.php" class="small-box-footer">
               <i class=""></i>
            </a>
          </div>
        </div>
		
		
		
        <!-- ./col -->
      </div>
      <!-- /.row -->
			
            <!-- /.box-header -->
            <!-- form start -->
 
            <!-- /.box-body -->
    <div id="chartContainer" style="height: 370px; max-width: 820px; margin: 0px auto;"></div>
  </div>
   </div>
    </div>
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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>      
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
