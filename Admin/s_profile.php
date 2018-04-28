<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Seller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>VIEW</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="s_msg.php"><i class="fa fa-circle-o"></i> Messages</a></li>
			<li><a href="seller_oview.php"><i class="fa fa-circle-o"></i> Orders</a></li>
			<li><a href="s_odet.php"><i class="fa fa-circle-o"></i> Order Details</a></li>
			<li><a href="seller_pview.php"><i class="fa fa-circle-o"></i> Products</a></li>
			<li><a href="s_w.php"><i class="fa fa-circle-o"></i> Warnings</a></li>
<!--<li><a href=""><i class="fa fa-circle-o"></i> View Sellors</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> View Feedback</a></li>-->
          </ul>
        </li>
		
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Profile</h3>

          
        </div>
        <div class="box-body">
         
		 <img class="profile-user-img img-responsive img-circle" src='dist/imgs/s.jpg' alt="User profile picture">
		 
		<?php $id=$_SESSION["txtemail"];
								$con=mysqli_connect("localhost","maria","maria","os");
								$sq="select * from seller where s_email='$id';";
								$ress=mysqli_query($con,$sq);
								$rowe=mysqli_fetch_assoc($ress);
								
								
								
										$sn=$rowe["s_name"];
										$so=$rowe["s_owner"];
										$mail=$rowe["s_email"];
										$mob=$rowe["s_mob"];
										$adr=$rowe["s_adr"];
										$pin=$rowe["s_pin"];
										$ac=$rowe["s_ano"];

             echo "<h3 class='profile-username text-center'>$sn</h3>"; 
			 
			 
			 
			 ?>
			 <br/> 
			 <div width="190">
			 <table class="table table-bordered" align='center' width="190">
			 <th style="width: 135px"></th>
                  
                  <th style="width: 100px"></th>
			  
					<tr> <td align="right"><b >Owner </b></td>
					<td><a class="pull-left"><b><?php echo $so;?></b></a></td></tr>
					<tr> <td align="right"><b>Email </b></td>
					<td><a class="pull-left"><b><?php echo $mail;?></b></a></td></tr>
					<tr> <td align="right"><b>Phone <b/></td>
					<td><a class="pull-left"><b><?php echo $mob;?></b></a></td></tr>
					<tr> <td align="right"><b>Account No </b></td>
					<td><a class="pull-left"><b><?php echo $ac;?></b></a></td></tr>
					<tr> <td align="right"><b>Address <b/></td>
					<td><a class="pull-left"><b><?php echo $adr; echo "</br>"; echo "Pin: "; echo $pin;?></b></a></td></tr>
					
			 </table>
			 
		 </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <!--Footer-->
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

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
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
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
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
