<?php
session_start();
	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	
	
				
				$sq="select * from seller where s_id='$x';";
				$res=mysqli_query($con,$sq);
				$row=mysqli_fetch_assoc($res);
				$sn=$row["s_name"];
				$so=$row["s_owner"];
				$sm=$row["s_email"];
				$smob=$row["s_mob"];
				$sadr=$row["s_adr"];
				$sp=$row["s_pin"];
				
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
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
					echo "<img src='dist/imgs/MALE.jpg' class='user-image' alt='User Image'>";
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
					echo "<img src='dist/imgs/FEMALE.jpg' class='user-image' alt='User Image'>";
				}
				else
				{
					echo "<img src='dist/imgs/MALE.jpg' class='user-image' alt='User Image'>";
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
		  <li class="treeview active">
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
		  <li class="active"><a href="Admin_dslr.php"><i class="fa fa-circle-o"></i> Sellors</a></li>
            <li><a href="View_Users.php"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Salary</span>
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
            <i class="fa fa-edit"></i> <span>Reports</span>
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
	 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Seller Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form class="form-horizontal">
              <div class="box-body">
                
				<?php
								/* $id=$_SESSION["txtemail"];
								$con=mysqli_connect("localhost","maria","maria","os");
								$sq="select * from seller where name='$y';";
								$ress=mysqli_query($con,$sq);
								$rowe=mysqli_fetch_assoc($ress);
								$uid=$rowe["uid"];
								
								$sel="SELECT * from p_seller where pid='$x' and uid='$uid'";
								$res=mysqli_query($con,$sel);
								$row=mysqli_fetch_assoc($res);
							
								/* echo $sel; 
										$unn=$row["uid"];
										$pn=$row["pname"];
										$qty=$row["qty"];
										$amt=$row["amount"];
										$date=$row["date"]; */
										
					echo "
					<div class='form-group'>					
                  <label for='inputEmail3' class='col-sm-2 control-label' >SELLER</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$sn' >
                </div> </div>
				
				<div class='form-group'>					
                  <label for='inputEmail3' class='col-sm-2 control-label'>OWNER</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$so'>
                </div> </div>
				<div class='form-group'>					
                  <label for='inputEmail3' class='col-sm-2 control-label'>EMAIL</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$sm'>
                </div> </div>
				<div class='form-group'>					
                  <label class='col-sm-2 control-label' for='inputEmail3'>MOBILE</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$smob'>
                </div> </div>
				<div class='form-group'>					
                  <label class='col-sm-2 control-label' for='inputEmail3'>ADDRESS</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$sadr'>
                </div> </div>
				<div class='form-group'>					
                  <label class='col-sm-2 control-label' for='inputEmail3'>PINCODE</label>
				  <div class='col-sm-10'>
                  <input type='text' class='form-control' id='inputEmail3' readonly value='$sp'>
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
              <h3 class="box-title">Enter Message</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
			  <?php
			 echo "<form class='form-horizontal' method='post' action='a_smsg.php?x=$x'>
              <div class='box-body'>";
											
											
                echo "<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>SUBJECT</label>

                  <div class='col-sm-10'>
                    <input type='text' name='sub' id='sub' required class='form-control'  >
                  </div>
                </div>
				<div class='form-group'>
                  <label for='inputEmail3' class='col-sm-2 control-label'>MESSAGE</label>

                  <div class='col-sm-10'>
                    <textarea class='form-control' name='msg' id='msg' required  rows='8' placeholder='Enter ...' ></textarea>
                  </div>
                </div>";
				?>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <?php echo "<input type='submit' name='SEND' value='SEND'  class='btn btn-info pull-right'>";?>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
      <!-- /.row -->
    </section>

  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->

  <!-- Control Sidebar -->
  
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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>