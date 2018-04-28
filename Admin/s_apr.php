<?php

session_start();

	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$sql="update seller set apr='Y' where s_id=$x;";
	mysqli_query($con,$sql);
	
	$sl="select * from seller where s_id=$x;";
	$r=mysqli_query($con,$sl);
	$rs = mysqli_fetch_array($r);
	$sid=$rs['s_id'];
	$sname=$rs['s_name'];
	$sano=$rs['s_ano'];
	$smob=$rs['s_mob'];
	$smail=$rs['s_email'];
	
	$sqle="INSERT INTO `saccount`(`sid`, `sname`, `a_no`, `amt`) VALUES ('$sid','$sname','$sano','0')";
	mysqli_query($con,$sqle);
	
	
	
	
	header("location:Admin_seller.php");
	
	echo "<script>var confirm = confirm(\"Seller has been approved!\");
          if(confirm){ 
              window.location='Admin_seller.php';
           }
		   else{
			   window.location='Admin_Home.php';
		   }
          </script>";
	
	
?>