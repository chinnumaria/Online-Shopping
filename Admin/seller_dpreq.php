<?php
session_start();

	$con=mysqli_connect("localhost","maria","maria","os");
	$x=$_GET['x'];
	$sql="update product set p_select='d' where p_id=$x;";
	mysqli_query($con,$sql);
	
	/* header("location:seller_pview.php"); */
	
	echo "<script>var confirm = confirm(\"Request Submitted Successfullly!\");
          if(confirm){ 
              window.location='seller_pview.php';
           }
		   else{
			   window.location='seller_pview.php';
		   }
          </script>";
	
	
?>